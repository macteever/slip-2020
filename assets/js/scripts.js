(function ($, root, undefined) {
	$(document).ready(function(){

		// SUBMENU COLLECTIONS
		$( ".submenu-collections" ).hover(
         function() {
            $(".main-submenu").removeClass( "submenu-develop" );
            $(".main-submenu-collections").addClass( "submenu-develop" );
         }
      );
      // SUBMENU COUPES 
      $( ".submenu-coupes" ).hover(
         function() {
            $(".main-submenu").removeClass( "submenu-develop" );
            $(".main-submenu-coupes").addClass( "submenu-develop" );
         }
      );
      // HIDE SUBMENUS
      $('header').mouseleave(function() {
         $(".main-submenu").removeClass( "submenu-develop" );
      });



		// SPLASH SCREEN IF NEW USER

		if ($.cookie('Cookies-acceptation')) {
			$('body').addClass('cookies-accepted');
		}

		$("#cookieButton").click(function() {
			$.cookie('Cookies-acceptation', 'Les cookies ont été acceptés', { expires: 7 });
			$(".cookie-notif").slideToggle(500);
			$('body').addClass('cookies-accepted');
		});
	
		// ANIMATION SEARCH BAR 

		var triggerSearch = $(".btn-search");

		$(triggerSearch).click(function(){
			$(".large-menu-rotate").toggleClass('menu-rotate');
		});

		$(function() { // START REPSONSVIE < 420
			if( $(window).width() < 420 ) {	
			
			$(triggerSearch).click(function(){
				$(".container-logo-menu").toggleClass('logo-rotate');
			});

			}
		});

 		// APPARITION
			var delay = 0;
			$('.apparition-2').each(function () {
					var $li = $(this);
					setTimeout(function () {
							$li.addClass('animation-fade-in');
					}, delay += 200);
			});

			var delay1 = 0;
			$('.apparition-3').each(function () {
					var $li = $(this);
					setTimeout(function () {
							$li.addClass('animation-fade-up');
					}, delay += 150);
			});

    	// MENU BURGER
      // Object variables for event handlers
      var triggers = ({
          menuBtn : $('#menu-btn')
      });

      triggers.menuBtn.click(function() {
        $("body").toggleClass("responsive");
        $(".nav-mobile").slideToggle("slow");
        $(this).toggleClass('open');
        $(this).find("button").toggleClass('menu-open');

		  });
		  // ADD class anim with Delay
			$('#menu-btn').click(function() {
            if ( $('body').hasClass( "responsive" ) ) {
                $('.nav-mobile li').removeClass('animation-fade-out')
                var delay = 0;
                 $('.nav-mobile li').each(function() {
                   var $li = $(this);
                   setTimeout(function() {
                     $li.addClass('animation-fade-up');
                   }, delay+=100); // delay 100 ms
                 });
            }
            else {
                setTimeout(function() {
                    $('.nav-mobile li').removeClass('animation-fade-up');
                }, 800);
            }
		  });
		  
		 
	});
})(jQuery, this);
