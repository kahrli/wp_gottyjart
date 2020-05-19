jQuery(window).bind('resize load', function() {
    if (jQuery(this).width() > 767) {
        jQuery('.collapse').addClass('show');
    } else {
        jQuery('.collapse').removeClass('show');
    }
});
