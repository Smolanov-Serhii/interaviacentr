jQuery(function ($) {
    $('a#delete-custom-font').on('click', function (event) {
        $confirm = confirm("Do you want to delete it?. 'Cancel' to stop, 'OK' to delete.");
        if ($confirm == !0)

            return !0;
        else return !1
    })
})
