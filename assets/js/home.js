(function ($, root, undefined) {
	$(document).ready(function(){

      // LOADER
	   $(".page-loader").delay(3500).fadeOut(500);

      // Force distance from top page when refresh
      var topHeight = $(window).height();
      var topWindow = $(window).scrollTop(0);
      
      // setTimeout(function() {
      //    CustomEase.create("top-home", "1,0.5,0.25,1");
      //    gsap.to(window, {duration: 1.2, scrollTo: initPos});
      // }, 2500);

      $(function() {
         if( $(window).width() > 520 ) {	// DESKTOP DEVICES
            var initPos = topHeight*0.25;
            // Force DOM top page on refrest
            $(document).one('ready',function(){
               setTimeout(function() {
                  $("html").animate({scrollTop: 0}, 300, "swing");
               }, 0);
               // Scroll Init position after delay
               setTimeout(function() {
                  // Scroll Window after splash screen
                  $("html").animate({scrollTop: initPos}, 800, "swing");
                  // Apparition content 
                  TweenMax.to(".video-top-content", 0, 
                  {
                     opacity : 1,
                     duration: 0.8,
                     y: '0vw',
                     // ease:Power1.easeInOut
                  });
               }, 3500);
            });
            // Animation to move home main content after LOADER
            setTimeout(function() {
               $(window).scroll(function() {   
                  if ($(this).scrollTop() < initPos ) {
                     // console.log('video top content apparait');
                     TweenMax.to(".video-top-content", 0, 
                     {
                        opacity : 0,
                        y: '4vw',
                        // ease:Power1.easeInOut
                     });
                  } else {
                     TweenMax.to(".video-top-content", 0, 
                     {
                        opacity : 1,
                        y: '0vh',
                        // ease:Power1.easeInOut
                     });
                  }
               });
            }, 4500);
         }
      });
      $(function() { // MOBILE DEVICES
         if( $(window).width() < 520 ) {	
            var initPos = topHeight*0.10;
            // Force DOM top page on refrest
            $(document).one('ready',function(){
               setTimeout(function() {
                  $("html").animate({scrollTop: 0}, 300, "swing");
               }, 0);
               // Scroll Init position after delay
               setTimeout(function() {
                  // Scroll Window after splash screen
                  $("html").animate({scrollTop: initPos}, 800, "swing");
                  // Apparition content 
                  TweenMax.to(".video-top-content", 0, 
                  {
                     opacity : 1,
                     duration: 0.8,
                     y: '0vw',
                     // ease:Power1.easeInOut
                  });
               }, 3500);
            });
         }
      });

      // Add or Remove Class and LOGO when top page position
      $(window).scroll(function() {   
         var scrollPosition = $(window).scrollTop();
         if (scrollPosition == 0) {
            $('body').addClass('scroll-on-top');
            $('.splash-logo svg').delay(500).fadeIn(500);

         }else{
            $('body').removeClass('scroll-on-top');  
            $('.splash-logo svg').fadeOut(300);
         }
      });
        
      // OPACITY PROGRESSIV HEADER VIDEO
		$(function() {
			// init controller
			var controller = new ScrollMagic.Controller();

			// build a tween
			var anim1 = gsap.fromTo(".splash-logo-bkg", 1,  {autoAlpha:0}, {autoAlpha:1});
			
			// build scene
			var scene1 = new ScrollMagic.Scene({
				triggerElement: 'video-top-content', // You can use 'this'
				duration: 600, // Distance duration in px
				triggerHook : 0 // 'percentage of window'
			})

			// Create a scene for each project
			.setTween(anim1) // trigger a TweenMax.to tween
			//.addIndicators({name: "Opacity increase"}) // add indicators (requires plugin)
			.addTo(controller);
			
		});

      $(function() {
         if( $(window).width() > 767 ) {	
   
            // DETECT WHEN MAIN IS ON TOP OF WINDOW
   
            var headerTop = $(window).height();
   
            $(window).on( 'scroll', function(){
            if ($(window).scrollTop() >= headerTop) {
                  $('.home header').addClass('fixed');
                  $('body.home').addClass('menu-fixed');
                  // $('.home main').addClass('no-translateY');
                  // $('.home header').addClass('no-translateY');
                  $("body.home").addClass("scroll-already");
               } else {
                  $('.home header').removeClass('fixed');
                  $('body.home').removeClass('menu-fixed');
               }
            });
         }
      }); // END RESPONSIVS > 767
   
      $(function() { // START REPSONSVIE < 767 
         if( $(window).width() < 767 ) {	
   
            var headerTop = $(window).height() * 0.83;
   
            $(window).on( 'scroll', function(){
            if ($(window).scrollTop() >= headerTop) {
                  $('.home header').addClass('fixed');
                  $('body.home').addClass('menu-fixed');
                  // $('.home main').addClass('no-translateY');
                  // $('.home header').addClass('no-translateY');
                  $("body.home").addClass("scroll-already");
               } else {
                  $('.home header').removeClass('fixed');
                  $('body.home').removeClass('menu-fixed');
               }
            });
         }
      }); // END RESPONSIVS < 767
   
      // FIXED HEADER ON THE TOP
      var distance = $('header').offset().top,
         $window = $(window);

      $window.scroll(function() {
         if ( $window.scrollTop() >= distance ) {
            
            $('#archive-cat.archive header').addClass('fixed');
            $('body#archive-cat.archive').addClass('menu-fixed');
            //$('#archive-cat.archive header .top-header-wpml').fadeIn(300);
         }else{
            
            $('#archive-cat.archive header').removeClass('fixed');
            $('body#archive-cat.archive').removeClass('menu-fixed');
            //$('#archive-cat.archive header .top-header-wpml').fadeOut(300);
         }
      });


   // PARALLAX CONTENT HOME PAGE 
   $(function() {
   if( $(window).width() > 768 ) {	
      
      $(function() {
         // init controller
			var controller = new ScrollMagic.Controller();


         $('.home-main .row').each(function() {
            var $this = $(this);
            var wH = $(window).outerHeight();
            var thisImg = $(this).find('.home-repeater-img');
            var thisText = $(this).find('.home-repeater-content-parent');
			// build a tween
         var homeContent1 =  new TimelineMax()
         .fromTo(thisText, 1,  
         {
            y: '-8%'
         }, 
         {
            y: '-18%'
         },'first')
         .fromTo(thisImg, 1,  
         {
            y: '0%'
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
			.setTween(homeContent1) // trigger a TweenMax.to tween
			//.addIndicators({name: "Parllax moving"}) // add indicators (requires plugin)
			.addTo(controller);
         });
      });

         // VIDEO SPRITE

            // const video = document.getElementById('video-scroll');
            // const long = document.getElementById('video-length');
            // const triggerVideo = document.getElementById('home-sprite');
            // let scrollpos = 0;
            // let lastpos;

            // const controller = new ScrollMagic.Controller();
            
            // const scene = new ScrollMagic.Scene({
            // triggerElement: triggerVideo,
            // triggerHook : 0 // 'percentage of window'
            // });
            // const startScrollAnimation = () => {
            // scene
            //    //.addIndicators({name: "Control scroll"}) // add indicators (requires plugin)
            //    .setPin('#home-sprite') // STOP SCROLL DURING VIDEO ANIMATION
            //    .addTo(controller)
            //    .duration(long.clientHeight)
            //    .on("progress", (e) => {
            //       scrollpos = e.progress;
            //    });

            //    setInterval(() => {
            //       if (lastpos === scrollpos) return;
            //       requestAnimationFrame(() => {
            //          video.currentTime = video.duration * scrollpos;
            //          video.pause();
            //          lastpos = scrollpos;
            //          // console.log(video.currentTime, scrollpos);
            //       });
            //    }, 50);
            // };

            // const preloadVideo = (v, callback) => {
            // const ready = () => {
            //    v.removeEventListener('canplaythrough', ready);

            //    video.pause();
            //    var i = setInterval(function() {
            //       if (v.readyState > 3) {
            //       clearInterval(i);
            //       video.currentTime = 0;
            //       callback();
            //       }
            //    }, 50);
            // };
            // v.addEventListener('canplaythrough', ready, false);
            // v.play();
            // };

            // preloadVideo(video, startScrollAnimation);

            // startScrollAnimation();
         //END VIDEO SPRITE 

      }
   });  
      
   });
})(jQuery, this);