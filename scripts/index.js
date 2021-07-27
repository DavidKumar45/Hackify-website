$(window).on('load', function () {
    $('.loader').fadeOut('slow');
})



$(document).ready(function () {

    $('.btn-close').click(function () {
        $('video').trigger('pause');
    })

    $('.menu-icon').click(function () {
        $('.menu-bar-cont').slideToggle('show');
    });
})