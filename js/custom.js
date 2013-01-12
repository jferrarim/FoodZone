/* FoodZone Desktop Application
	Author: Joshua Ferreira v 0.1
*/
(function($){

	
	$('.categories li a').bind('click', (function(e) {
		$('li a').removeClass('selected');
		$(this).addClass('selected');
	}));

})(jQuery);