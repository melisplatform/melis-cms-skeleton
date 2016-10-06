// melis ecommerce JS

$(document).ready(function(){
	
	var $body = $("body");
	
	
	// filter dropdown in search bar
	$body.on("click", ".filter-key-values li a", function(){
		var value = $(this).data('text');
		$(this).parents('.filter-dropdown').attr('data-value', value);
		$(this).parents('.filter-key-values').prev().find('span.filter-key').text(value);
	});
	
	
	// trigger Isotope after images have loaded
	var isProductPage = $(".portfolioContainer").length; //activate the isotop plugin only in product page
	
	if(isProductPage){
		var $container = $('.portfolioContainer');
		 $container.imagesLoaded( function(){
	        $container.isotope({
	        	itemSelector : '.a'
	        });
	     });
	}
	
	 
	// Isotope sorting/filter
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
         
    }); 
    
    
    /* DEMO for deleting */
    $(".me-action-button-cont .fa-times, .me-file-cont .fa-times-circle").on("click", function(){
    	$(this).parent().fadeOut(500, function(){
    		$(this).remove();
    	});
    });
    
    /* DEMO for deleting product image */
    $(".delete-p-image").on("click", function(){
    	
    	var elemToRemove = $(this).parents('.a');
    	$(".portfolioContainer").isotope( 'remove', elemToRemove ).isotope('layout');
    	
    });

   
    
    
    /* ---=[ ATTRIBUTE FUNCTIONALITIES ]=--- */
    // show|hide add attribute section
    $("#me-new-attribute").on("click", function(){
    	$("#addAttributeCont").slideToggle(500);
    });
    
    // add new language to attribute
    $(".add-language-attribute").on("click", function(){
    	var clone = $(this).parent('li').clone();
    	clone.find('span').removeClass().addClass('remove-language-attribute fa fa-times'); // remove the span
    	clone.appendTo( $(this).parents('ul') );
    });
    
    // remove new language created
    $("body").on("click", '.remove-language-attribute', function(){
    	$(this).parent('li').fadeOut(300, function(){
    		$(this).remove();
    	});
    });
	
	
	
});