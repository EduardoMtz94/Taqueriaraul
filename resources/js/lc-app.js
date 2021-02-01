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

    var pathName = window.location.pathname;

    if (pathName == "/") {
        var menu = $('#menu').offset().top - 110;
        var lcPedido = $('#lc-pedido').offset().top - 110;

        $('#btn-menu').on('click', function(e) {
            e.preventDefault();
            $('html, body').animate({
                scrollTop: menu
            }, 1000);
        });

        $('#lc-arrow-header').on('click', function(e) {
            e.preventDefault();
            $('html, body').animate({
                scrollTop: menu
            }, 1000);
        });

        $("#btn-home").css({
            "text-decoration" : "underline"
        });

        $(window).scroll(function() {
            var scroll2 = $(window).scrollTop();
            if (scroll2 >= (menu - 10) && pathName == "/") {
                $("#btn-menu").css({
                    "text-decoration" : "underline"
                });
                $("#btn-home").css({
                    "text-decoration" : "none"
                });
            } else if (scroll2 < (menu - 10) && pathName == "/") {
                $("#btn-menu").css({
                    "text-decoration" : "none"
                });
                $("#btn-home").css({
                    "text-decoration" : "underline"
                });
            }
        });
    }

    if (pathName == "/gallery") {
        $("#btn-gallery").css({
            "text-decoration" : "underline"
        });
    }

    if (pathName == "/contacto") {
        $("#btn-contact").css({
            "text-decoration" : "underline"
        });
    }
});