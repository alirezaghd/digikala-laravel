/*

=========================================================
* Crikon
=========================================================

*/

"use strict";
const d = document;
d.addEventListener("DOMContentLoaded", function(event) {

    // Plceholder
    var preloader = d.querySelector('.loading-preloader');
    if (preloader) {
        setTimeout(function() {
            preloader.classList.add('d-none');
        }, 1000);
    }

    // Headroom
    if (d.querySelector('.headroom')) {
        var headroom = new Headroom(document.querySelector(".main-header"), {
            offset: 50,
            tolerance: {
                up: 0,
                down: 0
            },
        });
        headroom.init();
    }

    // Tooltips
    var ToolTipTrigger = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = ToolTipTrigger.map(function(tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    })

    // Popovers
    var PopoverTrigger = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
    var popoverList = PopoverTrigger.map(function(popoverTriggerEl) {
        return new bootstrap.Popover(popoverTriggerEl)
    })


    // Swiper
    var sliderSelector = '.swiper-container',
        defaultOptions = {
            breakpointsInverse: true,
            observer: true
        };

    var nSlider = document.querySelectorAll(sliderSelector);

    [].forEach.call(nSlider, function(slider, index, arr) {
        var data = slider.getAttribute('data-swiper-options') || {};

        if (data) {
            var dataOptions = JSON.parse(data);
        }

        slider.options = Object.assign({}, defaultOptions, dataOptions);

        var swiper = new Swiper(slider, slider.options);

        console.log(slider.options.autoplay)

        /* stop on hover */
        if (typeof slider.options.autoplay !== 'undefined' && slider.options.autoplay !== false) {
            slider.addEventListener('mouseenter', function(e) {
                swiper.autoplay.stop();
                console.log('stop')
            });

            slider.addEventListener('mouseleave', function(e) {
                swiper.autoplay.start();
                console.log('start')
            });
        }
    });


    // Product Details Thumb Slider
    var swiper_gallery = new Swiper(".swiper_thumb_gallery", {
        spaceBetween: 10,
        slidesPerView: 5,
        freeMode: true,
        watchSlidesProgress: true,
        navigation: {
            nextEl: ".swiper-next-pd-details_thumb",
            prevEl: ".swiper-prev-pd-details_thumb",
        },
    });
    var swiper2 = new Swiper(".swiper_gallery", {
        spaceBetween: 10,
        effect: "fade",
        thumbs: {
            swiper: swiper_gallery,
        },
    });

    // Product Details Thumb Slider Option 02

    var swiper_gallery_v = new Swiper(".swiper_thumb_gallery_v", {
        spaceBetween: 10,
        slidesPerView: 'auto',
        direction: "vertical",
        autoHeight: true,
        freeMode: true,
        watchSlidesProgress: true,
        navigation: {
            nextEl: ".swiper-next-pd-details_thumb",
            prevEl: ".swiper-prev-pd-details_thumb",
        },
    });
    var swiper2 = new Swiper(".swiper_gallery_v", {
        spaceBetween: 10,
        effect: "fade",
        thumbs: {
            swiper: swiper_gallery_v,
        },
    });


});
