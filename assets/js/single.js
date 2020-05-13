(function ($, root, undefined) {
	$(document).ready(function(){
        
      function scrollTo( target ) {
            if( target.length ) {
               $("html, body").stop().animate( { scrollTop: target.offset().top }, 500);
            }
      }
      // exemple
      scrollTo( $("#slip-2020") );
         
      
      $(function() {
         if( $(window).width() > 520 ) {	// DESKTOP DEVICES
            // Zoom single presentoir
            $('.ajax-thumbnail').zoom({
               //on: 'click',
               magnify: 1.15,
               duration: 300
               // touch: true
            });
         }
      });  
      		    
	});
})(jQuery, this);