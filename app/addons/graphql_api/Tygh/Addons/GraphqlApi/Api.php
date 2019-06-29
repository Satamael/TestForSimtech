<?php
/***************************************************************************
 *                                                                          *
 *   (c) 2004 Vladimir V. Kalynyak, Alexey V. Vinokurov, Ilya M. Shalnev    *
 *                                                                          *
 * This  is  commercial  software,  only  users  who have purchased a valid *
 * license  and  accept  to the terms of the  License Agreement can install *
 * and use this program.                                                    *
 *                                                                          *
 ****************************************************************************
 * PLEASE READ THE FULL TEXT  OF THE SOFTWARE  LICENSE   AGREEMENT  IN  THE *
 * "copyright.txt" FILE PROVIDED WITH THIS DISTRIBUTION PACKAGE.            *
 ****************************************************************************/

namespace Tygh\Addons\GraphqlApi;

use GraphQL\Error\Error;
use GraphQL\GraphQL;
use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\ResolveInfo;
use GraphQL\Type\Schema;

class Api
{
    protected $schema;

    public function __construct(array $query_schema, array $mutation_schema)
    {
        $this->schema = new Schema([
            'query'    => new ObjectType($query_schema),
            'mutation' => new ObjectType($mutation_schema),
        ]);
    }

    public function execute($query, array $variables = [], $context = null)
    {
        return GraphQL::executeQuery(
            $this->schema,
            $query,
            null,
            $context,
            $variables
        );
    }

    /**
     * Dispatches GraphQL request to the corresponding entity and returns its response.
     *
     * @param                                      $source
     * @param                                      $args
     * @param \Tygh\Addons\GraphqlApi\Context      $context
     * @param \GraphQL\Type\Definition\ResolveInfo $info
     *
     * @return mixed
     * @throws \GraphQL\Error\Error
     */
    public static function dispatchRequest($source, $args, Context $context, ResolveInfo $info) {
        $operation_type = fn_camelize($info->operation->operation);
        $field = fn_camelize($info->fieldName);

        $handler_class = sprintf('\Tygh\Addons\GraphqlApi\Handler\%s\%s', $operation_type, $field);
        if (!class_exists($handler_class)) {
            throw new Error('Not found');
        }
        /** @var \Tygh\Addons\GraphqlApi\Handler\IHandler $handler */
        $handler = new $handler_class($source, $args, $context);

        /** @var \Tygh\Addons\GraphqlApi\Validator\PrivilegeValidator $privilege_validator */
        $privilege_validator = $context->getApp()['graphql_api.validator.privilege'];
        if (!$privilege_validator->validate($context->getUserId(), $context->getUserType(), $handler)) {
            throw new Error('Access denied');
        }

        $result = $handler->run();

        return $result;
    }
}
