
jQuery(document).ready(function() {
	
    /*
        Fullscreen background
    */
    $.backstretch("C:/wamp64/www/assets/img/piron-guillaume-367208-unsplash.jpg");
    
    /*
        Registration form validation
    */
    $('.diagnosis-form input[type="text"], .diagnosis-form input[type="password"], .diagnosis-form input[type="number"], .registration-form textarea').on('focus', function() {
    	$(this).removeClass('input-error');
    });
    
    $('.diagnosis-form').on('submit', function(e) {
    	
    	$(this).find('input[type="text"], input[type="password"], input[type="number"], textarea').each(function(){
    		if( $(this).val() == "" ) {
    			e.preventDefault();
    			$(this).addClass('input-error');
    		}
    		else {
    			$(this).removeClass('input-error');
    		}
    	});
		
		
	
    
    	
    });
    
    
});
// JavaScript Document