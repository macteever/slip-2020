(function ($, root, undefined) {
	$(document).ready(function(){

       // VIDEO part 1

      // function legalPart1(){
      //    var video = $('#legal_video').get(0);        
      //    video.play();
      //    video.addEventListener('ended',function(){
      //       v = video.currentSrc;
      //       video.src = '';
      //       video.src = v;         
      //       // console.log('fin video');   
      //       $('.legal-repeat-video').delay(1000).fadeIn(300);
      //       jQuery('.legal-repeat-video').click(function(){
      //          // $(this).data('clicked', true);
   
      //          video.play();
      //          $('.legal-repeat-video').fadeOut(300);
      //       });
   
      //    });
      // };
      // legalPart1()

      // setTimeout(function() {
      //    $("#tab3").trigger('click');
      // },4000);


      // animation scroll horizontal

      $(function() {
         if( $(window).width() > 768 ) {	
            
            $(function() {
               // init controller
               var controller = new ScrollMagic.Controller();

               // build a tween
               var scrollText = $('.legal-scroll-h');

               var homeScroll =  new TimelineMax()
               .fromTo(scrollText, 1,  
               {
                  x: '30%'
               }, 
               {
                  x: '5%'
               },'first')


               // build scene
               var wH = $("#legal_part2").height();

               var sceneHpara1 = new ScrollMagic.Scene({
                  triggerElement: '#legal_part2', // You can use 'this'
                  duration: wH, // Distance duration in px
                  triggerHook : 0 // 'percentage of window's height'
               })

               // Create a scene for each project
               .setTween(homeScroll) // trigger a TweenMax.to tween
               //.addIndicators({name: "Horizontal Parallax moving"}) // add indicators (requires plugin)
               .addTo(controller);
            });
         }
      });


      
       

   });
})(jQuery, this);