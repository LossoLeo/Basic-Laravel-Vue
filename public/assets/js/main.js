(function($) {
    "use strict";


    jQuery(document).ready(function($) {




        //------------ Offcanvas menu -------------

        $('.open__menu i').on('click', function() {
            $('.main__menu, .overlay').addClass('active');
        })
        $('.close__menu, .overlay').on('click', function() {
            $('.main__menu, .overlay').removeClass('active');
        })



    }); //---document-ready-----








    // hero__slide__blk
    $('.hero__slide__blk').owlCarousel({
        dots: true,
        loop: true,
        nav: true,
        navText: ['<i class="far fa-angle-left"></i>', '<i class="far fa-angle-right"></i>'],
        autoplay: false,
        smartSpeed: 1000,
        autoplayTimeout: 3500,
        items: 1,
        margin: 10,
        slideToScroll: 1,
        center: true,
        autoplayHoverPause: true,

    });



    // brand__slide__blk
    $('.brand__slide__blk').owlCarousel({
        dots: false,
        loop: true,
        nav: false,
        navText: ['<i class="fas fa-long-arrow-alt-left"></i>', '<i class="fas fa-long-arrow-alt-right"></i>'],
        autoplay: false,
        smartSpeed: 1000,
        autoplayTimeout: 3500,
        items: 4,
        margin: 5,
        slideToScroll: 1,
        center: false,
        autoplayHoverPause: true,

        responsive: {
            0: {
                stagePadding: 0,
            },
            320: {
                items: 2,
                stagePadding: 0,
            },
            450: {
                items: 2,
                stagePadding: 0,
            },
            575: {
                items: 3,
                stagePadding: 0,
            },
            
            768: {
                items: 4,
                stagePadding: 0,
            },
        }

    });



}(jQuery));