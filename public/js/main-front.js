AOS.init({ duration: 800, easing: "slide" }),
    (function(a) {
        "use strict";
        a(window).stellar({
            responsive: !0,
            parallaxBackgrounds: !0,
            parallaxElements: !0,
            horizontalScrolling: !1,
            hideDistantElements: !1,
            scrollProperty: "scroll",
            horizontalOffset: 0,
            verticalOffset: 0
        }),
            a.Scrollax();
        a(".js-fullheight").css("height", a(window).height()),
            a(window).resize(function() {
                a(".js-fullheight").css("height", a(window).height());
            });
        setTimeout(function() {
            a("#ftco-loader").length > 0 &&
                a("#ftco-loader").removeClass("show");
        }, 1),
            a.Scrollax();
        a(".carousel-testimony").owlCarousel({
            autoplay: !0,
            loop: !0,
            items: 1,
            margin: 0,
            animateOut: "fadeOut",
            animateIn: "fadeIn",
            stagePadding: 0,
            nav: !1,
            navText: [
                '<span class="ion-ios-arrow-back">',
                '<span class="ion-ios-arrow-forward">'
            ],
            responsive: {
                0: { items: 1 },
                600: { items: 1 },
                1000: { items: 1 }
            }
        }),
            a("nav .dropdown").hover(
                function() {
                    var e = a(this);
                    e.addClass("show"),
                        e.find("> a").attr("aria-expanded", !0),
                        e.find(".dropdown-menu").addClass("show");
                },
                function() {
                    var e = a(this);
                    e.removeClass("show"),
                        e.find("> a").attr("aria-expanded", !1),
                        e.find(".dropdown-menu").removeClass("show");
                }
            ),
            a("#dropdown04").on("show.bs.dropdown", function() {
                console.log("show");
            });
        a(window).scroll(function() {
            var e = a(this).scrollTop(),
                o = a(".ftco_navbar"),
                s = a(".js-scroll-wrap");
            e > 150 && (o.hasClass("scrolled") || o.addClass("scrolled")),
                e < 150 &&
                    o.hasClass("scrolled") &&
                    o.removeClass("scrolled sleep"),
                e > 350 &&
                    (o.hasClass("awake") || o.addClass("awake"),
                    s.length > 0 && s.addClass("sleep")),
                e < 350 &&
                    (o.hasClass("awake") &&
                        (o.removeClass("awake"), o.addClass("sleep")),
                    s.length > 0 && s.removeClass("sleep"));
        });
        a("#section-counter").waypoint(
            function(e) {
                if (
                    "down" === e &&
                    !a(this.element).hasClass("ftco-animated")
                ) {
                    var o = a.animateNumber.numberStepFactories.separator(",");
                    a(".number").each(function() {
                        var e = a(this),
                            s = e.data("number");
                        console.log(s),
                            e.animateNumber({ number: s, numberStep: o }, 7e3);
                    });
                }
            },
            { offset: "95%" }
        );
        a(".ftco-animate").waypoint(
            function(e) {
                "down" !== e ||
                    a(this.element).hasClass("ftco-animated") ||
                    (a(this.element).addClass("item-animate"),
                    setTimeout(function() {
                        a("body .ftco-animate.item-animate").each(function(e) {
                            var o = a(this);
                            setTimeout(
                                function() {
                                    var a = o.data("animate-effect");
                                    "fadeIn" === a
                                        ? o.addClass("fadeIn ftco-animated")
                                        : "fadeInLeft" === a
                                        ? o.addClass("fadeInLeft ftco-animated")
                                        : "fadeInRight" === a
                                        ? o.addClass(
                                              "fadeInRight ftco-animated"
                                          )
                                        : o.addClass("fadeInUp ftco-animated"),
                                        o.removeClass("item-animate");
                                },
                                50 * e,
                                "easeInOutExpo"
                            );
                        });
                    }, 100));
            },
            { offset: "95%" }
        );
        a(".smoothscroll[href^='#'], #ftco-nav ul li a[href^='#']").on(
            "click",
            function(e) {
                e.preventDefault();
                var o = this.hash,
                    s = a(".navbar-toggler");
                a("html, body").animate(
                    { scrollTop: a(o).offset().top },
                    700,
                    "easeInOutExpo",
                    function() {
                        window.location.hash = o;
                    }
                ),
                    s.is(":visible") && s.click();
            }
        ),
            a("body").on("activate.bs.scrollspy", function() {
                console.log("nice");
            }),
            a(".popup-youtube").magnificPopup({
                disableOn: 700,
                type: "iframe",
                mainClass: "mfp-fade",
                removalDelay: 160,
                preloader: !1,
                fixedContentPos: !1
            }),
            a(".popup-with-zoom-anim").magnificPopup({
                type: "inline",

                fixedContentPos: false,
                fixedBgPos: true,

                overflowY: "auto",

                closeBtnInside: true,
                preloader: false,

                midClick: true,
                removalDelay: 300,
                mainClass: "my-mfp-zoom-in"
            });
    })(jQuery);
