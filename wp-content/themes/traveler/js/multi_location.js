jQuery(function ($) {
    if ($("select.list-item-post-type").length) {
        $("select.list-item-post-type").attr('name', 'multi_location[]');
        $select = $("select.list-item-post-type").selectize({
            create: !1,
            createOnBlur: !1,
            allowEmptyOption: !0,
            persist: !1,
            maxItems: 10
        });
        if (typeof list_location != 'undefined') {
            control = $select[0].selectize;
            list_location.list = JSON.parse(list_location.list);
            if (list_location.list) {
                for (var i = 0; i < list_location.list.length; i++) {
                    list_location.list[i] = '_' + list_location.list[i] + '_'
                }

                control.setValue(list_location.list)
            }
        }
    }
})
