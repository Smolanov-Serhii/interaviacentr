jQuery(function ($) {
    $(".st_post_select").each(function () {
        var me = $(this);
        $(this).select2({
            placeholder: me.data("placeholder"),
            minimumInputLength: 2,
            allowClear: true,
            ajax: {
                url: ajaxurl,
                dataType: "json",
                quietMillis: 250,
                data: function (term, page) {
                    return { q: term, action: "st_post_select", post_type: me.data("post-type"), author: me.data("author") };
                },
                processResults: function (data, page) {
                    return { results: data.items };
                },
                cache: true,
            },
            initSelection: function (element, callback) {
                var id = $(element).val();
                if (id !== "") {
                    var data = { id: id, name: $(element).data("pl-name"), description: $(element).data("pl-desc") };
                    callback(data);
                }
            },
            formatResult: function (state) {
                if (!state.id) return state.name;
                return state.name + "<p><em>" + state.description + "</em></p>";
            },
            formatSelection: function (state) {
                if (!state.id) return state.name;
                return state.name + "<p><em>" + state.description + "</em></p>";
            },
            escapeMarkup: function (m) {
                return m;
            },
        });
    });
});
