$(window).bind('resize load', function() {
    if ($(this).width() > 767) {
        $('.collapse').addClass('show');
    } else {
        $('.collapse').removeClass('show');
    }
});
