;(function($){
    "use strict"
	
	
	var nav_offset_top = $('header').height() + 50; 
    /*-------------------------------------------------------------------------------
	  Navbar 
	-------------------------------------------------------------------------------*/

	//* Navbar Fixed  
    function navbarFixed(){
        if ( $('.header_area').length ){ 
            $(window).scroll(function() {
                var scroll = $(window).scrollTop();   
                if (scroll >= nav_offset_top ) {
                    $(".header_area").addClass("navbar_fixed");
                } else {
                    $(".header_area").removeClass("navbar_fixed");
                }
            });
        };
    };
    navbarFixed();
	
	/*----------------------------------------------------*/
    /*  Menu Click js
    /*----------------------------------------------------*/
	function Menu_js(){
		if($('.submenu').length){
			$('.submenu > .dropdown-toggle').click(function() { var location = $(this).attr('href'); window.location.href = location; return false; });
		}
	}
	Menu_js();
	
	
	
	/*----------------------------------------------------*/
    /*  Main Slider js
    /*----------------------------------------------------*/
    function main_slider(){
        if ( $('#main_slider').length ){
            $("#main_slider").revolution({
                sliderType:"standard",
                sliderLayout:"auto",
                delay:4000,
                disableProgressBar:"on",
                navigation: {
                    onHoverStop: 'off',
                    touch:{
                        touchenabled:"on"
                    },
                    arrows: {
                        style:"zeus",
                        enable:true,
                        hide_onmobile:true,
                        hide_under:992,
                        hide_onleave:true,
                        hide_delay:200,
                        hide_delay_mobile:1200,
                        tmp:'<div class="tp-title-wrap">  	<div class="tp-arr-imgholder"></div> </div>',
                        left: {
                            h_align: "left",
                            v_align: "center",
                            h_offset: 50,
                            v_offset: 0
                        },
                        right: {
                            h_align: "right",
                            v_align: "center",
                            h_offset: 50,
                            v_offset: 0
                        }
                    },
                },
                responsiveLevels:[4096,1199,992,767,480],
                gridwidth:[1170,970,750,700,480],
                gridheight:[709,709,500,400,320],
                lazyType:"smart",
                fallbacks: {
                    simplifyAll:"off",
                    nextSlideOnWindowFocus:"off",
                    disableFocusListener:false,
                }
            })
        }
    }
    main_slider();
	
	/*----------------------------------------------------*/
    /*  Main Slider js
    /*----------------------------------------------------*/
    function main_slider2(){
        if ( $('#main_slider2').length ){
            $("#main_slider2").revolution({
                sliderType:"standard",
                sliderLayout:"auto",
                delay:4000,
                disableProgressBar:"on",
                navigation: {
                    onHoverStop: 'off',
                    touch:{
                        touchenabled:"on"
                    },
                    arrows: {
                        style:"zeus",
                        enable:true,
                        hide_onmobile:true,
                        hide_under:992,
                        hide_onleave:true,
                        hide_delay:200,
                        hide_delay_mobile:1200,
                        tmp:'<div class="tp-title-wrap">  	<div class="tp-arr-imgholder"></div> </div>',
                        left: {
                            h_align: "left",
                            v_align: "center",
                            h_offset: 50,
                            v_offset: 0
                        },
                        right: {
                            h_align: "right",
                            v_align: "center",
                            h_offset: 50,
                            v_offset: 0
                        }
                    },
                },
                responsiveLevels:[4096,1199,992,767,480],
                gridwidth:[1170,970,750,700,480],
                gridheight:[676,676,650,550,500],
                lazyType:"smart",
                fallbacks: {
                    simplifyAll:"off",
                    nextSlideOnWindowFocus:"off",
                    disableFocusListener:false,
                }
            })
        }
    }
    main_slider2();
	
	/*----------------------------------------------------*/
    /*  Main Slider js
    /*----------------------------------------------------*/
    function main_slider3(){
        if ( $('#main_slider3').length ){
            $("#main_slider3").revolution({
                sliderType:"standard",
                sliderLayout:"auto",
                delay:4000,
                disableProgressBar:"on",
                navigation: {
                    onHoverStop: 'off',
                    touch:{
                        touchenabled:"on"
                    },
                    arrows: {
                        style:"zeus",
                        enable:true,
                        hide_onmobile:true,
                        hide_under:992,
                        hide_onleave:true,
                        hide_delay:200,
                        hide_delay_mobile:1200,
                        tmp:'<div class="tp-title-wrap">  	<div class="tp-arr-imgholder"></div> </div>',
                        left: {
                            h_align: "left",
                            v_align: "center",
                            h_offset: 50,
                            v_offset: 0
                        },
                        right: {
                            h_align: "right",
                            v_align: "center",
                            h_offset: 50,
                            v_offset: 0
                        }
                    },
                },
                responsiveLevels:[4096,1199,992,767,480],
                gridwidth:[1170,970,750,700,480],
                gridheight:[732,732,600,500,400],
                lazyType:"smart",
                fallbacks: {
                    simplifyAll:"off",
                    nextSlideOnWindowFocus:"off",
                    disableFocusListener:false,
                }
            })
        }
    }
    main_slider3();
	
	/*----------------------------------------------------*/
    /*  Main Slider js
    /*----------------------------------------------------*/
    function main_slider4(){
        if ( $('#main_slider4').length ){
            $("#main_slider4").revolution({
                sliderType:"standard",
                sliderLayout:"auto",
                delay:4000,
                disableProgressBar:"on",
                navigation: {
                    onHoverStop: 'off',
                    touch:{
                        touchenabled:"on"
                    },
                    arrows: {
                        style:"zeus",
                        enable:true,
                        hide_onmobile:true,
                        hide_under:992,
                        hide_onleave:true,
                        hide_delay:200,
                        hide_delay_mobile:1200,
                        tmp:'<div class="tp-title-wrap">  	<div class="tp-arr-imgholder"></div> </div>',
                        left: {
                            h_align: "left",
                            v_align: "center",
                            h_offset: 50,
                            v_offset: 0
                        },
                        right: {
                            h_align: "right",
                            v_align: "center",
                            h_offset: 50,
                            v_offset: 0
                        }
                    },
                },
                responsiveLevels:[4096,1199,992,767,480],
                gridwidth:[1170,970,750,700,480],
                gridheight:[582,582,582,550,500],
                lazyType:"smart",
                fallbacks: {
                    simplifyAll:"off",
                    nextSlideOnWindowFocus:"off",
                    disableFocusListener:false,
                }
            })
        }
    }
    main_slider4(); 
	
	

	/*----------------------------------------------------*/
    /*  Client Slider
    /*----------------------------------------------------*/
    function client_slider(){
        if ( $('.client_slider').length ){
            $('.client_slider').owlCarousel({
                loop:true,
                margin: 30,
                items: 6,
                nav:false,
                autoplay: true,
                smartSpeed: 1500,
                dots:false,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                    },
                    360: {
                        items: 2,
                    },
                    575: {
                        items: 3,
                    },
                    768: {
                        items: 4,
                    },
                    1024: {
                        items: 6,
                    }
                }
            })
        }
    }
    client_slider();

	/*----------------------------------------------------*/
    /*  Testimonials Slider
    /*----------------------------------------------------*/
    function testimonials_slider(){
        if ( $('.c_testi_slider').length ){
            $('.c_testi_slider').owlCarousel({
                loop:true,
                margin: 0,
                items: 3,
                nav: false,
                autoplay: true,
                smartSpeed: 1500,
                dots:true, 
                responsiveClass: true,
				responsive: {
                    0: {
                        items: 1,
                    },
                    768: {
                        items: 2,
                    },
                    992: {
                        items: 3,
                    },
                }
            })
        }
    }
    testimonials_slider();
	
	/*----------------------------------------------------*/
    /*  Testimonials Slider
    /*----------------------------------------------------*/
    function box_testi_slider(){
        if ( $('.box_testi_slider').length ){
            $('.box_testi_slider').owlCarousel({
                loop:true,
                margin: 30,
                items: 1,
                nav: false,
                autoplay: true,
                smartSpeed: 2000,
                dots:false, 
                responsiveClass: true,
            })
        }
    }
    box_testi_slider();
	
	/*----------------------------------------------------*/
    /*  Service Slider
    /*----------------------------------------------------*/
    function service_slider(){
        if ( $('.service_slider').length ){
            $('.service_slider').owlCarousel({
                loop:true,
                margin: 30,
                items: 4,
                nav: false,
                autoplay: true,
                smartSpeed: 2000,
                dots:false, 
				navContainerClass: 'service_arrow',
                navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
                responsiveClass: true,
				responsive: {
                    0: {
                        items: 1,
                    },
                    700: {
                        items: 2,
                    },
                    992: {
                        items: 3,
                    },
                    1192: {
                        items: 4,
                    }
                }
            })
        }
    }
    service_slider();
	
	/*----------------------------------------------------*/
    /*  Gallery Slider
    /*----------------------------------------------------*/
    function home_gallery_slider(){
        if ( $('.home_gallery_slider').length ){
            $('.home_gallery_slider').owlCarousel({
                loop:true,
                margin: 0,
                items: 4,
                nav: false,
                autoplay: true,
                smartSpeed: 2000,
                dots:false, 
                responsiveClass: true,
				responsive: {
                    0: {
                        items: 1,
                    },
                    480: {
                        items: 2,
                    },
                    768: {
                        items: 3,
                    },
                    992: {
                        items: 4,
                    }
                }
            })
        }
    }
    home_gallery_slider();

	/*----------------------------------------------------*/
    /*  Gallery One js
    /*----------------------------------------------------*/
	function gallery_isotope(){
		if ( $('.gallery_area').length ){
			
			// Activate isotope in container
            $(".gallery_inner").imagesLoaded( function() {
                $(".gallery_inner").isotope({
					layoutMode: 'fitRows',
					percentPosition:true,
					masonry: {
						columnWidth: 1,
					}            
                }); 
            }); 
			
			// Add isotope click function
			$(".g_fillter ul li").on('click',function(){
				$(".g_fillter ul li").removeClass("active");
				$(this).addClass("active");

				var selector = $(this).attr("data-filter");
                $(".gallery_inner").isotope({
                    filter: selector,
                    animationOptions: {
                        duration: 450,
                        easing: "linear",
                        queue: false,
                    }
                });
				return false;
			});
		}
	}

	gallery_isotope();
	
	/*----------------------------------------------------*/
    /*  Simple LightBox js
    /*----------------------------------------------------*/
	
	function Lightbox(){
		if($('.light').length){
			$('.imageGallery1 .light').simpleLightbox();
		}
	}
	Lightbox();
	
	/*----------------------------------------------------*/
    /* DateTimePicker js
    /*----------------------------------------------------*/
	function DateTimePicker(){
		if($('#datetimepicker3').length){
			$('#datetimepicker3').datetimepicker({
				format: 'LT'
			});
		}
	}
	DateTimePicker();
	
	/*----------------------------------------------------*/
    /*  DateTimePicker js
    /*----------------------------------------------------*/
	function DateTime(){
		if($('#datetimepicker4').length){
			$('#datetimepicker4').datetimepicker({
				format: 'L'
			});
		}
	}
	DateTime();
	
	/*----------------------------------------------------*/
    /*  Nice Select js
    /*----------------------------------------------------*/
	function nice_select(){
		if($('.nice_select').length){
			$('.nice_select').niceSelect();
		}
	}
	nice_select();
	
	
	/*----------------------------------------------------*/
    /*  Video Popup js
    /*----------------------------------------------------*/
	function video_js(){
		if($('.popup-youtube, .popup-vimeo, .popup-gmaps').length){
			$('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
				disableOn: 700,
				type: 'iframe',
				mainClass: 'mfp-fade',
				removalDelay: 160,
				preloader: false,

				fixedContentPos: false
			});
		}
	}
	video_js();
	
	/*----------------------------------------------------*/
    /*  Search Popup js
    /*----------------------------------------------------*/
	function popupAnimation(){
		if ( $('.popup-with-zoom-anim').length ){
			$(document).ready(function() {
				$('.popup-with-zoom-anim').magnificPopup({
					type: 'inline',

					fixedContentPos: false,
					fixedBgPos: true,

					overflowY: 'auto',

					closeBtnInside: true,
					preloader: false,

					midClick: true,
					removalDelay: 300,
					mainClass: 'my-mfp-zoom-in'
				});

				$('.popup-with-move-anim').magnificPopup({
					type: 'inline',

					fixedContentPos: false,
					fixedBgPos: true,

					overflowY: 'auto',

					closeBtnInside: true,
					preloader: false,

					midClick: true,
					removalDelay: 300,
					mainClass: 'my-mfp-slide-bottom'
				});
			});
		}
	}
	popupAnimation();


})(jQuery)

//# sourceMappingURL=theme-dist.js.map