jQuery(function ($) {
    $('form.main-search').each(function (index, el) {
        if ($(this).find('#st_google_location').length) {
            var input = $(this).find('#st_google_location')[0];
            var form = $(this);
            var autocomplete = new google.maps.places.Autocomplete(input);
            var street_number = $('input[name="st_street_number"]', form);
            var locality = $('input[name="st_locality"]', form);
            var route = $('input[name="st_route"]', form);
            var sublocality_level_1 = $('input[name="st_sublocality_level_1"]', form);
            var administrative_area_level_2 = $('input[name="st_administrative_area_level_2"]', form);
            var administrative_area_level_1 = $('input[name="st_administrative_area_level_1"]', form);
            var country = $('input[name="st_country"]', form);
            autocomplete.addListener('place_changed', function () {
                locality.val('');
                route.val('');
                sublocality_level_1.val('');
                administrative_area_level_1.val('');
                country.val('');
                var place = autocomplete.getPlace();
                if (place.geometry) {
                    $.each(place.address_components, function (index, names) {
                        if ($.inArray('locality', names.types) != -1) {
                            locality.val(names.long_name)
                        }
                        if ($.inArray('route', names.types) != -1) {
                            route.val(names.long_name)
                        }
                        if ($.inArray('sublocality_level_1', names.types) != -1) {
                            sublocality_level_1.val(names.long_name)
                        }
                        if ($.inArray('administrative_area_level_1', names.types) != -1) {
                            administrative_area_level_1.val(names.long_name)
                        }
                        if ($.inArray('country', names.types) != -1) {
                            country.val(names.long_name)
                        }
                    })
                }
            })
        }
    });
    $('form.main-search').each(function (index, el) {
        var t = $(this);
        $('a.diff-location', t).on('click', function (event) {
            $(this).toggleClass('hide');
            $('a.same-location', t).toggleClass('hide');
            $('#st_google_location_dropoff', t).parents('.form-group').toggleClass('hide');
            return !1
        });
        $('a.same-location', t).on('click', function (event) {
            $(this).toggleClass('hide');
            $('a.diff-location', t).toggleClass('hide');
            $('#st_google_location_dropoff', t).parents('.form-group').toggleClass('hide');
            street_number_off.val(street_number_up.val());
            locality_off.val(locality_up.val());
            route_off.val(route_up.val());
            sublocality_level_1_off.val(sublocality_level_1_up.val());
            administrative_area_level_2_off.val(administrative_area_level_2_up.val());
            administrative_area_level_1_off.val(administrative_area_level_1_up.val());
            country_off.val(country_up.val());
            t.find('#st_google_location_dropoff').val(t.find('#st_google_location_pickup').val());
            return !1
        });
        if (t.find('#st_google_location_pickup').length && t.find('#st_google_location_dropoff').length) {
            var pickup = t.find('#st_google_location_pickup')[0];
            var pickup_container = $('#st_google_location_pickup', t).parent('.st-google-location-wrapper');
            var autocomplete_pickup = new google.maps.places.Autocomplete(pickup);
            var street_number_up = $('input[name="st_street_number_up"]', pickup_container);
            var locality_up = $('input[name="st_locality_up"]', pickup_container);
            var route_up = $('input[name="st_route_up"]', pickup_container);
            var sublocality_level_1_up = $('input[name="st_sublocality_level_1_up"]', pickup_container);
            var administrative_area_level_2_up = $('input[name="st_administrative_area_level_2_up"]', pickup_container);
            var administrative_area_level_1_up = $('input[name="st_administrative_area_level_1_up"]', pickup_container);
            var country_up = $('input[name="st_country_up"]', pickup_container);
            var dropoff = t.find('#st_google_location_dropoff')[0];
            var dropoff_container = $('#st_google_location_dropoff', t).parent('.st-google-location-wrapper');
            var autocomplete_dropoff = new google.maps.places.Autocomplete(dropoff);
            autocomplete_dropoff.setComponentRestrictions([]);
            var street_number_off = $('input[name="st_street_number_off"]', dropoff_container);
            var locality_off = $('input[name="st_locality_off"]', dropoff_container);
            var route_off = $('input[name="st_route_off"]', dropoff_container);
            var sublocality_level_1_off = $('input[name="st_sublocality_level_1_off"]', dropoff_container);
            var administrative_area_level_2_off = $('input[name="st_administrative_area_level_2_off"]', dropoff_container);
            var administrative_area_level_1_off = $('input[name="st_administrative_area_level_1_off"]', dropoff_container);
            var country_off = $('input[name="st_country_off"]', dropoff_container);
            autocomplete_pickup.addListener('place_changed', function () {
                street_number_up.val('');
                locality_up.val('');
                route_up.val('');
                sublocality_level_1_up.val('');
                administrative_area_level_2_up.val('');
                administrative_area_level_1_up.val('');
                country_up.val('');
                street_number_off.val('');
                locality_off.val('');
                route_off.val('');
                sublocality_level_1_off.val('');
                administrative_area_level_2_off.val('');
                administrative_area_level_1_off.val('');
                country_off.val('');
                autocomplete_dropoff.setComponentRestrictions([]);
                t.find('#st_google_location_dropoff').val(t.find('#st_google_location_pickup').val());
                var place = autocomplete_pickup.getPlace();
                if (place.geometry) {
                    $.each(place.address_components, function (index, names) {
                        if ($.inArray('street_number', names.types) != -1) {
                            street_number_up.val(names.long_name);
                            street_number_off.val(names.long_name)
                        }
                        if ($.inArray('locality', names.types) != -1) {
                            locality_up.val(names.long_name);
                            locality_off.val(names.long_name)
                        }
                        if ($.inArray('route', names.types) != -1) {
                            route_up.val(names.long_name);
                            route_off.val(names.long_name)
                        }
                        if ($.inArray('sublocality_level_1', names.types) != -1) {
                            sublocality_level_1_up.val(names.long_name);
                            sublocality_level_1_off.val(names.long_name)
                        }
                        if ($.inArray('administrative_area_level_2', names.types) != -1) {
                            administrative_area_level_2_up.val(names.long_name);
                            administrative_area_level_2_off.val(names.long_name)
                        }
                        if ($.inArray('administrative_area_level_1', names.types) != -1) {
                            administrative_area_level_1_up.val(names.long_name);
                            administrative_area_level_1_off.val(names.long_name)
                        }
                        if ($.inArray('country', names.types) != -1) {
                            country_up.val(names.long_name);
                            country_off.val(names.long_name);
                            if (names.short_name != '') {
                                var ct = names.short_name.toLowerCase();
                                autocomplete_dropoff.setComponentRestrictions({
                                    'country': ct
                                })
                            }
                        }
                    })
                }
                if ($('a.diff-location').hasClass('hide') && !dropoff_container.parents('.form-group').hasClass('hide')) {
                    street_number_off.val('');
                    locality_off.val('');
                    route_off.val('');
                    sublocality_level_1_off.val('');
                    administrative_area_level_2_off.val('');
                    administrative_area_level_1_off.val('');
                    country_off.val('')
                }
            });
            autocomplete_dropoff.addListener('place_changed', function () {
                street_number_off.val('');
                locality_off.val('');
                route_off.val('');
                sublocality_level_1_off.val('');
                administrative_area_level_2_off.val('');
                administrative_area_level_1_off.val('');
                country_off.val('');
                var place = autocomplete_dropoff.getPlace();
                if (place.geometry) {
                    $.each(place.address_components, function (index, names) {
                        if ($.inArray('street_number', names.types) != -1) {
                            street_number_off.val(names.long_name)
                        }
                        if ($.inArray('locality', names.types) != -1) {
                            locality_off.val(names.long_name)
                        }
                        if ($.inArray('route', names.types) != -1) {
                            route_off.val(names.long_name)
                        }
                        if ($.inArray('sublocality_level_1', names.types) != -1) {
                            sublocality_level_1_off.val(names.long_name)
                        }
                        if ($.inArray('administrative_area_level_2', names.types) != -1) {
                            administrative_area_level_2_off.val(names.long_name)
                        }
                        if ($.inArray('administrative_area_level_1', names.types) != -1) {
                            administrative_area_level_1_off.val(names.long_name)
                        }
                        if ($.inArray('country', names.types) != -1) {
                            country_off.val(names.long_name)
                        }
                    })
                }
            })
        }
        $('#st_google_location_dropoff', t).on('focus', function (event) {
            if ($('#st_google_location_pickup', t).val() == '') {
                $('#st_google_location_pickup', t).trigger('focus')
            }
        })
    })
})
