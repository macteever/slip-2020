(function ($, root, undefined) {
	$(document).ready(function(){

   $(function() {
      if( $(window).width() > 768 ) {	

      // PARALLAX CONTENT
      $(function() {
         // init controller
			var controller = new ScrollMagic.Controller();


         $('.about-main .row').each(function() {
            var $this = $(this);
            var wH = $(window).outerHeight();
            var thisImg = $(this).find('.about-repeater-content-left');
            var thisText = $(this).find('.about-repeater-content-right');
			// build a tween
         var aboutContent1 =  new TimelineMax()
         .fromTo(thisText, 1,  
         {
            y: '-10%'
         }, 
         {
            y: '13%'
         },'first')
         .fromTo(thisImg, 1,  
         {
            y: '0%'
         }, 
         {
            y: '-10%'
         },'first')

         // build scene
			var sceneHpara1 = new ScrollMagic.Scene({
				triggerElement: this, // You can use 'this'
				duration: wH*2, // Distance duration in px
				triggerHook : 1// 'percentage of window'
			})

			// Create a scene for each project
			.setTween(aboutContent1) // trigger a TweenMax.to tween
			//.addIndicators({name: "Parllax moving"}) // add indicators (requires plugin)
			.addTo(controller);
         });

         $('.about-main .row').each(function() {
            var $this = $(this);
            var wH = $(window).outerHeight();
            var thisImg = $(this).find('.about-repeater-img');
            var thisText = $(this).find('.about-repeater-content-parent');
			// build a tween
         var aboutContent1 =  new TimelineMax()
         .fromTo(thisText, 1,  
         {
            y: '10%'
         }, 
         {
            y: '-10%'
         },'first')
         .fromTo(thisImg, 1,  
         {
            y: '-10%'
         }, 
         {
            y: '10%'
         },'first')

         // build scene
			var sceneHpara1 = new ScrollMagic.Scene({
				triggerElement: this, // You can use 'this'
				duration: wH*2, // Distance duration in px
				triggerHook : 1// 'percentage of window'
			})

			// Create a scene for each project
			.setTween(aboutContent1) // trigger a TweenMax.to tween
			//.addIndicators({name: "Parllax moving"}) // add indicators (requires plugin)
			.addTo(controller);
         });
      });
      }
   });

   });
})(jQuery, this);