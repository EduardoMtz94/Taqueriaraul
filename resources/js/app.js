require('./bootstrap');

$(document).ready(function() {
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if (scroll > 20) {
            $("#lc-navbar").addClass('fixed-top');
        } else {
            $("#lc-navbar").removeClass('fixed-top');
        }
    });
});