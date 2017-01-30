
$(document).ready(function() {

});
$(window).scroll(function() {
    if( /Android|webOS|iPhone|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {}
    else{
        if ($(this).scrollTop() > 100){
            $('.header__nav').addClass("sticky");
            $('.body__header').css("padding-top", 88);
        }
        else{
            $('.header__nav').removeClass("sticky");
            $('.body__header').css("padding-top", 0);
        }
    }

});

(function () {
    $('.hamburger-menu').on('click', function() {
        $('.bar').toggleClass('animate');
        $('.header__list').toggleClass('active');
    })
})();

(function () {
    $('.header__list').on('click', function() {
        $('.bar').toggleClass('animate');
        $('.header__list').removeClass('active');
    })
})();
$(function() {
    $('a[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top
                }, 1000);
                return false;
            }
        }
    });
});