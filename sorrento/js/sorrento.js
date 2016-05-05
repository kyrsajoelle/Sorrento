jQuery.noConflict();
        
jQuery(document).ready(function($){


	var mswidth=$('#meteor-slideshow').width();
//	alert (mswidth);


	$(".bottom_SN").click(function(event) {
		jQuery('#lower_nav').slideToggle( "fast", function() {
			if (jQuery('#lower_nav').is(':visible')) {
				jQuery('#lower_nav_tab').css('background-image','url(http://sorrentotherapeutics.com/wp-content/themes/sorrento_v3/images/sub_nav_tab_down.png)');
				//alert(1);
			}
			else {
					//alert(2);
				jQuery('#lower_nav_tab').css('background-image','url(http://sorrentotherapeutics.com/wp-content/themes/sorrento_v3/images/sub_nav_tab.png)');
			}
		});			
	});


	$(".career_link").click(function(event) {
		event.preventDefault();
		$(this).parent().children('div').slideToggle( "fast", function() {
		
		});	
	});
	var totalwindW=jQuery(document).width();
	
	if (totalwindW>768) {
		$(".nav-menu li").mouseover(function(){
			$(this).children('.sub-menu').stop().slideDown(300);
		});
		$(".nav-menu li").mouseout(function(){
			$(this).children('.sub-menu').stop().slideUp();
		});   
	}
	else {
			jQuery('.site .main-navigation').css('min-height','100px');
	}
	
	/* Scroll event handler */
    jQuery(window).bind('scroll',function(e){
    	parallaxScroll();
		
    });	
    

	$("#company_filings").click(function(event) {
		event.preventDefault();
		jQuery('.stock-page-content').slideToggle( "fast", function() {
		
			if (jQuery(this).css("display")!='none'){

				jQuery(this).parent().children('#company_filings').html('Hide &#187;');
			}
			else {
				jQuery(this).parent().children('#company_filings').html('View &#187;');
			}
		});
		return false;
	});		
		

/*	jQuery( ".callout_title" ).click(function(event) {
				event.preventDefault();
		jQuery(this).children('.bod_details p').css('display','inline');
		jQuery(this).children('.bod_details').children('.swoosh').slideToggle( "fast", function() {
			if (jQuery(this).css("display")!='none'){
				jQuery(this).css('display','inline');
				jQuery(this).parent().children('.dmc').html('close &#187;');
			}
			else {
				jQuery(this).parent().children('.dmc').html('&nbsp;&#124;&nbsp;read more &#187;');
			}
			
			// Animation complete.
		});
	}); */
	
	$( ".dmc" ).click(function(event) {
		event.preventDefault();	
		$(this).parent().children('.swoosh').slideToggle('fast',function() {
			if ($(this).parent().children('.swoosh').is(':visible')) {
				$(this).parent().children('.dmc').html('close &#187;');
			}
			else {
				$(this).parent().children('.dmc').html('&nbsp;&#124;&nbsp;read more &#187;');
			}
		})
	});	   
   
   
    
});