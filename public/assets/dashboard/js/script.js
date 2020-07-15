$(document).ready(function () {

    // handle nuty delete button
    $('.delete').click(function (e) {
        //"use strict";
        e.preventDefault();
        var that = $(this);

        var noty = new Noty({
            text: 'Are you sure you want to delete?',
            type: 'warning',
            layout: 'topRight',
            killer: true,
            buttons: [
                Noty.button('Yes', 'btn btn-success px-3 mr-2', function () {
                    that.closest('form').submit();
                }),
                Noty.button('No', 'btn btn-primary px-3', function () {
                    noty.close();
                })
            ]
        });
        noty.show();
    });
});
