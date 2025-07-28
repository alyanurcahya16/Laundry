(function($) {
    'use strict';

    // Header Search
    if ($('.search-box-outer').length) {
        $('.search-box-outer').on('click', function() {
            $('body').addClass('search-active');
        });
        $('.close-search').on('click', function() {
            $('body').removeClass('search-active');
        });
    }

    // Mobile Menu
    if ($.fn.meanmenu) {
        $('.mobile-menu nav').meanmenu({
            meanScreenWidth: "991",
            meanMenuContainer: ".mobile-menu",
            meanMenuOpen: "<span></span> <span></span> <span></span>",
            onePage: false,
        });
    }

    // Sticky Header
    var wind = $(window);
    var sticky = $('#sticky-header');
    wind.on('scroll', function() {
        var scroll = wind.scrollTop();
        if (scroll < 100) {
            sticky.removeClass('sticky');
        } else {
            sticky.addClass('sticky');
        }
    });

    // Animate on scroll
    if (typeof WOW === "function") {
        new WOW().init();
    }

    // Loader
    $(function() {
        $('body').addClass('loaded');
    });

    // Slider
    if ($.fn.owlCarousel) {
        $('.slider_list').owlCarousel({
            loop: true,
            autoplay: true,
            smartSpeed: 1500,
            autoplayTimeout: 2800,
            dots: false,
            nav: true,
            navText: ["<i class='bi bi-chevron-left'></i>", "<i class='bi bi-chevron-right'></i>"],
            responsive: {
                0: { items: 1 },
                768: { items: 1 },
                992: { items: 1 },
                1000: { items: 1 },
                1920: { items: 1 }
            }
        });

        // Services
        $('.service_list').owlCarousel({
            loop: true,
            autoplay: true,
            smartSpeed: 1500,
            autoplayTimeout: 2800,
            dots: true,
            nav: false,
            margin: 30,
            responsive: {
                0: { items: 1 },
                768: { items: 2 },
                992: { items: 2 },
                1000: { items: 3 },
                1920: { items: 3 }
            }
        });

        // Portfolio
        $('.portfolio_list').owlCarousel({
            loop: true,
            autoplay: true,
            smartSpeed: 1500,
            autoplayTimeout: 2800,
            dots: true,
            nav: false,
            margin: 30,
            center: true,
            responsive: {
                0: { items: 1 },
                768: { items: 2 },
                992: { items: 2 },
                1000: { items: 3 },
                1920: { items: 3 }
            }
        });

        // Testimonial
        $('.testimonial_list').owlCarousel({
            loop: true,
            autoplay: true,
            smartSpeed: 1500,
            autoplayTimeout: 2800,
            dots: true,
            nav: false,
            margin: 30,
            responsive: {
                0: { items: 1 },
                768: { items: 1 },
                992: { items: 2 },
                1000: { items: 2 },
                1920: { items: 2 }
            }
        });

        // Testimonial 2
        $('.testimonial_list2').owlCarousel({
            loop: true,
            autoplay: true,
            smartSpeed: 1500,
            autoplayTimeout: 2800,
            dots: false,
            nav: true,
            margin: 30,
            navText: ["<i class='bi bi-arrow-left'></i>", "<i class='bi bi-arrow-right'></i>"],
            responsive: {
                0: { items: 1 },
                768: { items: 2 },
                992: { items: 2 },
                1000: { items: 3 },
                1920: { items: 3 }
            }
        });

        // Brand
        $('.brand_list').owlCarousel({
            loop: true,
            autoplay: true,
            smartSpeed: 1500,
            autoplayTimeout: 2800,
            dots: false,
            nav: false,
            responsive: {
                320: { items: 1 },
                480: { items: 2 },
                600: { items: 2 },
                768: { items: 3 },
                992: { items: 3 },
                1000: { items: 4 },
                1920: { items: 5 }
            }
        });
    }

    // Cursor Animation
    var curser = document.querySelector(".curser");
    var curser2 = document.querySelector(".curser2");

    document.addEventListener("mousemove", function(e) {
        if (curser && curser2) {
            curser.style.left = e.pageX + "px";
            curser.style.top = e.pageY + "px";
            curser2.style.left = e.pageX + "px";
            curser2.style.top = e.pageY + "px";
        }
    });

    // Hide darkToggle if exists
    document.addEventListener('DOMContentLoaded', function () {
        const toggle = document.getElementById('darkToggle');
        if (toggle) {
            toggle.style.display = 'none';
        }
    });

    // Counter
    if ($.fn.counterUp) {
        $('.counter').counterUp({
            delay: 10,
            time: 1000
        });
    }

    // Cart +/-
    $('.ctnbutton').on('click', function () {
        var $button = $(this);
        var oldValue = $button.parent().find('input').val();
        var newVal = oldValue > 1 ? parseFloat(oldValue) : 1;
        if ($button.hasClass('inc')) {
            newVal = parseFloat(oldValue) + 1;
        } else if (oldValue > 1) {
            newVal = parseFloat(oldValue) - 1;
        }
        $button.parent().find('input').val(newVal);
    });

    // Venobox
    if ($.fn.venobox) {
        $('.venobox').venobox({
            numeratio: true,
            infinigall: true
        });
    }

    // Scroll Up
    if ($.fn.scrollUp) {
        $.scrollUp({
            scrollText: '<i class="fa fa-angle-up"></i>',
            easingType: 'linear',
            scrollSpeed: 900,
            animation: 'fade'
        });
    }

    // Accordion
    $(".accordion > li:eq(0) a").addClass("active").next().slideDown();
    $(".accordion a").click(function (j) {
        var dropDown = $(this).closest("li").find("p");
        $(this).closest(".accordion").find("p").not(dropDown).slideUp();
        if ($(this).hasClass("active")) {
            $(this).removeClass("active");
        } else {
            $(this).closest(".accordion").find("a.active").removeClass("active");
            $(this).addClass("active");
        }
        dropDown.stop(false, true).slideToggle();
        j.preventDefault();
    });

    // Barfiller
    if ($.fn.barfiller) {
        $('#bar1').barfiller({ duration: 7000 });
        $('#bar2').barfiller({ duration: 7000 });
        $('#bar3').barfiller({ duration: 7000 });
    }

    // Scroll Top Button
    $(window).on('scroll', function () {
        var scrolled = $(window).scrollTop();
        if (scrolled > 300) $('.go-top').addClass('active');
        else $('.go-top').removeClass('active');
    });

    $('.go-top').on('click', function () {
        $("html, body").animate({ scrollTop: "0" }, 1200);
    });

    // Tabs
    $('.tab ul.tabs').addClass('active').find('> li:eq(0)').addClass('current');
    $('.tab ul.tabs li a').click(function (g) {
        var tab = $(this).closest('.tab'),
            index = $(this).closest('li').index();
        tab.find('ul.tabs > li').removeClass('current');
        $(this).closest('li').addClass('current');
        tab.find('.tab_content').find('div.tabs_item').not('div.tabs_item:eq(' + index + ')').slideUp();
        tab.find('.tab_content').find('div.tabs_item:eq(' + index + ')').slideDown();
        g.preventDefault();
    });

})(jQuery);
