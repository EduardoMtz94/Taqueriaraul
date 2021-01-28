require('./bootstrap');

$(document).ready(function() {
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if (scroll > 44) {
            $("#lc-navbar").addClass('fixed-top');
        } else {
            $("#lc-navbar").removeClass('fixed-top');
        }
    });

    $(".lc-collapse").on("click", function(){
        var collapseName = $(this).attr('href');
        var icon = $(this).data('icon');
        console.log(icon);
        var collapseClass = $(collapseName).attr('class');
        if(collapseClass.indexOf("show") >= 0) {
            $(icon).css({
                "transform" : "rotate(180deg)"
            });
        } else {
            $(icon).css({
                "transform" : "rotate(0deg)"
            });
        }
    });
});