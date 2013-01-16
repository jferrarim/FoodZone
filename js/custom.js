/* FoodZone Desktop Application
	Author: Joshua Ferreira v 0.1
*/
(function($){


	// Blog Subnav
	$('.categories li a').bind('click', (function(e) {
		$('li a').removeClass('selected');
		$(this).addClass('selected');
	}));


	// Accordion
	var allPanels = $('.accordion div div').hide();
    
  $('.accordion a').bind('click', (function(e) {
  
    if( $(this).hasClass('down') ){
    	$(this).next().slideUp();
    	$(this).removeClass('down');
    	$(this).find('i').removeClass('icon-minus').addClass('icon-plus');
    }else{
    	$(this).next().slideDown();
    	$(this).addClass('down');
    	$(this).find('i').removeClass('icon-plus').addClass('icon-minus');
    }

    return false;

  }));

})(jQuery);