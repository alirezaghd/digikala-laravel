/**
 * @author pxdraft
 * @version 1.0
 *
 */
(function($) {
    "use strict";
    var CRE = {};
    $.fn.exists = function() {
        return this.length > 0;
    };

    /* ---------------------------------------------- /*
     * Pre load
    /* ---------------------------------------------- */
    CRE.PreLoad = function() {
        document.getElementById("loading").style.display = "none";
    }

    /*--------------------
      * Menu toogle header
    ----------------------*/
    CRE.MenuToggleClass = function() {
        $('.navbar-toggler').on('click', function() {
            var toggle = $('.navbar-toggler').is(':visible');
            if (toggle) {
                $('header').toggleClass('header-toggle');
            }
        })
    }

    /* ---------------------------------------------- /*
     * Header Fixed
    /* ---------------------------------------------- */
    CRE.HeaderFixd = function() {
        var HscrollTop = $(window).scrollTop();
        var HHeight = $('.header-height').outerHeight();
        if (HscrollTop >= 100) {
            $(".header-transparent .navbar-dark").addClass("navbar-light");
            $(".header-transparent .navbar-dark").addClass("navbar-dark-top");
            $(".header-transparent .navbar-dark-top").removeClass("navbar-dark");
            $(".header-main").addClass("fixed-header");
            $('.sticky-lg-top-header').css("top", HHeight);
        } else {
            $(".header-transparent .navbar-dark-top").removeClass("navbar-light");
            $(".header-transparent .navbar-dark-top").addClass("navbar-dark");
            $(".header-transparent .navbar-dark").removeClass("navbar-dark-top");
            $(".header-main").removeClass("fixed-header");
        }
    }

    CRE.HeaderFixdTop = function() {
        var HscrollTop = $(window).scrollTop();
        var HHeightTop = $('.header-top').outerHeight()
        if (HscrollTop >= 100) {
            $('.header-main').css("top", -HHeightTop);
        } else {
            $('.header-main').css("top", 0);
        }
    }


    /* ---------------------------------------------- /*
     * Header height
    /* ---------------------------------------------- */
    CRE.HeaderHeight = function() {
        var HHeight = $('.header-height').outerHeight()
        $('.header-height-bar').css("min-height", HHeight);

    }

    /* ---------------------------------------------- /*
     * Mega Menu
    /* ---------------------------------------------- */

    CRE.MegaMenu = function() {
        var mDropdown = $(".px-dropdown-toggle")
        mDropdown.on("click", function() {
            $(this).parent().toggleClass("open-menu-parent");
            $(this).next('.dropdown-menu').toggleClass("show");
            $(this).toggleClass("open");
        });
    }


    /* ---------------------------------------------- /*
     * lightbox gallery
    /* ---------------------------------------------- */
    CRE.Gallery = function() {
        var GalleryPopup = $('.lightbox-gallery');
        if (GalleryPopup.length > 0) {
            $('.lightbox-gallery').magnificPopup({
                delegate: '.gallery-link',
                type: 'image',
                tLoading: 'Loading image #%curr%...',
                mainClass: 'mfp-fade',
                fixedContentPos: true,
                closeBtnInside: false,
                gallery: {
                    enabled: true,
                    navigateByImgClick: true,
                    preload: [0, 1] // Will preload 0 - before current, and 1 after CRE current image
                }
            });
        }
        var VideoPopup = $('.video-btn');
        if (VideoPopup.length > 0) {
            $('.video-btn').magnificPopup({
                disableOn: 700,
                type: 'iframe',
                mainClass: 'mfp-fade',
                removalDelay: 160,
                preloader: false,
                fixedContentPos: false
            });
        }
    }

    /*--------------------
    * Masonry
    ----------------------*/
    CRE.masonry = function() {
        var portfolioWork = $('.portfolio-content');
        if (portfolioWork.length > 0) {
            $(portfolioWork).isotope({
                resizable: false,
                itemSelector: '.grid-item',
                layoutMode: 'masonry',
                filter: '*'
            });
            //Filtering items on portfolio.html
            var portfolioFilter = $('.filter li');
            // filter items on button click
            $(portfolioFilter).on('click', function() {
                var filterValue = $(this).attr('data-filter');
                portfolioWork.isotope({
                    filter: filterValue
                });
            });
            //Add/remove class on filter list
            $(portfolioFilter).on('click', function() {
                $(this).addClass('active').siblings().removeClass('active');
            });
        }
    }

    /*--------------------
        * Progress Bar
    ----------------------*/
    CRE.ProgressBar = function() {
        $(".skill-bar .skill-bar-in").each(function() {
            var bottom_object = $(this).offset().top + $(this).outerHeight();
            var bottom_window = $(window).scrollTop() + $(window).height();
            var progressWidth = $(this).attr('aria-valuenow') + '%';
            if (bottom_window > bottom_object) {
                $(this).css({
                    width: progressWidth
                });
            }
        });
    }

    /*--------------------
        * Countdown
    ----------------------*/
    CRE.CountTimer = function() {
        var $count_timer = $('.count-down');
        var regionalVar = { days: 'Days', day: 'Day', years: 'Years', year: 'Year', hours: 'Hours', hour: 'Hour', minutes: 'Minutes', minute: 'Minute', seconds: 'Seconds', second: 'Second' };
        if ($count_timer.length > 0) {
            $('.count-down').countdown({ regional: regionalVar });
        }
    }

    /*--------------------
        * Cart Qty
    ----------------------*/
    CRE.CartQty = function() {
        $(".qty_btn").on("click", function() {
            var $button = $(this);
            var oldQty = $button.parent().find(".cart-qty-input").val();
            if ($button.text() === "+") {
                var newQty = parseFloat(oldQty) + 1;
            } else {
                // Don't allow decrementing below zero
                if (oldQty > 0) {
                    var newQty = parseFloat(oldQty) - 1;
                } else {
                    newQty = 1;
                }
            }
            $button.parent().find(".cart-qty-input").val(newQty);
        });
    }

    /*--------------------
        * Parallax
    ----------------------*/
    CRE.parallax = function() {
        var Parallax = $('.parallax');
        if (Parallax.length > 0) {
            jarallax(document.querySelectorAll('.parallax'));
            /*jarallax(document.querySelectorAll('.parallax-img'), {
                keepImg: true,
            });*/

            jarallax(document.querySelectorAll('.parallax'), {
                disableParallax: function() {
                    return /iPad|iPhone|iPod|Android/.test(navigator.userAgent);
                },
                disableVideo: function() {
                    return /iPad|iPhone|iPod|Android/.test(navigator.userAgent);
                }
            });
        }
    }


    // Window on Load
    $(window).on("load", function() {
        CRE.masonry(),
            CRE.PreLoad();
    });
    // Document on Ready
    $(document).ready(function() {
        CRE.HeaderFixd(),
            CRE.MenuToggleClass(),
            CRE.Gallery(),
            CRE.HeaderHeight(),
            CRE.HeaderFixdTop(),
            CRE.ProgressBar(),
            CRE.MegaMenu(),
            CRE.CountTimer(),
            CRE.parallax(),
            CRE.CartQty();
    });

    // Document on Scrool
    $(window).scroll(function() {
        CRE.HeaderFixdTop(),
            CRE.HeaderFixd();
    });

    // Window on Resize
    $(window).resize(function() {
        CRE.HeaderFixdTop(),
            CRE.HeaderHeight();
    });

})(jQuery);
