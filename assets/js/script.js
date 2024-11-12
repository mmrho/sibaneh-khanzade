// JavaScript Document
jQuery(function ($) {
    "use strict";
    const body = $('body');
    $(body).on('click', '#site-footer ul li', function () {
        $('#site-footer ul li').removeClass('active');
        $(this).addClass('active');
    });
    const topSlider = $('.top-slider');
    let attr = {
        stagePadding: 20,
        loop: true,
        margin: 10,
        nav: false,
        items: 1,
        rtl: true,
        autoHeight: false
    };
    if (topSlider.hasClass('profile-slider')) {
        attr.dots = true;
    }

    topSlider.owlCarousel(attr);

    $('.large-thumb-slider').owlCarousel({
        stagePadding: 10,
        loop: false,
        margin: 10,
        nav: false,
        items: 2,
        autoWidth: false,
        rtl: false
    });

    $('.banner-box').owlCarousel({
        stagePadding: 100,
        loop: true,
        margin: 10,
        nav: false,
        items: 1,
        autoWidth: false,
        activeClass: true,
        rtl: false,
    });

    $('.tutorial-carousel').owlCarousel({
        loop: true,
        margin: 10,
        items: 1,
        dots: true,
        nav: false,
        rtl: true
    });

    $(body).on('click', '.search-box i', function () {
        const _this = $(this);
        if (_this.hasClass('icon-search')) {
            _this.removeClass('icon-search');
            _this.addClass('icon-cancel');
            $('.search-panel').stop(true, true).fadeIn();
        } else {
            _this.removeClass('icon-cancel');
            _this.addClass('icon-search');
            $('.search-panel').stop(true, true).fadeOut();
        }
    });
});

