!(function (a) {
    "use strict";
    function e() {
        if (a(".main-header").length) {
            var e = a(window).scrollTop(),
                t = a(".main-header"),
                n = a(".scroll-top");
            e >= 110 ? (t.addClass("fixed-header"), n.addClass("open")) : (t.removeClass("fixed-header"), n.removeClass("open"));
        }
    }
    if (
        (a(".preloader-close").length &&
            a(".preloader-close").on("click", function () {
                a(".loader-wrap").delay(200).fadeOut(500);
            }),
        e(),
        a(".main-header li.dropdown ul").length && a(".main-header .navigation li.dropdown").append('<div class="dropdown-btn"><span class="fas fa-angle-down"></span></div>'),
        a(".mobile-menu").length)
    ) {
        a(".mobile-menu .menu-box").mCustomScrollbar();
        var t = a(".main-header .menu-area .main-menu").html();
        a(".mobile-menu .menu-box .menu-outer").append(t),
            a(".sticky-header .main-menu").append(t),
            a(".mobile-menu li.dropdown .dropdown-btn").on("click", function () {
                a(this).toggleClass("open"), a(this).prev("ul").slideToggle(500);
            }),
            a(".mobile-menu li.dropdown .dropdown-btn").on("click", function () {
                a(this).prev(".megamenu").slideToggle(900);
            }),
            a(".mobile-nav-toggler").on("click", function () {
                a("body").addClass("mobile-menu-visible");
            }),
            a(".mobile-menu .menu-backdrop,.mobile-menu .close-btn").on("click", function () {
                a("body").removeClass("mobile-menu-visible");
            });
    }
    function n() {
        if (a(".sortable-masonry").length) {
            var e = a(window),
                t = a(".sortable-masonry .items-container"),
                n = a(".filter-btns");
            t.isotope({ filter: "*", masonry: { columnWidth: ".masonry-item.small-column" }, animationOptions: { duration: 500, easing: "linear" } }),
                n.find("li").on("click", function () {
                    var e = a(this).attr("data-filter");
                    try {
                        t.isotope({ filter: e, animationOptions: { duration: 500, easing: "linear", queue: !1 } });
                    } catch (n) {}
                    return !1;
                }),
                e.on("resize", function () {
                    var a = n.find("li.active").attr("data-filter");
                    t.isotope({ filter: a, animationOptions: { duration: 500, easing: "linear", queue: !1 } });
                });
            var s = a(".filter-btns li");
            s.on("click", function () {
                var e = a(this);
                e.hasClass("active") || (s.removeClass("active"), e.addClass("active"));
            });
        }
    }
    a(".scroll-to-target").length &&
        a(".scroll-to-target").on("click", function () {
            var e = a(this).attr("data-target");
            a("html, body").animate({ scrollTop: a(e).offset().top }, 1e3);
        }),
        a(".wow").length && new WOW({ mobile: !1 }).init(),
        a("#contact-form").length && a("#contact-form").validate({ rules: { username: { required: !0 }, email: { required: !0, email: !0 }, phone: { required: !0 }, subject: { required: !0 }, message: { required: !0 } } }),
        a(".count-box").length &&
            a(".count-box").appear(
                function () {
                    var e = a(this),
                        t = e.find(".count-text").attr("data-stop"),
                        n = parseInt(e.find(".count-text").attr("data-speed"), 10);
                    e.hasClass("counted") ||
                        (e.addClass("counted"),
                        a({ countNum: e.find(".count-text").text() }).animate(
                            { countNum: t },
                            {
                                duration: n,
                                easing: "linear",
                                step: function () {
                                    e.find(".count-text").text(Math.floor(this.countNum));
                                },
                                complete: function () {
                                    e.find(".count-text").text(this.countNum);
                                },
                            }
                        ));
                },
                { accY: 0 }
            ),
        a(".lightbox-image").length && a(".lightbox-image").fancybox({ openEffect: "fade", closeEffect: "fade", helpers: { media: {} } }),
        a(".tabs-box").length &&
            a(".tabs-box .tab-buttons .tab-btn").on("click", function (e) {
                e.preventDefault();
                var t = a(a(this).attr("data-tab"));
                if (a(t).is(":visible")) return !1;
                t.parents(".tabs-box").find(".tab-buttons").find(".tab-btn").removeClass("active-btn"),
                    a(this).addClass("active-btn"),
                    t.parents(".tabs-box").find(".tabs-content").find(".tab").fadeOut(0),
                    t.parents(".tabs-box").find(".tabs-content").find(".tab").removeClass("active-tab"),
                    a(t).fadeIn(300),
                    a(t).addClass("active-tab");
            }),
        a(".pricing-tabs").length &&
            a(".pricing-tabs .tab-btns .tab-btn").on("click", function (e) {
                e.preventDefault();
                var t = a(a(this).attr("data-tab"));
                if (a(t).hasClass("actve-tab")) return !1;
                a(".pricing-tabs .tab-btns .tab-btn").removeClass("active-btn"), a(this).addClass("active-btn"), a(".pricing-tabs .pr-content .pr-tab").removeClass("active-tab"), a(t).addClass("active-tab");
            }),
        a(".accordion-box").length &&
            a(".accordion-box").on("click", ".acc-btn", function () {
                var e = a(this).parents(".accordion-box"),
                    t = a(this).parents(".accordion");
                if ((!0 !== a(this).hasClass("active") && a(e).find(".accordion .acc-btn").removeClass("active"), a(this).next(".acc-content").is(":visible"))) return !1;
                a(this).addClass("active"), a(e).children(".accordion").removeClass("active-block"), a(e).find(".accordion").children(".acc-content").slideUp(300), t.addClass("active-block"), a(this).next(".acc-content").slideDown(300);
            }),
        a(".banner-carousel").length &&
            a(".banner-carousel").owlCarousel({
                loop: !0,
                margin: 0,
                nav: !0,
                animateOut: "fadeOut",
                animateIn: "fadeIn",
                active: !0,
                smartSpeed: 1e3,
                autoplay: 6e3,
                navText: ['<span class="fal fa-long-arrow-left"></span>', '<span class="fal fa-long-arrow-right"></span>'],
                responsive: { 0: { items: 1 }, 600: { items: 1 }, 800: { items: 1 }, 1024: { items: 1 } },
            }),
        a(".testimonial_01").length &&
            a(".testimonial_01").owlCarousel({
                loop: !0,
                margin: 30,
                nav: !0,
                smartSpeed: 500,
                autoplay: 1e3,
                navText: ['<span class="far fa-long-arrow-left"></span>', '<span class="far fa-long-arrow-right"></span>'],
                responsive: { 0: { items: 1 }, 480: { items: 1 }, 600: { items: 1 }, 800: { items: 1 }, 1200: { items: 1 } },
            }),
        a(".testimonial_02").length &&
            a(".testimonial_02").owlCarousel({
                loop: !0,
                margin: 30,
                nav: !0,
                smartSpeed: 500,
                autoplay: 600,
                navText: ['<span class="far fa-long-arrow-left"></span>', '<span class="far fa-long-arrow-right"></span>'],
                responsive: { 0: { items: 1 }, 480: { items: 1 }, 600: { items: 1 }, 800: { items: 1 }, 1200: { items: 1 } },
            }),
        a(".testimonial_03").length &&
            a(".testimonial_03").owlCarousel({
                loop: !0,
                margin: 30,
                nav: !0,
                smartSpeed: 500,
                autoplay: 1e3,
                navText: ['<span class="far fa-long-arrow-left"></span>', '<span class="far fa-long-arrow-right"></span>'],
                responsive: { 0: { items: 1 }, 480: { items: 1 }, 600: { items: 1 }, 800: { items: 1 }, 1200: { items: 1 } },
            }),
        a(".testimonial_04").length &&
            a(".testimonial_04").owlCarousel({
                loop: !0,
                margin: 30,
                nav: !0,
                smartSpeed: 500,
                autoplay: 600,
                navText: ['<span class="far fa-long-arrow-left"></span>', '<span class="far fa-long-arrow-right"></span>'],
                responsive: { 0: { items: 1 }, 480: { items: 1 }, 600: { items: 1 }, 800: { items: 1 }, 1200: { items: 1 } },
            }),
        a(".single-item-carousel").length &&
            a(".single-item-carousel").owlCarousel({
                loop: !0,
                margin: 30,
                nav: !0,
                smartSpeed: 500,
                autoplay: 1e3,
                navText: ['<span class="far fa-long-arrow-left"></span>', '<span class="far fa-long-arrow-right"></span>'],
                responsive: { 0: { items: 1 }, 480: { items: 1 }, 600: { items: 1 }, 800: { items: 1 }, 1200: { items: 1 } },
            }),
        a(".two-column-carousel").length &&
            a(".two-column-carousel").owlCarousel({
                loop: !0,
                margin: 30,
                nav: !0,
                smartSpeed: 500,
                autoplay: 1e3,
                navText: ['<span class="far fa-long-arrow-left"></span>', '<span class="far fa-long-arrow-right"></span>'],
                responsive: { 0: { items: 1 }, 480: { items: 1 }, 600: { items: 1 }, 800: { items: 2 }, 1024: { items: 2 } },
            }),
        a(".three-item-carousel").length &&
            a(".three-item-carousel").owlCarousel({
                loop: !0,
                margin: 30,
                nav: !0,
                smartSpeed: 500,
                autoplay: 1e3,
                navText: ['<span class="fas fa-angle-left"></span>', '<span class="fas fa-angle-right"></span>'],
                responsive: { 0: { items: 1 }, 480: { items: 1 }, 600: { items: 2 }, 800: { items: 2 }, 1024: { items: 3 } },
            }),
        a(".four-item-carousel").length &&
            a(".four-item-carousel").owlCarousel({
                loop: !0,
                margin: 30,
                nav: !0,
                smartSpeed: 500,
                autoplay: 1e3,
                navText: ['<span class="fas fa-angle-left"></span>', '<span class="fas fa-angle-right"></span>'],
                responsive: { 0: { items: 1 }, 480: { items: 2 }, 600: { items: 2 }, 800: { items: 3 }, 1024: { items: 4 } },
            }),
        a(".five-item-carousel").length &&
            a(".five-item-carousel").owlCarousel({
                loop: !0,
                margin: 30,
                nav: !0,
                smartSpeed: 500,
                autoplay: 1e3,
                navText: ['<span class="fas fa-angle-left"></span>', '<span class="fas fa-angle-right"></span>'],
                responsive: { 0: { items: 1 }, 480: { items: 2 }, 600: { items: 3 }, 800: { items: 4 }, 1024: { items: 5 } },
            }),
        a(".scroll-nav").length && a(".scroll-nav").onePageNav(),
        n(),
        a(".count-bar").length &&
            a(".count-bar").appear(
                function () {
                    var e = a(this),
                        t = e.data("percent");
                    a(e).css("width", t).addClass("counted");
                },
                { accY: -50 }
            ),
        jQuery(document).on("ready", function () {
            var e;
            jQuery,
                a(".page_direction").length &&
                    a(".direction_switch button").on("click", function () {
                        a("body").toggleClass(function () {
                            return a(this).is(".rtl, .ltr") ? "rtl ltr" : "rtl";
                        });
                    }),
                a("#datepicker").length && a("#datepicker").datepicker(),
                a('input[name="time"]').length && a('input[name="time"]').ptTimeSelect();
        }),
        a(window).on("scroll", function () {
            e();
        }),
        a(window).on("load", function () {
            a(".loader-wrap").length && a(".loader-wrap").delay(1e3).fadeOut(500), n();
        });
})(window.jQuery);
