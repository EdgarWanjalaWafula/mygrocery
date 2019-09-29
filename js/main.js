/**
 * @author 	Edgar Wanjala Wafula 
 * @url 	  http://mygrocery.co.ke/
 * 
 * Website integration scripts
 */

'use strict'

jQuery(document).ready(function($){
	initHomeSlider(); 
	initParralax(); 
	lastHeadingText(); 
	customNavigationInit(); 
	toggleBenefitsIcon(); 
	AOS.init({
		duration: 2000,
	});
	$.Scrollax();

	function initHomeSlider(){	
		var homeslider = $('.landing-page-slider')
		homeslider.owlCarousel({
			loop:true,
			margin:10,
			nav:false,
			dots:false, 
			animateIn: 'slideInRight',			
			animateOut: 'zoomOut',
			autoplay:true, 
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
	}

	function customNavigationInit(){
		var homeslider = $('.landing-page-slider')
		homeslider.owlCarousel();
		
		// Go to the next item
		$('.ion-ios-arrow-round-forward').click(function() {
			homeslider.trigger('next.owl.carousel');
		})

		// Go to the previous item
		$('.ion-ios-arrow-round-back').click(function() {
			// With optional speed parameter
			// Parameters has to be in square bracket '[]'
			homeslider.trigger('prev.owl.carousel', [3000]);
		})
	}

	// Parallax properties
	function initParralax(){
		$(".parralax-window").parallax(
			{
				speed: .26
			}
		)
	}

	function lastHeadingText(){
		var text 		= $(".heading-text").text();
		var splitted 	= text.split(" ");
		var lastWord 	= splitted.pop();
		var newTxt 		= splitted.join(" ") + "<span class='heading-text-last'> " + lastWord + "</span>";
		document.querySelector(".heading-text").innerHTML = newTxt; 
	}

	function toggleBenefitsIcon(){
		// $(".benefit-accordion").on("click", function(e){
		// 	if($(this).attr("aria-expanded") == "true"){
		// 		$(this).find("span").attr("class", "icon ion-ios-add")
		// 	} else if(($(this).attr("aria-expanded") == "false")) {
		// 		$(this).find("span").attr("class", "icon ion-ios-remove")
		// 	}
		// })

		// e.preventDefault(); 
	}
});

