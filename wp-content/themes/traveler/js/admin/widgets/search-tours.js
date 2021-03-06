jQuery(function (e) {
    function t() {
        e(".fields-wrap").each(function () {
            e(this).sortable({
                placeholder: "ui-state-highlight",
                axis: "y",
                stop: function (e, t) {
                    var i = t.item.index();
                    t.item.find(".field_order").val(i)
                }
            })
        })
    }
    e(document).ajaxSuccess(function (e, i, n) {
        t()
    }), e(window).on('load', function () {
        t()
    }), e(document).on("click", ".st_add_field_tours", function () {
        var t = e(this).parents(".st-search-fields"),
            i = t.find(".fields-wrap .ui-state-default").length,
            n = e(st_search_tour.default_item);
        n.find(".field_name").attr("name", "field[" + i + "]"), n.find(".field_taxonomy").attr("name", "taxonomy[" + i + "]"), n.find(".field_order").attr("name", "order[" + i + "]"), n.find(".field_title").attr("name", "title[" + i + "]"), t.find(".fields-wrap").append(n).sortable("refresh")
    }), e(document).on("click", ".st_save_fields_tours", function () {
        var t = e(this).parents(".st-search-fields"),
            i = t.children(".fields-form"),
            n = [];
        i.find(".ui-state-default").each(function () {
            var t = e(this);
            n.push({
                order: t.find(".field_order").val(),
                title: t.find(".field_title").val(),
                field: t.find(".field_name").val(),
                taxonomy: t.find(".field_taxonomy").val()
            })
        }), t.find(".st_search_fields_value").val(JSON.stringify(n))
    }), e(document).on("click", ".st_delete_field", function () {
        e(this).parents(".ui-state-default").remove()
    })
});
