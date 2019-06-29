(function (_, $) {

    var $checkout,
        $country,
        $city,
        $zipCode,
        $autocompleteCity,
        $shippingMethods,
        $userProfiles,
        $name,
        $captcha,
        $shipToAnother;

    var SHIPPING_PREFIX = 's_',
        BILLING_PREFIX = 'b_',
        NAME_SEPARATOR = ' ',
        EMPTY_STATE_CODE = '\u00a0'; // "\xc2\xa0"

    function assign(obj, keyPath, value) {
        var lastKeyIndex = keyPath.length-1;
        for (var i = 0; i < lastKeyIndex; ++ i) {
            var key = keyPath[i];
            if (!(key in obj))
                obj[key] = {};
            obj = obj[key];
        }
        obj[keyPath[lastKeyIndex]] = value;
    }

    var methods = {
        init: function ($jelm) {
            $checkout = $jelm;
            $country = methods.getElement('country');
            $city = methods.getElement('city');
            $zipCode = methods.getElement('zipcode');
            $autocompleteCity = methods.getElement('city-autocomplete');
            $shippingMethods = methods.getElement('shipping-methods');
            $userProfiles = methods.getElement('user-profiles');
            $name = methods.getElement('fullname');
            $shipToAnother = methods.getElement('ship-to-another');

            if ($autocompleteCity.length) {
                methods.initAutocompleteCity();
            } else {
                methods.initPlainCityInput();
            }

            methods.bindAbandonedCartFieldsSaving();
            methods.initMultipleProfileRoutines();
            methods.toggleAddress();

            methods.setupCheckoutForm(methods.getElement('checkout-form'));
        },

        bindAbandonedCartFieldsSaving: function () {
            var update_customer_info = $.debounce(methods.updateCustomerInfo.bind(this, null, false, true, true), 1000);

            $('[data-ca-lite-checkout-auto-save="true"]', $checkout).on('input _input', update_customer_info);
            $('[data-ca-lite-checkout-auto-save-on-change="true"]', $checkout).on('change', update_customer_info);
        },

        initMultipleProfileRoutines: function () {
            if ($userProfiles.length === 0) {
                return;
            }

            $('.js-lite-checkout-edit-profile-popup-opener').on('change click', methods.openEditProfilePopup);
            $('.js-lite-checkout-profile-selector', $userProfiles).on('change', methods.switchProfile);
        },

        lockShippingMethodSelector: function () {
            $shippingMethods.toggleClass($shippingMethods.data('caLiteCheckoutOverlayClass'), true);
        },

        unlockShippingMethodSelector: function () {
            $shippingMethods.toggleClass($shippingMethods.data('caLiteCheckoutOverlayClass'), false);
        },

        setupCheckoutForm: function ($checkoutForm) {
            $.ceEvent('on', 'ce.formpost_' + $checkoutForm.prop('name'), function (form) {
                var $checkoutForm = $(form);

                if ($checkoutForm.data('caLiteCheckoutReadyForCheckout') === true) {
                    $.toggleStatusBox('show', {
                        statusContent: '<span class="ty-ajax-loading-box-with__text-wrapper">' + _.tr('placing_order') + '</span>',
                        statusClass: 'ty-ajax-loading-box_text_block'
                    });
                    return true;
                }

                return methods.check(function (result) {
                    if (!result) {
                        return false;
                    }

                    methods.updateCustomerInfo(function (data) {
                        setTimeout(function () {
                            $checkoutForm.data('caLiteCheckoutReadyForCheckout', true);
                            $checkoutForm.submit();
                        }, 100);
                    }, false, true);

                    return false;
                });
            });
        },

        check: function (callback) {
            callback = callback || false;

            if (callback === false) {
                return true;
            }

            var result = $checkout.ceFormValidator('check'); // check
            $checkout.ceFormValidator('check', false); // notice

            return callback(result);
        },

        serializeCheckout: function (userDataExtend) {
            userDataExtend = typeof userDataExtend === 'undefined' ? {} : userDataExtend;

            var shipToAnother = $shipToAnother.val() === '1';

            var serializedCheckout = {
                result_ids: 'litecheckout_form,checkout_info*,checkout_order_info*',
                dispatch: 'checkout.update_steps',
                full_render: 'Y',
                user_data: {}
            };

            var $serializedFields = $('[data-ca-lite-checkout-field]', $checkout);
            $serializedFields
                .filter(function (key, field) {
                    var $field       = $(field),
                        is_checkable = $field.is(':checkbox') || $field.is(':radio');
                    return !is_checkable || $field.is(':checked');
                })
                .each(function(index, elm) {
                    var $elm = $(elm),
                        value;
                    if ($(elm).data('caLiteCheckoutElement')) {
                        value = methods.getElement($(elm).data('caLiteCheckoutElement')).val();
                    } else {
                        value = $elm.val();
                    }
                    var keyPath = $elm.data('caLiteCheckoutField').split('.');

                    assign(serializedCheckout, keyPath, value);
                });

            var userData = serializedCheckout.user_data;

            if (userData.first_name_and_last_name) {
                var fullNameParts = methods.splitFullname(userData.first_name_and_last_name);
                userData.firstname = fullNameParts[0];
                userData.lastname = fullNameParts[1];
            }
            if (userData.s_first_name_and_last_name) {
                var shippingNameParts = methods.splitFullname(userData.s_first_name_and_last_name);
                userData.s_firstname = shippingNameParts[0];
                userData.s_lastname = shippingNameParts[1];
            }

            if (userData.customer_notes) {
                serializedCheckout.customer_notes = userData.customer_notes;
            }

            serializedCheckout.user_data = userData;

            if (userDataExtend) {
                serializedCheckout.user_data = $.extend(serializedCheckout.user_data, userDataExtend);
            }

            if (!shipToAnother) {
                var userDataFields = Object.keys(serializedCheckout.user_data);
                for (var i in userDataFields) {
                    var fieldName = userDataFields[i];
                    if (fieldName.indexOf(SHIPPING_PREFIX) !== 0) {
                        continue;
                    }

                    serializedCheckout.user_data[BILLING_PREFIX + fieldName.substr(2)] = serializedCheckout.user_data[fieldName];
                }
            }

            if ($captcha) {
                serializedCheckout[$captcha.prop('name')] = $captcha.val();
            }

            return serializedCheckout;
        },

        splitFullname: function (fullname) {
            var nameParts = fullname.split(NAME_SEPARATOR).map(function(part) {
                    return part.trim();
                }).filter(function(part) {
                    return part !== '';
                }),
                firstname = nameParts.shift(),
                lastname = nameParts.join(NAME_SEPARATOR);

            return [firstname, lastname];
        },

        updateShipping: function (userDataExtend) {
            $.ceAjax('request', fn_url(''), {
                method: 'post',
                caching: false,
                data: methods.serializeCheckout(userDataExtend)
            });
        },

        autocompleteCity: function (query, countryCode, callback) {
            var url = $autocompleteCity.data('caLiteCheckoutAutocompleteUrl'),
                method = $autocompleteCity.data('caLiteCheckoutAutocompleteRequestMethod'),
                cityParam = $autocompleteCity.data('caLiteCheckoutAutocompleteCityParam'),
                countryParam = $autocompleteCity.data('caLiteCheckoutAutocompleteCountryParam'),
                itemsPerPageParam = $autocompleteCity.data('caLiteCheckoutAutocompleteItemsPerPageParam'),
                itemsPerPage = $autocompleteCity.data('caLiteCheckoutAutocompleteItemsPerPage'),
                hidden = $autocompleteCity.data('caLiteCheckoutAutocompleteHidden') !== false,
                caching = $autocompleteCity.data('caLiteCheckoutAutocompleteCaching') !== false,
                ajaxCallback = callback || $.noop;

            var requestData = {};
            requestData[cityParam] = query;
            requestData[countryParam] = countryCode;
            requestData[itemsPerPageParam] = itemsPerPage;

            $.ceAjax('request', url, {
                method: method,
                hidden: hidden,
                caching: caching,
                data: requestData,
                callback: function (data) {
                    ajaxCallback(data);
                }
            })
        },

        setLocation: function(city, stateCode, state, zipcode) {
            // update plain fields
            $city.val(city);
            $zipCode.val(zipcode ? zipcode : '');
            methods.getElement('state').val(stateCode ? stateCode : state);

            // update autocomplete field
            $autocompleteCity.val(city + (state ? ' (' + state + ')' : ''));

            methods.updateShipping({s_zipcode: zipcode});
        },

        initAutocompleteCity: function () {
            $autocompleteCity.on('focus', function (e) {
                if ($autocompleteCity.val() !== '') {
                    return;
                }
                methods.lockShippingMethodSelector();
            }).on('input', function (e) {
                methods.lockShippingMethodSelector();
            });

            $autocompleteCity.autocomplete({
                appendTo: "#litecheckout_autocomplete_dropdown",

                source: function (request, response) {
                    var countryCode = $country.val();

                    methods.autocompleteCity(request.term, countryCode, function(data) {
                        for (var i = 0; i < data.autocomplete.length; i++) {
                            data.autocomplete[i].label = data.autocomplete[i].value
                                + (data.autocomplete[i].state
                                    ? ' (' + data.autocomplete[i].state + ')'
                                    : ''
                                );
                        }

                        $autocompleteCity.data('caLiteCheckoutAutocompleteList', data.autocomplete);

                        response(data.autocomplete);
                    });
                },

                select: function (event, ui) {
                    event.preventDefault();
                    methods.setLocation(ui.item.value, ui.item.state_code, ui.item.state, ui.item.zipcode);
                }
            });

            $country.on('change', function (e, extra) {
                if (extra && !extra.is_triggered_by_user) {
                    return;
                }

                methods.getElement('state').val('');
                $city.val('');
                $autocompleteCity.val('');

                $autocompleteCity.focus();
            });

            $shippingMethods.on('click', function (e) {
                if (!$(this).hasClass($(this).data('caLiteCheckoutOverlayClass'))) {
                    return;
                }

                var cityState = $autocompleteCity.val(),
                    lastSelectedCityState = $autocompleteCity.data('caLiteCheckoutLastValue'),
                    autocompleteList = $autocompleteCity.data('caLiteCheckoutAutocompleteList');

                if (cityState) {
                    methods.unlockShippingMethodSelector();

                    if (cityState !== lastSelectedCityState) {
                        if (autocompleteList.length) {
                            methods.setLocation(
                                autocompleteList[0].value,
                                autocompleteList[0].state_code,
                                autocompleteList[0].state,
                                autocompleteList[0].zipcode
                            );
                        } else {
                            methods.setLocation(cityState, EMPTY_STATE_CODE);
                        }
                    }
                }
            });
        },

        initPlainCityInput: function () {
            var $states = methods.getElement('state', true);

            $city.on('focus', function (e) {
                if ($(this).val() !== '') {
                    return;
                }
                methods.lockShippingMethodSelector();
            }).on('input', function (e) {
                methods.lockShippingMethodSelector();
            });

            $states.on('focus', function (e) {
                if ($(this).val() !== '') {
                    return;
                }
                methods.lockShippingMethodSelector();
            }).on('input change', function(e) {
                $states.val(methods.getElement('state').val());
                methods.lockShippingMethodSelector();
            });

            $country.on('change', function (e, extra) {
                if (extra && !extra.is_triggered_by_user) {
                    $states.val(methods.getElement('state').val());
                    return;
                }

                $city.val('');
                $city.focus();
            });

            $shippingMethods.on('click', function (e) {
                if (!$(this).hasClass($(this).data('caLiteCheckoutOverlayClass'))) {
                    return;
                }

                var $state = methods.getElement('state'),
                    city = $city.val(),
                    state = $state.val(),
                    lastSelectedCity = $city.data('caLiteCheckoutLastValue'),
                    lastSelectedState = $state.data('caLiteCheckoutLastValue');

                var isCityChanged = city !== lastSelectedCity,
                    isStateChanged = state !== lastSelectedState;

                var stateCode = '';
                if ($state.data('caLiteCheckoutIsStateCodeContainer')) {
                    stateCode = state;
                    state = $state.find('option:selected').text();
                }

                if (state && city) {
                    methods.unlockShippingMethodSelector();
                    if (isCityChanged || isStateChanged) {
                        methods.setLocation(city, stateCode, state);
                    }
                }
            });
        },

        toggleAddress: function (isEnabled) {
            if (typeof isEnabled === 'undefined') {
                var $selectedShippingMethods = $('[data-ca-lite-checkout-element="shipping-method"]:checked');
                isEnabled = false;
                $selectedShippingMethods.each(function(i, elm) {
                    isEnabled = isEnabled || $(elm).data('caLiteCheckoutIsAddressRequired');
                });

                // when no one shipping method available
                if (!$selectedShippingMethods.length) {
                    isEnabled = true;
                }
            }

            var $addressRow = methods.getElement('address-group');
            $addressRow.toggleClass('hidden', !isEnabled);
            $addressRow.find('.cm-required,.cm-required-removed')
                .toggleClass('cm-required-removed', !isEnabled)
                .toggleClass('cm-required', isEnabled);
        },

        openEditProfilePopup: function (e) {
            e.preventDefault();

            var $target = $(e.target),
                profileId = $target.data('caProfileId');

            $('.js-edit-profile-' + profileId).click();
        },

        switchProfile: function (e) {
            var profileId = parseInt($(e.target).val());
            if (!profileId) {
                return;
            }

            $.ceAjax('request', fn_url('checkout.customer_info'), {
                method: 'POST',
                hidden: false,
                caching: false,
                result_ids: 'litecheckout_final_section,litecheckout_step_payment,shipping_rates_list,checkout*',
                data: { profile_id: profileId, full_render: 'Y' },
            })
        },

        updateCustomerInfo: function (callback, recalculate_cart, hidden, clear_notifications) {
            if (typeof recalculate_cart === 'undefined') {
                recalculate_cart = true;
            }
            callback = callback || $.noop;
            clear_notifications = clear_notifications || false;

            var data = methods.serializeCheckout();

            if ($captcha && $.is.blank(data[$captcha.prop('name')])) {
                return false;
            }

            data.dispatch = 'checkout.customer_info';
            data.result_ids = '';
            data.full_render = null;
            data.recalculate_cart = recalculate_cart ? 'Y': 'N';

            $.ceAjax('request', fn_url(''), {
                method: 'post',
                caching: false,
                hidden: hidden || false,
                data: data,
                callback: function (response) {
                    for (var i in response.notifications) {
                        if (response.notifications[i].type === 'E') {
                            return;
                        }
                    }

                    methods.toggleAddress();

                    callback(data, response);
                },
                pre_processing: function (response) {
                    if (response.notifications && clear_notifications) {
                        delete response.notifications;
                    }
                }
            });
        },

        setImageVerificationField: function ($elm) {
            $captcha = $elm;
        },

        setImageVerificationResult: function (response) {
            $captcha.val(response);
        },

        getElement: function (role, getAll) {
            var selector = '[data-ca-lite-checkout-element="' + role + '"]';
            if (getAll !== true) {
                selector += ':not(:disabled)';
            }

            return $(selector, $checkout);
        }
    };

    $.extend({
        ceLiteCheckout: function (method) {
            if (methods[method]) {
                return methods[method].apply(this, Array.prototype.slice.call(arguments, 1));
            } else {
                $.error('ty.ceLiteCheckout: method ' + method + ' does not exist');
            }
        }
    });

    $.ceEvent('on', 'ce.commoninit', function (context) {
        var $liteCheckoutForm = $('[data-ca-lite-checkout-element="form"]', context);
        if ($liteCheckoutForm.length) {
            $.ceLiteCheckout('init', $liteCheckoutForm);
        }
    });

    $.ceEvent('on', 'ce.image_verification.ready', function (field_name) {
        $.ceLiteCheckout('setImageVerificationField', $('[name="' + field_name + '"]'));
    });

    $.ceEvent('on', 'ce.image_verification.passed', function (token) {
        $.ceLiteCheckout('setImageVerificationResult', token);
    });

    $.ceEvent('on', 'ce.image_verification.failed', function () {
        $.ceLiteCheckout('setImageVerificationResult', '');
    });

    $(_.doc).on('click', '.cm-open-pickups', function (e) {
        $( $(this).data('caTarget') )
            .toggleClass('hidden-phone', false)
            .ceDialog('open', { title: $(this).data('caTitle') });

        var $dialogBody = $.ceDialog('get_last'),
            $dialogBodyContainer = $dialogBody.parents('.ui-dialog'),
            $objectContainer = $('.object-container', $dialogBody);

        _resize();

        $.ceEvent('on', 'ce.window.resize', function () {
            _resize();
        });

        $.ceEvent('on', 'ce.shipping.select-store', function () {
            try {
                $dialogBody.ceDialog('close'); // force closing dialog
            } catch (e) { /* dummy */ }
        });

        function _resize () {
            $dialogBodyContainer.css({ width: 'auto', left: 0, right: 0, top: 0, bottom: 0, position: 'fixed' });
            $objectContainer.css({ padding: 0 });
        }
    });

})(Tygh, Tygh.$);
