(function($){

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
        $(window).on('scroll', function(){
            count();
        });
    });

    /**
     * Apartaments area
     */
    $(document).ready(function(){
        $('.area__floor').on('click', function(){
            var type = $(this).attr('data-type');
            var apartamentsInfo = $('.mainApartaments__heading');
            $('html, body').animate({scrollTop: apartamentsInfo.offset().top}, 'slow');
            $('.apInfo__type[data-type="' + type + '"]').find('.content__open').click();
        });
    });

    /**
     * Apartaments info
     */
    $(document).ready(function(){
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
    });

    /**
     * Apartaments info slider
     */
    $(document).ready(function(){
        $('.apInfo__slider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            dots: false,
            centerMode: true,
            variableWidth: true,
        });
    });

}(jQuery));