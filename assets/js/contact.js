(function ($, root, undefined) {
	$(document).ready(function(){

      // PARALLAX VERTICAL 

      $(function() {
         if( $(window).width() > 768 ) {	
            
            // PARALLAX CONTENT
            $(function() {
               // init controller
               var controller = new ScrollMagic.Controller();
      
      
               $('.contact-main .row').each(function() {
                  var $this = $(this);
                  var wH = $(window).outerHeight();
                  var thisImg = $(this).find('.contact-repeater-img, .contact-cat-left-parent');
                  var thisText = $(this).find('.contact-repeater-content-parent, .contact-cat-right-parent');
               // build a tween
               var contactContent1 =  new TimelineMax()
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
                  duration: wH*1.5, // Distance duration in px
                  triggerHook : 0.8 // 'percentage of window'
               })
      
               // Create a scene for each project
               .setTween(contactContent1) // trigger a TweenMax.to tween
               //.addIndicators({name: "Parllax moving"}) // add indicators (requires plugin)
               .addTo(controller);
               });
            });
         }
      });  

      // MODAL PAGE FORM MESSAGE CONTACT
      $('.button-form').click(function(){
         var buttonId = $(this).attr('id');
         $('#modal-container-form').removeAttr('class').addClass(buttonId);
         $('body').addClass('modal-active');
       })
       
      $(document).mouseup(function(e) {

         var containerParent = $("#modal-container-form");
         var container = $("#modal-container-form .modal");

         // if the target of the click isn't the container nor a descendant of the container
         if (!container.is(e.target) && container.has(e.target).length === 0) 
         {
            containerParent.addClass('out');
            $('body').removeClass('modal-active');
         }
      });
       
      //MODAL PAGE FORM TELEPHONE CONTACT
      $('.button-phone').click(function(){
         var buttonId = $(this).attr('id');
         $('#modal-container-phone').removeAttr('class').addClass(buttonId);
         $('body').addClass('modal-active');
      })
      
      // $(document).mouseup(function(e) {

      //    var containerParent = $("#modal-container-phone");
      //    var container = $("#modal-container-phone .modal");

      //    // if the target of the click isn't the container nor a descendant of the container
      //    if (!container.is(e.target) && container.has(e.target).length === 0) 
      //    {
      //       containerParent.addClass('out');
      //       $('body').removeClass('modal-active');
      //    }
      // });


   });
})(jQuery, this);