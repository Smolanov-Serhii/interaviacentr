jQuery(function ($) {
    var flag = !1;
    $('button#st-duplicate-data').on('click', function (event) {
        var t = $(this);
        if (flag) return !1;
        flag = !0;
        $.ajax({
            url: ajaxurl,
            type: 'POST',
            dataType: 'json',
            data: {
                action: 'st_duplicate_ajax',
                name: 'st_allow_duplicate',
            },
            beforeSend: function () {
                $('#st-duplicate-data-wrapper .spinner').addClass('is-active');
                t.text('Waiting...')
            },
        }).done(function (data) {
            $('#st-duplicate-data-wrapper .spinner').removeClass('is-active');
            if (typeof data != 'json' && data.status == 1) {
                t.text('Run');
                $('#message').text(data.msg).addClass('text-updated').slideDown('500', function () {
                    setTimeout(function () {
                        $('#message').slideUp('500').removeClass('text-updated')
                    }, 3000)
                })
            } else {
                t.text('Run');
                $('#message').text(data.msg).addClass('text-error').slideDown('500', function () {
                    setTimeout(function () {
                        $('#message').slideUp('500').removeClass('text-error')
                    }, 3000)
                })
            }
        }).fail(function (data, er) {
            console.log('error')
        }).always(function () {
            flag = !1
        });
        return !1
    })
})
