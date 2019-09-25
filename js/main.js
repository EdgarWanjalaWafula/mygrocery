/**
 * @author 	Edgar Wanjala Wafula 
 * @url 	http://giftedcommunitypwd.org.com
 * 
 * Website integration scripts
 */

'use strict'

jQuery(document).ready(function($){
    initHomeSlider(); 
    AOS.init({
      duration: 2500,
    });
    initPreloaderTimeout(); 
    
    function initHomeSlider(){
        var homeslider = $('.home-slider'); 

        homeslider.owlCarousel({
			loop:false,
            margin:0,
            touchDrag : false,
            mouseDrag : false, 
            nav:false,
            dots:true, 
            autoplay: true,
            autoplayTimeout: 10000,
            smartSpeed: 2500,
            navSpeed: 2500,
            slideBy: 1,
            animateOut: 'slideOutDown',
            animateIn: 'fadeIn',
			responsive:{
				0:{
					items:1
				},
				600:{
					items:3
				},
				1000:{
					items:1
				}
			}
        })
        
        homeslider.on('changed.owl.carousel', function(event) {
            $(".owl-item h3").addClass("animated fadeInDown slow")
            $(".owl-item.active").next().find("h3").addClass('animated fadeInDown slow')
            $(".owl-item.active").next().find("p").addClass('animated fadeInDown slower delay-1s')
        })

        $(".home-services").owlCarousel({
			loop:false,
			margin:15,
            nav:false,
            dots:true, 
            autoplay: false,
            autoplayTimeout: 10000,
            smartSpeed: 2500,
            navSpeed: 2500,
			responsive:{
				0:{
					items:1
				},
				600:{
					items:1
				},              
				1000:{
					items:3
				}
			}
        })
    }

    function initPreloaderTimeout(){
    	setTimeout(function(){ 
			$(".ij-preloader").fadeOut('slow'); 
		}, 1200);
    }
}); 

// When the user scrolls the page, execute myFunction
window.onscroll = function() {myFunction()};

// Get the navbar
var navbar = document.getElementById("masthead");

// Get the offset position of the navbar
var sticky = navbar.offsetTop;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("ij-sticky")
  } else {
    navbar.classList.remove("ij-sticky");
  }
} 

