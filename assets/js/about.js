(function ($, root, undefined) {
	$(document).ready(function(){

      // ABOUT VIDEO REPEAT 

      function aboutpart1(){
         var video = $('#about_video').get(0);        
         video.play();
         video.addEventListener('ended',function(){
            v = video.currentSrc;
            video.src = '';
            video.src = v;         
            // console.log('fin video');   
            $('.about-repeat-video').delay(1000).fadeIn(300);
            jQuery('.about-repeat-video').click(function(){
               // $(this).data('clicked', true);

               video.play();
               $('.about-repeat-video').fadeOut(300);
            });

         });
      };
      aboutpart1()

      function aboutpart3(){
         var video = $('.about-video-recommandation').get(0);        
         video.play();
         video.addEventListener('ended',function(){
            v = video.currentSrc;
            video.src = '';
            video.src = v;         
   
            $('.about-repeat-video2').delay(1000).fadeIn(300);
            jQuery('.about-repeat-video2').click(function(){
   
               video.play();
               $('.about-repeat-video2').fadeOut(300);
            });
   
         });
      };
      aboutpart3()


      // SCROLL HORIZONTAL 

      $(function() {
         if( $(window).width() > 768 ) {	
            
            $(function() {
               // init controller
               var controller = new ScrollMagic.Controller();

               // build a tween
               var scrollText = $('.about-scroll-h');

               var homeScroll =  new TimelineMax()
               .fromTo(scrollText, 1,  
               {
                  x: '10%'
               }, 
               {
                  x: '-18%'
               },'first')

               // build scene
               var wH = $(window).height();

               var sceneHpara1 = new ScrollMagic.Scene({
                  triggerElement: '#about_part3', // You can use 'this'
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