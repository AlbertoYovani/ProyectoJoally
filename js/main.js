$(document).ready(function($) {

	'use strict';

	//=================================== Twitter Feed  ===============================//
  //=================================== Flikr Feed  ========================================//
  $('#flickr').jflickrfeed({
    limit: 8, //Number of images to be displayed
    qstrings: {
      id: '36587311@N08'//Change this to any Flickr Set ID as you prefer in http://idgettr.com/
    },
    itemTemplate: '<li><a href="{{image_b}}" class="fancybox"><img src="{{image_s}}" alt="{{title}}" /></a></li>'
  });

  //=================================== Sticky nav ===================================//

  $("#header").sticky({topSpacing:0});

  //=================================== datepicker ===================================//
  $(".date-input" ).datepicker();

  //=================================== Loader =====================================//
  jQuery(window).load(function() {
    jQuery(".status").fadeOut();
      jQuery(".preloader").delay(1000).fadeOut(1000);
  })

	//=================================== Carousel Services  ==============================//	 
	$("#single-carousel, #single-carousel-sidebar").owlCarousel({
		  items : 1,
		  autoPlay: 4000,  
    	navigation : true,
    	autoHeight : true,
    	slideSpeed : 400,
    	singleItem: true,
    	pagination : false
	});

  //=================================== Carousel features  ==================================//
  $("#slide-features").owlCarousel({
      autoPlay: false,
      items : 1,
      navigation : true,
      autoHeight : true,
      slideSpeed : 400,
      singleItem: true,
      pagination : true
  });

  //=================================== Carousel Boxes  ==================================//
   $("#boxes-carousel").owlCarousel({
       autoPlay: 3200,      
       items : 4,
       navigation: true,
       itemsDesktopSmall : [1024,3],
       itemsTablet : [768,2],
       itemsMobile : [500,1],
       pagination: false
   });

  //=================================== Carousel teams  ==================================//
   $("#team-carousel").owlCarousel({
       autoPlay: 3200,      
       items : 3,
       navigation: true,
       itemsDesktopSmall : [1024,3],
       itemsTablet : [768,2],
       itemsMobile : [500,1],
       pagination: false
   });

   $("#team-carousel-02, #carousel-boxes-2").owlCarousel({
       autoPlay: 3200,      
       items : 2,
       navigation: false,
       itemsDesktopSmall : [1024,3],
       itemsTablet : [768,2],
       itemsMobile : [500,1],
       pagination: false
   });

   //=================================== Carousel Sponsor  ==================================//
   $("#sponsors").owlCarousel({
       autoPlay: 3200,      
       items : 5,
       navigation: false,
       itemsDesktop : [1199,4],
       itemsDesktopSmall : [1024,4],
       itemsTablet : [768,3],
       itemsMobile : [500,2],
       pagination: true
   });

   //=================================== Carousel testimonials  ===============================//  
  $("#testimonials").owlCarousel({
      items : 1,
      autoPlay: 3200,  
      navigation : false,
      autoHeight : true,
      slideSpeed : 400,
      singleItem: true,
      pagination : true
  });

	//=================================== Carousel Twitter  ===============================//	 
	$(".tweet_list").owlCarousel({
		  items : 1,
		  autoPlay: 3200,  
    	navigation : false,
    	autoHeight : true,
    	slideSpeed : 400,
    	singleItem: true,
    	pagination : true
	});

  //=================================== Ligbox  ===========================================//	
  $(".fancybox").fancybox({
      openEffect  : 'elastic',
      closeEffect : 'elastic',

      helpers : {
        title : {
          type : 'inside'
        }
      }
  });

	//=============================  tooltip demo ===========================================//
  $('.tooltip-hover').tooltip({
      selector: "[data-toggle=tooltip]",
      container: "body"
   });

  // slider-range
  $("#slider-range").slider({});

	//=================================== Totop  ============================================//
  $().UItoTop({
		scrollSpeed:500,
		easingType:'linear'
	});	

  //=================================== Portfolio Filters  ==============================//
  $(window).load(function(){
      var $container = $('.portfolioContainer');
      $container.isotope({
      filter: '*',
          animationOptions: {
          duration: 750,
          easing: 'linear',
          queue: false
  	}
  });
  $('.portfolioFilter a').click(function(){
      $('.portfolioFilter .current').removeClass('current');
      $(this).addClass('current');
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
   });
});	