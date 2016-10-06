(function($)
{
	if (!Modernizr.touch && $('#menu').is(':visible'))
		$('body').removeClass('sidebar-mini');

	if (Modernizr.touch)
		$('#menu').removeClass('hidden-xs');

	// handle menu toggle button action
	window.toggleMenuHidden = function()
	{
		$('body').toggleClass('sidebar-mini');
		$('#menu').toggleClass('hidden-xs');

		resizeNiceScroll();

//		resizeIframe();
		$(".portfolioContainer").isotope({ filter: '*' })
	}

	// main menu visibility toggle
	$('.navbar .btn-navbar').click(function(e)
	{
		e.preventDefault();
		toggleMenuHidden();
	});
	
	$(window).on('load', function()
	{
		
	});
	
	// Dynamically added commerce on the menu
	var appendLi = "<li><a href='a-melis-commerce.html'><i class='fa fa-shopping-cart'></i><span>Commerce</span></a></li>";
	var isThere = $(".sidebar .sidebarMenuWrapper > ul li.commerce").length;
	
	if(!isThere){
		$(".sidebar .sidebarMenuWrapper > ul").append(appendLi);
	}
	
	
	
	
	
})(jQuery);




$(document).ready(function(){

});