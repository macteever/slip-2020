(function ($, root, undefined) {
	$(document).ready(function(){

      // PARRALAX VERTICAL 

      $(function() {
      if( $(window).width() > 992 ) {
      // init controller
      var controller = new ScrollMagic.Controller();


      $('.collections-main .row-collections-parent').each(function() {
            var $this = $(this);
            var wH = $(window).outerHeight();
            //var thisImg = $(this).find('.tmplt-collections-media');
            var thisText = $(this).find('.tmplt-collections-content');
                  // build a tween
      var collecContent1 =  new TimelineMax()
      .fromTo(thisText, 1,  
      {
            y: '0%'
      }, 
      {
            y: '-20%'
      },'first')

      // build scene
            var sceneCpara1 = new ScrollMagic.Scene({
                  triggerElement: this, // You can use 'this'
                  duration: wH*1.5, // Distance duration in px
                  triggerHook : 0.8 // 'percentage of window'
            })

            // Create a scene for each project
            .setTween(collecContent1) // trigger a TweenMax.to tween
            //.addIndicators({name: "Parllax moving"}) // add indicators (requires plugin)
            .addTo(controller);
            });
         };
      });



      $(function() {
         if( $(window).width() > 992 ) {
         // VIDEO SPRITE
      

            const controller = new ScrollMagic.Controller();

            const video = document.getElementById('video-scroll-0');
            const long = document.getElementById('video-length-0');
            const triggerVideo = document.getElementById('collection-sprite-0');
            let scrollpos = 0;
            let lastpos;
      
            const scene = new ScrollMagic.Scene({
            triggerElement: triggerVideo,
            triggerHook : 0 // 'percentage of window'
            });

            const startScrollAnimation = () => {
            scene
               //.addIndicators({name: "Control scroll"}) // add indicators (requires plugin)
               .setPin('#collection-sprite-0') // STOP SCROLL DURING VIDEO ANIMATION
               .duration(long.clientHeight)
               .addTo(controller)
               .on("progress", (e) => {
                  scrollpos = e.progress;
               });
               
               
               setInterval(() => {
                  if (lastpos === scrollpos) return;
                  requestAnimationFrame(() => {
                     video.currentTime = video.duration * scrollpos;
                     video.pause();
                     lastpos = scrollpos;
                     // console.log(video.currentTime, scrollpos);
                  });
               }, 50);
            };
            
            const preloadVideo = (v, callback) => {
               const ready = () => {
                  v.removeEventListener('canplaythrough', ready);
                  
                  video.pause();
                  var i = setInterval(function() {
                     if (v.readyState > 3) {
                        clearInterval(i);
                        video.currentTime = 0;
                        callback();
                     }
                  }, 50);
               };
               v.addEventListener('canplaythrough', ready, false);
               v.play();
            };

            preloadVideo(video, startScrollAnimation);
            startScrollAnimation();

            // NEXT VIDEO 
            const video1 = document.getElementById('video-scroll-1');
            const long1 = document.getElementById('video-length-1');
            const triggerVideo1 = document.getElementById('collection-sprite-1');
            let scrollpos1 = 0;
            let lastpos1;
      
            const scene1 = new ScrollMagic.Scene({
            triggerElement: triggerVideo1,
            triggerHook : 0 // 'percentage of window'
            });

            const startScrollAnimation1 = () => {
            scene1
               //.addIndicators({name: "Control scroll"}) // add indicators (requires plugin)
               .setPin('#collection-sprite-1') // STOP SCROLL DURING VIDEO ANIMATION
               .duration(long1.clientHeight)
               .addTo(controller)
               .on("progress", (e) => {
                  scrollpos1 = e.progress;
               });
               
               
               setInterval(() => {
                  if (lastpos1 === scrollpos1) return;
                  requestAnimationFrame(() => {
                     video1.currentTime = video1.duration * scrollpos1;
                     video1.pause();
                     lastpos1 = scrollpos1;
                     // console.log(video.currentTime, scrollpos);
                  });
               }, 50);
            };
            
            const preloadVideo1 = (v, callback) => {
               const ready = () => {
                  v.removeEventListener('canplaythrough', ready);
                  
                  video1.pause();
                  var i = setInterval(function() {
                     if (v.readyState > 3) {
                        clearInterval(i);
                        video1.currentTime = 0;
                        callback();
                     }
                  }, 50);
               };
               v.addEventListener('canplaythrough', ready, false);
               v.play();
            };

            preloadVideo1(video1, startScrollAnimation1);
            startScrollAnimation1();

            // NEXT VIDEO
            const video2 = document.getElementById('video-scroll-2');
            const long2 = document.getElementById('video-length-2');
            const triggerVideo2 = document.getElementById('collection-sprite-2');
            let scrollpos2 = 0;
            let lastpos2;
      
            const scene2 = new ScrollMagic.Scene({
            triggerElement: triggerVideo2,
            triggerHook : 0 // 'percentage of window'
            });

            const startScrollAnimation2 = () => {
            scene2
               //.addIndicators({name: "Control scroll"}) // add indicators (requires plugin)
               .setPin('#collection-sprite-2') // STOP SCROLL DURING VIDEO ANIMATION
               .duration(long2.clientHeight)
               .addTo(controller)
               .on("progress", (e) => {
                  scrollpos2 = e.progress;
               });
               
               
               setInterval(() => {
                  if (lastpos2 === scrollpos2) return;
                  requestAnimationFrame(() => {
                     video2.currentTime = video2.duration * scrollpos2;
                     video2.pause();
                     lastpos2 = scrollpos2;
                     // console.log(video.currentTime, scrollpos);
                  });
               }, 50);
            };
            
            const preloadVideo2 = (v, callback) => {
               const ready = () => {
                  v.removeEventListener('canplaythrough', ready);
                  
                  video.pause();
                  var i = setInterval(function() {
                     if (v.readyState > 3) {
                        clearInterval(i);
                        video.currentTime = 0;
                        callback();
                     }
                  }, 50);
               };
               v.addEventListener('canplaythrough', ready, false);
               v.play();
            };

            preloadVideo2(video2, startScrollAnimation2);
            startScrollAnimation2();
      
         };
      });     

   });
})(jQuery, this);