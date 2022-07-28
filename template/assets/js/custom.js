/*
| ----------------------------------------------------------------------------------
| TABLE OF CONTENT
| ----------------------------------------------------------------------------------
-SETTING
-Big adaptive title
-Calendar
-Map/Form Switcher
-Preloader
-Scroll Animation
-Animated Entrances
-Chars Start
-Video player
-Magnific Popup
-Isotope filter
-Bxslider
-Slick slider
-Sly slider
-OWL Sliders
-Animated progress bars
*/



$(document).ready(function() {

    "use strict";


/////////////////////////////////////////////////////////////////
// SETTING
/////////////////////////////////////////////////////////////////

/////////////////////////////////////////////////////////////////
// Big adaptive title
/////////////////////////////////////////////////////////////////

    $(".b-upper-title").slabText({
        // Don't slabtext the headers if the viewport is under 380px
        "viewportBreakpoint":380
    });

/////////////////////////////////////////////////////////////////
// Calendar
/////////////////////////////////////////////////////////////////

    pickmeup('.b-calendar', {
        title_format: 'B Y',
        flat : true,
        select_month :false,
        select_year  : false,
        prev: '<i class="fa fa-angle-left" aria-hidden="true"></i>',
        next: '<i class="fa fa-angle-right" aria-hidden="true"></i>'
    });


/////////////////////////////////////////////////////////////////
// Map/Form Switcher
/////////////////////////////////////////////////////////////////

    $(".map-form-switcher .switcher-toggle").on('click', function(e){
        e.preventDefault();
        $('.b-map-form-holder .b-contact-form').fadeToggle("300", "linear");
        $('.b-map-form-holder').toggleClass("map-active");
    });

/////////////////////////////////////////////////////////////////
// Preloader
/////////////////////////////////////////////////////////////////

    var $preloader = $('#page-preloader'),
    $spinner   = $preloader.find('.spinner-loader');
    
    $spinner.fadeOut();
    $preloader.delay(350).fadeOut('slow');


/////////////////////////////////////
//  Scroll Animation
/////////////////////////////////////


if ($('.scrollreveal').length > 0) {
    window.sr = ScrollReveal({
        reset:true,
        duration: 1000,
        delay: 200
    });

    sr.reveal('.scrollreveal');
  }


/////////////////////////////////////
//  Animated Entrances
/////////////////////////////////////

    var AnimatedEntrances = true; // Set false for turn off animation

    if (AnimatedEntrances) {
        var wow = new WOW(
            {
                boxClass:     'wow',      // animated element css class (default is wow)
                animateClass: 'animated', // animation css class (default is animated)
                offset:       0,          // distance to the element when triggering the animation (default is 0)
                mobile:       true,       // trigger animations on mobile devices (default is true)
                live:         true,       // act on asynchronously loaded content (default is true)
                callback:     function(box) {
                    // the callback is fired every time an animation is started
                    // the argument that is passed in is the DOM node being animated
                },
                scrollContainer: null // optional scroll container selector, otherwise use window
            }
        );
        wow.init();
    }

/////////////////////////////////////
//  Chars Start
/////////////////////////////////////


if ($('body').length) {
    $(window).on('scroll', function() {
        var winH = $(window).scrollTop();

        $('.b-progress-list').waypoint(function() {
            $('.js-chart').each(function() {
                CharsStart();
            });
        }, {
            offset: '80%'
        });
    });
}


function CharsStart() {

    $('.js-chart').easyPieChart({
        barColor: false,
        trackColor: false,
        scaleColor: false,
        scaleLength: false,
        lineCap: false,
        lineWidth: false,
        size: false,
        animate: 5000,

        onStep: function(from, to, percent) {
            $(this.el).find('.js-percent').text(Math.round(percent));
        }
    });
}
    



/////////////////////////////////////
//  Video player
/////////////////////////////////////


if ($('.player').length > 0) {
  $(".player").flowplayer();
}


/////////////////////////////////////
//  Magnific Popup
/////////////////////////////////////


    // gallery images popup
    if ($('.js-zoom-gallery').length > 0) {
      $('.js-zoom-gallery').each(function() { // the containers for all your galleries
          $(this).magnificPopup({
              delegate: '.js-zoom-gallery__item', // the selector for gallery item
              type: 'image',
              gallery: {
                enabled:true
              }
          });
      });
    }

    // video popup
    if ($('.b-video').length > 0) {
        $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({

            type: 'iframe',
            mainClass: 'mfp-fade',
            removalDelay: 160,
            preloader: false,

            fixedContentPos: false
        });
    }


////////////////////////////////////////////
// ISOTOPE FILTER
///////////////////////////////////////////


  if ($('.b-isotope').length > 0) {

    var $container = $('.grid');

    // init Isotope
    $container.isotope({
      itemSelector: '.grid-item',
      percentPosition: true,
      masonry: {
        columnWidth: '.grid-sizer'
      }
    });

    // layout Isotope after each image loads
    $container.imagesLoaded().progress( function() {
        $container.isotope('layout');
    });

    // filter items when filter link is clicked
    $('.b-isotope__filter a').on( 'click', function() {
        var selector = $(this).attr('data-filter');
        $container.isotope({
            filter: selector
        });
        return false;
    });

    // change active filter state
    $('.b-isotope__filter a').on( 'click', function() {
        $('.b-isotope__filter').find('.current').removeClass('current');
        $( this ).addClass('current');
    });
  }

/////////////////////////////////////////////////////////////////
// Bxslider
/////////////////////////////////////////////////////////////////

    if ($('.bxslider').length > 0) {

        $('.bxslider').bxSlider({
            mode: 'horizontal',
            captions: true,
            pager: false,
            nextSelector: '#single-slideshow-next',
            prevSelector: '#single-slideshow-prev',
            nextText: '<i class="fa fa-angle-right" aria-hidden="true"></i>',
            prevText: '<i class="fa fa-angle-left" aria-hidden="true"></i>'
        });
    }

    //with custom pager
    if ($('.bxslider-pager').length > 0) {

        $('.bxslider-pager').bxSlider({
            pagerCustom: '.bx-pager',
            minSlides: 1,
            maxSlides: 1,
            nextSelector: '#pager-slideshow-next',
            prevSelector: '#pager-slideshow-prev',
            nextText: '<i class="fa fa-angle-right" aria-hidden="true"></i>',
            prevText: '<i class="fa fa-angle-left" aria-hidden="true"></i>'
        });
    }


/////////////////////////////////////////////////////////////////
// Slick slider
/////////////////////////////////////////////////////////////////

    // Home page slider
    if ($('.b-home-slider').length > 0) {
        $('.b-home-slider').slick({
            prevArrow: $('#home-slider-prev'),
            nextArrow: $('#home-slider-next')
            // other settings can be set using the data-slick attribute on the slick element in the HTML markup
        });
    }

    if ($('.b-latest-carousel').length > 0) {

        $('.b-latest-carousel').slick({
            variableWidth: true,
            centerMode: true,
            centerPadding: '80px',
            slidesToShow: 1,
            prevArrow: $('#slick-slideshow-prev'),
            nextArrow: $('#slick-slideshow-next'),
            responsive: [
                {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 1,
                        centerPadding: '20px',
                        arrows: true
                    }
                },
                {
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 1,
                        centerPadding: '10px',
                        arrows: true
                    }
                },
                {
                    breakpoint: 639,
                    settings: {
                        slidesToShow: 1,
                        centerPadding: '0',
                        arrows: true,
                        variableWidth: false,
                        centerMode: false
                    }
                }
            ]
        });
    }

    if ($('.b-team-carousel').length > 0) {

        $('.b-team-carousel').slick({
            infinite: true,
            slidesToShow: 1,
            centerMode: true,
            variableWidth: true,
            prevArrow: $('#team-slideshow-prev'),
            nextArrow: $('#team-slideshow-next')
        });
    }

    if ($('.b-recent-carousel').length > 0) {

        $('.b-recent-carousel').slick({
            infinite: true,
            slidesToShow: 1,
            centerMode: true,
            centerPadding: '0px',
            variableWidth: true,
            prevArrow: $('#recent-slideshow-prev'),
            nextArrow: $('#recent-slideshow-next')
        });
    }



////////////////////////////////////////////
// Sly slider
///////////////////////////////////////////


    if ($('.b-sly-slider').length > 0) {

        // -------------------------------------------------------------
        //   Centered Navigation
        // -------------------------------------------------------------
        (function () {
            var $frame = $('#frame');
            var $wrap  = $frame.parent();

            // Call Sly on frame
            $frame.sly({
                horizontal: 1,
                itemNav: 'centered',
                smart: 1,
                activateOn: 'click',
                mouseDragging: 1,
                touchDragging: 1,
                releaseSwing: 1,
                startAt: 4,
                scrollBar: $wrap.find('.scrollbar'),
                scrollBy: 1,
                speed: 300,
                elasticBounds: 1,
                easing: 'easeOutExpo',
                dragHandle: 1,
                dynamicHandle: 0,
                clickBar: 1
            });

            // Sly to be reloaded when the user resizes the browser
            $(window).resize(function(e) {
                $frame.sly('reload');
            });

        }());
    }


/////////////////////////////////////////////////////////////////
// OWL Sliders
/////////////////////////////////////////////////////////////////

    var Core = {

        initialized: false,

        initialize: function() {

            if (this.initialized) return;
            this.initialized = true;

            this.build();

        },

        build: function() {

            // Owl Carousel

            this.initOwlCarousel();
        },

        initOwlCarousel: function(options) {
            var owlCarouselBox = $('.enable-owl-carousel');
            if(owlCarouselBox && owlCarouselBox.length){
                owlCarouselBox.each(function(i) {
                    var $owl = $(this);

                    var loopData = $owl.data('loop');
                    var centerData = $owl.data('center');
                    var autoWidthData = $owl.data('auto-width');
                    var dotsData = $owl.data('dots');
                    var navData = $owl.data('nav');
                    var marginData = $owl.data('margin');
                    var responsiveClassData = $owl.data('responsive-class');
                    var responsiveData = $owl.data('responsive');
                    var sliderNext = $owl.data('slider-next');
                    var sliderPrev = $owl.data('slider-prev');

                    $owl.owlCarousel({
                        loop: loopData,
                        center: centerData,
                        autoWidth: autoWidthData,
                        dots: dotsData,
                        nav: navData,
                        margin: marginData,
                        responsiveClass: responsiveClassData,
                        responsive: responsiveData
                    });
                    $(sliderNext).click(function(){
                        $owl.trigger('next.owl.carousel');
                    });
                    $(sliderPrev).click(function(){
                        $owl.trigger('prev.owl.carousel');
                    });
                });
            }
        }

    };

    Core.initialize();

});

/////////////////////////////////////////////////////////////////
// Animated progress bars
/////////////////////////////////////////////////////////////////

    if ($('#skills-progress').length > 0) {

        // detect block with progress bars
            var $section = $('#skills-progress');

            // animate progress
            function loadDaBars() {
                $(".bar > span").each(function() {
                    $(this)
                        .data("origWidth", $(this).width())
                        .width(0)
                        .animate({
                            width: $(this).data("origWidth")
                        }, 2000);
                });
            }

            $(document).bind('scroll', function(ev) {
                var scrollOffset = $(document).scrollTop();
                var containerOffset = $section.offset().top - window.innerHeight;
                if (scrollOffset > containerOffset) {
                    loadDaBars();
                    // unbind event not to load bars again
                    $(document).unbind('scroll');
                }
            });
    }