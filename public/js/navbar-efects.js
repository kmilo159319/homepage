$(window).scroll(function() {
    if ($(this).scrollTop() > 75) {
        $('#navbar-r').addClass('navbar-scroll');
    } else {
        $('#navbar-r').removeClass('navbar-scroll');
    }
});