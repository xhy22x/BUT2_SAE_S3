;(function ($, root) {
	'use strict';
	
    $(window).scroll(function () {
		var header = document.getElementById("header");
		var sticky = header.offsetTop;

		  if (window.pageYOffset > sticky) {
			header.classList.add("fixed-header");
		  } else {
			header.classList.remove("fixed-header");
		  }

    });
	
		//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ SLIDE PARTENAIRES
		$('.section-logos .wp-block-gallery').slick({
		  dots: false,
		  infinite: true,
		  speed: 500,
			autoplay: true,
			autoplaySpeed: 2000,
		  slidesToShow: 6,
		  slidesToScroll: 6,
		  responsive: [
			{
			  breakpoint: 1024,
			  settings: {
				slidesToShow: 3,
				slidesToScroll: 3,
				infinite: true
			  }
			},
			{
			  breakpoint: 600,
			  settings: {
				slidesToShow: 2,
				slidesToScroll: 2
			  }
			},
			{
			  breakpoint: 480,
			  settings: {
				slidesToShow: 2,
				slidesToScroll: 2
			  }
			}
		  ]
		});
	
	//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ EVENTS — DOCUMENT.
	$(document).ready(function() {

		
		// Variables.
		let
			$body = $('body'),
			$header = $('.header'),
			$nav = $('.nav'),
			relayouting = false,
			device,
			deviceMedia = function(e) {
				relayouting = true;
				// Size.
				if (typeof($('.device').css('content')) !== 'undefined')
					device = $('.device').css('content').replace(/['"]+/g,'');
				else
					device = ($(window).width() <= 737) ? 'phone' : 'monitor';
				// Touch.
				$body.removeClass('touchevents no-touchevents');
				$body.addClass((!(('ontouchstart' in window) || window.DocumentTouch && document instanceof DocumentTouch) ? 'no-' : '') + 'touchevents');
				//
				setTimeout(function() { relayouting = false; }, 100);
			};
		// Device.
		deviceMedia();

		/*~~~~~~~~~~~~~~~~~~ SEARCH */
		$('#headerSearchButton').add($('#headerSearchReset')).on('click.toggle', function() {
            $body.addClass('search-animate');
            $body.toggleClass('search-open');
        });
        $('.nav').one('transitionend', function() {
            $body.removeClass('search-animate');
        });
		
		
		/*~~~~~~~~~~~~~~~~~~ NAVIGATION — MOBILE */
		$('.burger').on('click.toggle', function(e) {
			$body.addClass('nav-animate');
			$body.toggleClass('nav-open');
			$("li.current-menu-item").parent().addClass("collapsed");
		});
		$nav.on('transitionend', function(e) {
			$body.removeClass('nav-animate');
		});
		
		/*~~~~~~~~~~~~~~~~~ NAVIGATION — DESKTOP */
		$('.sub-menu').prev('a').each(function(i) {
			let $this = $(this);
			$this.on({
				'click': function(e) { 
					$this.next('.sub-menu').toggleClass('collapsed');
					$this.next('.menu-item ul').parent().toggleClass('active-parent');
				},
				'mouseenter': function(e) { $body.addClass('nav-open'); }
			});
			$(this).closest('.sub-menu').find('.current_page_item').addClass("collapsed");
			
			$('.sub-menu>li>a').on('click', function(){
				$body.removeClass('nav-open');
			});
			
		});
		let navClose = function(e) {
			!$header[0].contains(e.target) && /monitor/.test(device) && $body.hasClass('nav-open') && $body.removeClass('nav-open');
		};
		document.addEventListener('click', navClose, true);
		document.addEventListener('scroll', navClose, true);
		

		//$('.toast').toast('show');

		//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ EVENTS — WINDOW.
		$(window).on({
			resize: window.throttle(
				function(e) {
					if (!relayouting) {
						deviceMedia(e);
					}
				}, 50, {leading: false, trailing:true}
			),
			orientationchange: function(e) {
				if (!relayouting && typeof device!=='undefined' && !/monitor/.test(device)) {
					setTimeout(function() {
						deviceMedia(e);
					}, 5);
				}
			}
		});

	});

	//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ WINDOW — THROTTLE.
	window.throttle = function(func, wait, options) {
		let context, args, result;
		let timeout = null;
		let previous = 0;
		if (!options) options = {};
		let later = function() {
			previous = options.leading === false ? 0 : window.now();
			timeout = null;
			result = func.apply(context, args);
			if (!timeout) context = args = null;
		};
		return function() {
			let now = window.now();
			if (!previous && options.leading === false) previous = now;
			let remaining = wait - (now - previous);
			context = this;
			args = arguments;
			if (remaining <= 0 || remaining > wait) {
				if (timeout) {
					clearTimeout(timeout);
					timeout = null;
				}
				previous = now;
				result = func.apply(context, args);
				if (!timeout) context = args = null;
			} else if (!timeout && options.trailing !== false) {
				timeout = setTimeout(later, remaining);
			}
			return result;
		};
	};

	//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ WINDOW — DATE NOW.
	window.now = Date.now || function() {
		return new Date().getTime();
	};

	
})(jQuery, this);