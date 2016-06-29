// Jquery with no conflict
//jQuery(document).ready(function($) {
	jQuery(window).load(function() {
	
	//##########################################
	// LOF SLIDER
	//##########################################
	 
	/*
	var buttons = { previous:$('#home-slider .button-previous') ,
						next:$('#home-slider .button-next') };	
	
	$('#home-slider').lofJSidernews( {
		interval 		: 4000,
		direction		: 'opacitys',	
		easing			: 'easeInOutExpo',
		duration		: 1200,
		auto		 	: true,
		maxItemDisplay  : 5,
		navPosition     : 'horizontal', // horizontal
		navigatorHeight : 0,
		navigatorWidth  : 0,
		mainWidth		: 940,
		isPreloaded		: true,
		buttons: buttons
	});
	*/
										
											
	//##########################################
	// Superfish
	//##########################################
	
	$("ul.sf-menu").superfish({ 
        animation: {width:'show'},   // slide-down effect without fade-in 
        delay:     800 ,              // 1.2 second delay on mouseout 
        autoArrows:  false,
        speed: 500
    });
    
       
	//##########################################
	// Tool tips
	//##########################################
	
	
	$('.poshytip').poshytip({
    	className: 'tip-twitter',
		showTimeout: 1,
		alignTo: 'target',
		alignX: 'center',
		offsetY: 5,
		allowTipHover: false
    });
	
   
    
    $('.form-poshytip').poshytip({
		className: 'tip-twitter',
		showOn: 'focus',
		alignTo: 'target',
		alignX: 'right',
		alignY: 'center',
		offsetX: 5
	});
	
	

	//##########################################
	// Accordion box
	//##########################################

	$('.accordion-container').hide(); 
	$('.accordion-trigger:first').addClass('active').next().show();
	$('.accordion-trigger').click(function(){
		if( $(this).next().is(':hidden') ) { 
			$('.accordion-trigger').removeClass('active').next().slideUp();
			$(this).toggleClass('active').next().slideDown();
		}
		return false;
	});
	
	//##########################################
	// Toggle box
	//##########################################
	
	$('.toggle-trigger').click(function() {
		$(this).next().toggle('slow');
		$(this).toggleClass("active");
		return false;
	}).next().hide();
	
	    
    
	
	//##########################################
	// Tabs
	//##########################################

    $(".tabs").tabs("div.panes > div", {effect: 'fade'});


	
	//##########################################
	// Create Combo Navi
	//##########################################	
		
	// Create the dropdown base
	$("<select id='comboNav' />").appendTo("#combo-holder");
	
	// Create default option "Go to..."
	$("<option />", {
		"selected": "selected",
		"value"   : "",
		"text"    : "Navigation"
	}).appendTo("#combo-holder select");
	
	// Populate dropdown with menu items
	$("#nav a").each(function() {
		var el = $(this);		
		var label = $(this).parent().parent().attr('id');
		var sub = (label == 'nav') ? '' : '- ';
		
		$("<option />", {
		 "value"   : el.attr("href"),
		 "text"    :  sub + el.text()
		}).appendTo("#combo-holder select");
	});

	
	//##########################################
	// Combo Navigation action
	//##########################################
	
	$("#comboNav").change(function() {
	  location = this.options[this.selectedIndex].value;
	});


    //##########################################
	//OWL SLIDER
	//##########################################

      var owl = $("#featured-projects-owl-demo");

      owl.owlCarousel({

      items : 1, //10 items above 1000px browser width
      itemsDesktop : [1000,1], //5 items between 1000px and 901px
      itemsDesktopSmall : [900,1], // 3 items betweem 900px and 601px
      itemsTablet: [600,1], //2 items between 600 and 0;
      itemsMobile : false, // itemsMobile disabled - inherit from itemsTablet option
	  slideSpeed: 1000,
	  autoPlay: true
      });

      // Custom Navigation Events
      $(".next-featured-projects").click(function(){
        owl.trigger('owl.next');
      })
      $(".prev-featured-projects").click(function(){
        owl.trigger('owl.prev');
      })

      var owl1 = $("#featured-posts-owl-demo");

      owl1.owlCarousel({

      items : 3, //10 items above 1000px browser width
      itemsDesktop : [1000,3], //5 items between 1000px and 901px
      itemsDesktopSmall : [900,3], // 3 items betweem 900px and 601px
      itemsTablet: [600,1], //2 items between 600 and 0;
      itemsMobile : false, // itemsMobile disabled - inherit from itemsTablet option
	  slideSpeed: 1000,
	  autoPlay: true
      });

      // Custom Navigation Events
      $(".next-featured-posts").click(function(){
        owl1.trigger('owl.next');
      })
      $(".prev-featured-posts").click(function(){
        owl1.trigger('owl.prev');
      })

	  var owl2 = $("#our-clients-owl-demo");

      owl2.owlCarousel({

       itemsCustom : [
        [0, 1],
        [479, 2],
        [600, 2],
        [768, 3],
        [1023, 4],
        [1200, 4],
        [1400, 4],
        [1600, 4]
      ],	
      itemsMobile : false, // itemsMobile disabled - inherit from itemsTablet option
	  slideSpeed: 1000,
	  autoPlay: true
      });

      // Custom Navigation Events
      $(".next-our-clients").click(function(){
        owl2.trigger('owl.next');
      })
      $(".prev-our-clients").click(function(){
        owl2.trigger('owl.prev');
      })
	
	  var owl3 = $("#our-team-owl-demo");

      owl3.owlCarousel({
	  itemsCustom : [
        [0, 1],
        [479, 2],
        [600, 2],
        [768, 3],
        [1023, 1],
        [1200, 1],
        [1400, 1],
        [1600, 1]
      ],	
      	
      itemsMobile : false, // itemsMobile disabled - inherit from itemsTablet option
	  slideSpeed: 1000,
	  autoPlay: true,
	  
      });


	  var owl4 = $("#main-slider-owl-demo");

      owl4.owlCarousel({

      items : 1, //10 items above 1000px browser width
      itemsDesktop : [1000,1], //5 items between 1000px and 901px
      itemsDesktopSmall : [900,1], // 3 items betweem 900px and 601px
      itemsTablet: [600,1], //2 items between 600 and 0;
      itemsMobile : false, // itemsMobile disabled - inherit from itemsTablet option
	  slideSpeed: 1000,
	  autoPlay: true
      });

      // Custom Navigation Events
      $(".next-main-slider").click(function(){
        owl4.trigger('owl.next');
      })
      $(".prev-main-slider").click(function(){
        owl4.trigger('owl.prev');
      })
   
   
      
		
								
   
   
});//close



$(document).ready(function () {
    $("span.toggle_btn").click(function () {
        $('ul.menu li').not($(this).children("ul.menu li")).fadeToggle(10);

    });
});


