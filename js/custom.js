(function($){

    /**
     * Lightbox settings
     */
    lightbox.option({
        'showImageNumberLabel': false,
    })

    /** 
     * Smooth scroll to id
     */
    $(document).ready(function(){
        $('a[href*="#"]').on('click',function (e) {
            var target = this.hash;
            var $target = $(target);
    
            if($target.length){
                e.preventDefault();
                $('html, body').stop().animate({
                     'scrollTop': $target.offset().top - 70
                }, 900, 'swing');
                
                return false;
            }
        });    
    })
    /**
     * if visible function
     */
    function isScrolledIntoView(elem) {
        var docViewTop = $(window).scrollTop();
        var docViewBottom = docViewTop + $(window).height();

        var elemTop = $(elem).offset().top;
        var elemBottom = elemTop + $(elem).height();

        return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
    }
    
    function Utils() {
    
    }
    
    Utils.prototype = {
        constructor: Utils,
        isElementInView: function (element, fullyInView) {
            var pageTop = $(window).scrollTop();
            var pageBottom = pageTop + $(window).height();
            if (element.length) {
              var elementTop = $(element).offset().top;
            }
            var elementBottom = elementTop + $(element).height();
    
            if (fullyInView === true) {
                return ((pageTop < elementTop) && (pageBottom > elementBottom));
            } else {
                return ((elementTop <= pageBottom) && (elementBottom >= pageTop));
            }
        }
    };
    
    var Utils = new Utils();


    /**
     * Header slider
     */
    $(window).on('load', function(){
        setTimeout(function(){
            $('.loader').removeClass('loader--active');
            $('.mainCounter').trigger('count');
        }, 1000);
        setTimeout(function(){
            $('.loader').remove();
        }, 2500);
    });
    $(document).ready(function(){
        $('.mainHeader__slider').on('init', function(event, slick, currentSlide, nextSlide){
            $('.slide.slick-active').removeClass('slick-active');
            $('.slide').eq(0).addClass('reset');
        
            setTimeout(function(){
                $('.slide').eq(0).removeClass('reset');
                $('.slide').eq(0).addClass('slick-active');
            }, 100);
        });

        $('.mainHeader__slider').on('afterChange', function(event, slick, currentSlide, nextSlide){
            $('.slide').not('.slick-active').addClass('reset');
            setTimeout(function(){
                $('.slide').not('.slick-active').removeClass('reset');
            }, 50);
        });

        setTimeout(function(){
            $('.mainHeader__slider').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                draggable: false,
                dots: false,
                autoplay: true,
                pauseOnHover: false,
                pauseOnFocus: false,
                infinite: true,
                fade: true,
                speed: 1000,
            });
        }, 1000);
    });

    /**
     * Number counter
     */
    function count(){
        $('.mainCounter__number').each(function(){
            var isElementInView = Utils.isElementInView($($(this)), false);
            var number = $(this).find('.number');
            var data = number.attr('data-number');

            if(isElementInView && $(this).hasClass('ready')){
                console.log('runned');
                $(this).removeClass('ready');
                $(number).jQuerySimpleCounter({
                    start: 0,
                    end: data,
                    easing: 'swing',
                    duration: 3000,
                });
            }
        });
    }

    $(document).ready(function(){
        $(window).scrollTop(
            $(window).scrollTop() + 1
        );
        $('.mainCounter').on('count', function(){
            $(window).scrollTop(
                $(window).scrollTop() + 1
            );
        });
        $(window).on('scroll', function(){
            if(!$('.loader').hasClass('loader--active')){
                count();
            }
        });
    });

    /**
     * Apartaments area
     */
    $(document).ready(function(){
        $('.area__floor').on('click', function(){
            var type = $(this).attr('data-type');

            if($(window).width() > 991){
                var apartamentsInfo = $('.mainApartaments__heading');
            }else{
                var apartamentsInfo = $('.mainApartaments__info');
            }

            console.log(apartamentsInfo.offset().top);
            $('html, body').animate({
                scrollTop: apartamentsInfo.offset().top - 30
            }, 'swing');

            $('.apInfo__type[data-type="' + type + '"]').find('.content__open').click();
        });
    });

    /**
     * Apartaments info
     */
    $(document).ready(function(){

        /**
         * Destkop
         */
        $('.content__open').on('click', function(){
            var parent = $(this).parents('.apInfo__type');
            parent.addClass('apInfo__type--active');
            parent.find('.apInfo__info').slideDown('slow');
        });
        $('.apInfo__close').on('click', function(){
            var parent = $(this).parents('.apInfo__type');
            parent.find('.apInfo__info').slideUp('slow');

            setTimeout(function(){
                parent.removeClass('apInfo__type--active');
            }, 700);
        });

        /**
         * Mobile
         */
        $('.type').on('click', function(){
            var type = $(this).attr('data-type');
            if(!$(this).hasClass('active')){

                $('.type').removeClass('active');
                $(this).addClass('active');

                $('.apInfo__type').each(function(){
                    if($(this).hasClass('apInfo__type--active')){
                        $(this).removeClass('apInfo__type--active');
                        $(this).find('.apInfo__info').slideUp('slow');
                    }
                });

                $('.apInfo__type[data-type="' + type + '"]').addClass('apInfo__type--active');
                $('.apInfo__type[data-type="' + type + '"]').find('.apInfo__info').slideDown('slow');
            }
        });
    });

    /**
     * Apartaments info slider
     */
    $(document).ready(function(){

        if($(window).width() < 992){
            $('.apInfo__slider').on('init', function(){
                $this = $(this);
                var width = $(this).width();
    
                setTimeout(function(){
                    $('.apInfo__info').each(function(){
                        $(this).hide();
                        
                        var slide = $(this).find('.slide');
                        $(slide).each(function(){
                            $(this).css('width', width + 'px');
                        });
                    });
                }, 300); 
            });

            $(window).on('resize', function(){
                var width = $('.apInfo__nav').width();

                $('.apInfo__info').each(function(){
                    var slide = $(this).find('.slide');
                    $(slide).each(function(){
                        $(this).css('width', width - 30 + 'px');
                    });
                });
            });
        }

        $('.apInfo__slider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            dots: false,
            centerMode: true,
            variableWidth: true,
            responsive: [
                {
                    breakpoint: 991,
                    settings: {
                        variableWidth: true,
                        centerMode: false,
                    }
                }
            ]
        });
    });

    /**
     * Gallery slider
     */
    $(document).ready(function(){
        $('.mainGallery__gallery').on('init', function(event, slick){
            var prev = $('.mainGallery__photo[data-slick-index="' + slick.currentSlide + '"]').prev().attr('data-slick-index');
            var next = $('.mainGallery__photo[data-slick-index="' + slick.currentSlide + '"]').next().attr('data-slick-index');

            $('.mainGallery__photo').removeClass('active');
            $('.mainGallery__photo[data-slick-index="' + prev + '"]').addClass('active');
            $('.mainGallery__photo[data-slick-index="' + next + '"]').addClass('active');
        });
        $('.mainGallery__gallery').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            centerMode: true,
            variableWidth: true,
            arrows: true,
            infinite: false,
            focusOnSelect: true,
            initialSlide: 1,
            swipe: false,
            responsive: [
                {
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 1,
                        arrows: false,
                        swipe: true,
                        adaptiveHeight: true,
                    }
                }
            ]
        });
        $('.mainGallery__gallery').on('beforeChange', function(event, slick, currentSlide, nextSlide){
            var prev = $('.mainGallery__photo[data-slick-index="' + nextSlide + '"]').prev().attr('data-slick-index');
            var next = $('.mainGallery__photo[data-slick-index="' + nextSlide + '"]').next().attr('data-slick-index');

            $('.mainGallery__photo').removeClass('active');
            $('.mainGallery__photo[data-slick-index="' + prev + '"]').addClass('active');
            $('.mainGallery__photo[data-slick-index="' + next + '"]').addClass('active');
        });
    });

    /**
     * Mobile content show
     */
    $(document).ready(function(){
        $('.moreContent').on('click', function(){
            $('.mainInfo__content--reverse').find('.content').slideDown('slow');
            $(this).removeClass('visible');

            setTimeout(function(){
                $('.moreContent').remove();
            }, 300);
        });
    });

    /**
     * Contact form
     */
    $(document).ready(function(){
        /**
         * Checkboxes
         */
        $('input[type="checkbox"]').on('click', function(){
            if($(this).is(':checked')){
                $(this).parent().addClass('checked');
            }
            else if($(this).is(':not(:checked)')){
                $(this).parent().removeClass('checked');
            }
        });
    });


    /**
     * Menu mobile
     */
    $(document).ready(function(){
        $('.btnMobile').on('click', function(){
            $('.menuFloat').removeClass('menuFloat--scrolled');
            $('.menuMobile').addClass('menuMobile--ready');

            setTimeout(function(){
                $('.menuMobile').addClass('menuMobile--active');
            }, 500);
        });
        $('.menuMobile__close').on('click', function(){
            if($(document).scrollTop() > 200){
                $('.menuFloat').addClass('menuFloat--scrolled');
            }

            $('.menuMobile').removeClass('menuMobile--active');
            setTimeout(function(){
                $('.menuMobile').removeClass('menuMobile--ready');
            }, 300);
        });

        var mobilelink = $('.menuMobile').find('.menu-item a');
        $(mobilelink).on('click', function(){
            setTimeout(function(){
                $('.menuMobile').removeClass('menuMobile--active');
            }, 300);
            setTimeout(function(){
                $('.menuMobile').removeClass('menuMobile--ready');
            }, 600);
        });
    });

    /**
     * Float menu
     */
    $(document).ready(function(){
        setTimeout(function(){
            var menuFloat = $('.menuFloat');
            var didScroll;
            var lastScrollTop = 0;
            var delta = 50;
            var navbarHeight = menuFloat.outerHeight();
    
            $(window).scroll(function(event){
                if($(document).scrollTop() > 200){
                    didScroll = true;
                }
            });
    
            setInterval(function() {
                if (didScroll) {
                    hasScrolled();
                    didScroll = false;
                }
            }, 250);
    
            function hasScrolled() {
                var menuFloat = $('.menuFloat');
                var st = $(this).scrollTop();
                
                if(Math.abs(lastScrollTop - st) <= delta)
                    return;
                
                if (st > lastScrollTop && st > navbarHeight){
                    menuFloat.addClass('menuFloat--scrolled');
                } else {
                    if(st + $(window).height() < $(document).height()) {
                        menuFloat.removeClass('menuFloat--scrolled');
                    }
                }
                lastScrollTop = st;
            }
        }, 150);

        // Active menu items on scroll
        $('.section-anchor').each(function(){
            var section = $(this),
                id = section.attr('id'),
                distance = section.offset().top - 100,
                $window = $(window);

            $window.scroll(function() {
                if ( $window.scrollTop() >= distance ) {
                    $('.menuFloat').find('li').removeClass('active');
                    $('.menuFloat').find('a[href="#' + id + '"]').parents('li').addClass('active');
                }else{
                    $('.menuFloat').find('a[href="#' + id + '"]').parents('li').removeClass('active');
                }
            });
        });
    });

}(jQuery));