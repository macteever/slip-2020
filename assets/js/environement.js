(function ($, root, undefined) {
	$(document).ready(function(){

      // SLIDER 
      $('.environement-slider').slick({
         slidesToShow: 1,
         slidesToScroll: 1,
         fade: true,
         arrows: false,
         asNavFor: '.environement-slider-nav'
       });
       $('.environement-slider-nav').slick({
         slidesToShow: 3,
         slidesToScroll: 1,
         asNavFor: '.environement-slider',
         dots: false,
         arrows: false,
         focusOnSelect: true
       });

       // VIDEO part 1

      // function environementPart1(){
      //    var video = $('#environement_video').get(0);        
      //    video.play();
      //    video.addEventListener('ended',function(){
      //       v = video.currentSrc;
      //       video.src = '';
      //       video.src = v;         
      //       // console.log('fin video');   
      //       $('.environement-repeat-video').delay(1000).fadeIn(300);
      //       jQuery('.environement-repeat-video').click(function(){
      //          // $(this).data('clicked', true);
   
      //          video.play();
      //          $('.environement-repeat-video').fadeOut(300);
      //       });
   
      //    });
      // };
      // environementPart1()


       // VIDEO part 4

      function environementPart4(){
         var video = $('.environement-video-recommandation').get(0);        
         video.play();
         video.addEventListener('ended',function(){
            v = video.currentSrc;
            video.src = '';
            video.src = v;         
            // console.log('fin video');   
            $('.environement-repeat-video2').delay(1000).fadeIn(300);
            jQuery('.environement-repeat-video2').click(function(){
               // $(this).data('clicked', true);
   
               video.play();
               $('.environement-repeat-video2').fadeOut(300);
            });
   
         });
      };
      environementPart4()



   });
})(jQuery, this);