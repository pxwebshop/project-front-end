'use strict';

var $window = $(window);
var $bodyHtml = $("body,html");
var $html = $("html");
var $body = $("body");
var breakPoint1 = 767;

/* ======================================
body fix
====================================== */
var scrollPosi;

function bodyFix() {
    scrollPosi = $(window).scrollTop();
    $body.css({
        position: "fixed", width: "100%", "z-index": "1", top: -scrollPosi, "overflow-y": 'scroll'
    });
}

function bodyFixReset() {
    $body.css({
        position: "relative", width: "auto", top: "0",
    });
    $bodyHtml.scrollTop(scrollPosi);
}

/* ======================================
open menu
====================================== */
$(function () {
    $('#openMenu').on('click', function () {
        $('.c-header__nav').fadeIn();
        bodyFix();
    });

    $('#closeMenu').on('click', function () {
        $('.c-header__nav').fadeOut();
        bodyFixReset();
    });
});

//===================================================
// format
//===================================================
$(window).on("resize load", function () {
    if ($(window).width() > breakPoint1 + 1) {
        $('body').removeAttr('style');
        $('.c-header__nav').removeAttr('style');
    }
});

//===================================================
// remove scroll horizontal when use width: 100vw
//===================================================
function setVw() {
    let vw = document.documentElement.clientWidth / 100;
    document.documentElement.style.setProperty('--vw', `${vw}px`);
}
setVw();
window.addEventListener('resize', setVw);

$(document).ready(function () {
    //===================================================
    // js-modal
    //===================================================
    var scrollPosi;
    $(".js-modal").click(function (event) {
        scrollPosi = $(window).scrollTop();
        $("body").css({ position: "fixed", "overflow-y": "scroll", width: "100%", "z-index": "1", top: -scrollPosi, });
        var databox = $(this).data("box");
        $("[data-box]").not('.js-modal').hide(0);
        $("[data-box=" + databox + "]").not('.js-modal').show(0);
        $("[data-box=" + databox + "]:not(.js-modal)").closest(".c-modal").addClass("is-active");
        return false;
    });

    $(".c-modal__close").click(function () {
        $("body").removeAttr("style");
        $('html,body').animate({ scrollTop: scrollPosi }, 0);
        $(".c-modal").removeClass("is-active");
    });
});

$(window).on("load", function (e) {
    $('.c-list3__item:not(.is-active)').matchHeight();
})

$(".xxx").click(function () {

});

