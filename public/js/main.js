(function () {
    var carousels = function() {
        jQuery(".owl-carousel2arousel1").owlCarousel({
            loop: true,
            center: true,
            margin: 0,
            responsiveClass: true,
            nav: false,
            responsive:{
                0:{
                  items: 1,
                  nav: false
                },
                600:{
                    items: 1,
                    nav: false
                },
                1000:{
                    items: 1,
                    nav: true,
                    loop: false
                }
            }
        });
        
        jQuery(".owl-carousel2").owlCarousel({
            loop: true,
            center: true,
            margin: 30,
            responsiveClass: true,
            nav: true,
            responsive:{
                0:{
                    items: 1,
                    nav: true
                },
                600:{
                    items: 2,
                    nav: true,
                    margin: 10,
                    center: false,
                },
                1000:{
                    items: 3,
                    nav: true,
                    loop: true
                }
            }
        });
    }

    var isotope = function () {
        var $container = $('.portfolioContainer');
        
        $container.isotope({
            filter: '*',
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false
            }
        });

        $('.portfolioFilter a').click(function () {
            $('.portfolioFilter .active').removeClass('active');
            $(this).addClass('active');

            var selector = $(this).attr('data-filter');
            $container.isotope({
                filter: selector,
                animationOptions: {
                    duration: 750,
                    easing: 'linear',
                    queue: false
                }
            });
            return false;
        }); 
    };

    var navbar = function() {
        $(function () {
            $("a.page-scroll").bind("click", function(a) {
                var o = $(this);

                $("html, body").stop().animate({
                    scrollTop: $(o.attr("href")).offset().top - 58
                }, 1e3);
                
                a.preventDefault()
            });
        });
    };

    (function($) {
        carousels();
        isotope();
        navbar();
    })(jQuery);
}());
