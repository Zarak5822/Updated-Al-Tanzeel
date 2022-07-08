(function ($) {
"use strict";

/* slider-active */
$('.slider-active').owlCarousel({
    loop:true,
    nav:true,
    autoplay:true,
    autoplayTimeout:4000,
    autoplayHoverPause:true,
	navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})

/* product-active */
$('.product-active').owlCarousel({
    loop:true,
    nav:true,
	navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
    responsive:{
        0:{
            items:1
        },
        768:{
            items:3
        },
        1000:{
            items:4
        }
    }
})

/* portfolio-active */
$('.portfolio-active').owlCarousel({
    loop:true,
    nav:true,
	navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
    responsive:{
        0:{
            items:1
        },
        768:{
            items:1
        },
        1000:{
            items:1
        }
    }
})

/* testimonial-active */
$('.testimonial-active').owlCarousel({
    loop:true,
    nav:false,
	autoplay:true,
	navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})

/* blog-active */
$('.blog-active').owlCarousel({
    loop:true,
    nav:true,
	navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
    responsive:{
        0:{
            items:1
        },
        768:{
            items:2
        },
        1000:{
            items:3
        }
    }
})

/* brand-active */
$('.brand-active').owlCarousel({
    loop:true,
    nav:false,
	autoplay:true,
    responsive:{
        0:{
            items:2
        },
        768:{
            items:4
        },
        1000:{
            items:6
        }
    }
})

})(jQuery);	

