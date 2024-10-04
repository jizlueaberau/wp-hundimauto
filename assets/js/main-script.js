(function($) {
	"use strict";

	// submenu dropdown toggler
	if ($('.main-menu li.menu-item-has-children ul').length) {
		$('.main-menu li.menu-item-has-children').append(
			'<div class="dropdown-btn"><i class="flaticon flaticon-arrow-down-sign-to-navigate"></i></div>'
		);

		// disable dropdown parent link
		$('.main-menu .navigation li.menu-item-has-children > a').on('click', function(e) {
			e.preventDefault();
		});
	}

	// mobile nav
	if ($('.mobile-menu').length) {
		var mobileMenuContent = $('#header .navigation').html();
		$('.mobile-menu .navigation').append(mobileMenuContent);

		// dropdown button
		$('.mobile-menu li.menu-item-has-children .dropdown-btn').on('click', function() {
			$(this).toggleClass('open').prev('ul').slideToggle(500);
		});

		// Menu Toggle Button
		$('.mobile-nav-toggler').on('click', function() {
			$(this).toggleClass('is-active');
			$('body').toggleClass('mobile-menu-visible');
		});
	}

	// sticky navigation scroll listener
	var lastScrollTop = 0; var num = 20;

	$(window).bind('scroll', function() {
		var st = window.pageYOffset || document.documentElement.scrollTop;
		if ($(window).scrollTop() > num) {
			$('#header').addClass('sticky')
		} else {
			$('#header').removeClass('sticky');
		}
		if (st > lastScrollTop && $('#header').hasClass('sticky')) {
			$('#header').removeClass('show');
		} else {
			$('#header').addClass('show');
		}
		lastScrollTop = st <= 0 ? 0 : st;
	});

	// make all animations fadeinup on mobile
	var bp = 992;
	var mobileDelay = 200;
	if ($(window).width() < bp) {
		$('div.os-animation').attr('data-animation','animate__fadeInUp');
		// set delay to 200ms on each element below the fold
		$('div.os-animation').each(function( index ) {
			if ( $(this).offset().top > $(window).height() ) {
				$(this).attr('data-delay', mobileDelay + 'ms');
			}
		});
	}

	// animation css waypoints script
	function onScrollInit(items, trigger) {
		items.each(function() {
			var osElement = $(this),
			    osAnimationClass = osElement.attr('data-animation'),
			    osAnimationDelay = osElement.attr('data-delay');

			osElement.css({
				'-webkit-animation-delay': osAnimationDelay,
				'-moz-animation-delay': osAnimationDelay,
				'animation-delay': osAnimationDelay
			});

			var osTrigger = (trigger) ? trigger : osElement;

			osTrigger.waypoint(function() {
				osElement.addClass('animate__animated').addClass(osAnimationClass);
			}, {
				triggerOnce: true,
				offset: '110%'
			});
		});
	}
	onScrollInit($('.os-animation'));

	// initializing testimonials swiper
	const testimonialCarousel = jQuery ( '#testimonial .swiper' );
	const swiperInstance = testimonialCarousel.data( 'swiper' );

	// vimeo autoplay script
	// https://jsfiddle.net/oxf4dtn3/

	var players = [];
	$('.video-frame').each(function() {
		players.push({
			player: new Vimeo.Player($(this).find("iframe").get(0)),
			top: $(this).position().top,
			status: "paused"
		});
	});

	var viewportHeight = $(window).height();
	$(window).on('scroll', function() {
		var scrollPos = $(window).scrollTop();
		for (var i = 0; i < players.length; i++) {
			var elementFromTop = players[i].top - scrollPos;
			var status = (elementFromTop > 0 && elementFromTop < players[i].top + viewportHeight) ? "play" : "pause";
		}
	});

	// media modal based on bootstrap modal
	// https://codepen.io/JacobLett/pen/xqpEYE
	let media = Array();
	media['type'] = '';
	media['src'] = '';
	media['ratio'] = '';
	media['title'] = '';
	$('[data-bs-target=#mediaModal]').on('click', function() {
		media.type = $(this).data('media-type');
		media.src = $(this).data('media-src');
		media.ratio = $(this).data('media-ratio');
		media.title = $(this).data('media-title');
		return false;
	});
	const mediaModal = document.getElementById( 'mediaModal' );
	if ( mediaModal != null ) {
		mediaModal.addEventListener( 'shown.bs.modal', () => {
			$(mediaModal).find('div.ratio').addClass( 'ratio-' + media.ratio );
			$(mediaModal).find('.modal-header h1').append( media.title );
			if ( media.type == "vimeo" ) {
				$(mediaModal).find('div.ratio').append(
					'<iframe src="https://player.vimeo.com/video/' + media.src + '?' +
					'autoplay=1&amp;loop=1&amp;color=d2ba8b&amp;title=0&amp;byline=0&amp;portrait=0&amp;muted=1&dnt=1" ' +
					'width="640" height="360" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen="" data-ready="true"></iframe>'
				);
			} else if ( media.type == 'image' ) {
				$(mediaModal).find('div.ratio').append(
					'<div class="frame-img" style="background-image: url(\'' +  media.src + '\')";></div>'
				);
			}
		});
		mediaModal.addEventListener( 'hide.bs.modal', () => {
			$(mediaModal).find('div.ratio').removeClass( 'ratio-' + media.ratio );
			$(mediaModal).find('div.ratio').html( '' );
			$(mediaModal).find('.modal-header h1').html( '' );
		});
	}
	
	// debug window
	$(document).ready(function() {
		$('#debug').append('<p>'+
			'w: '+$(window).width()+'px<br>'+
			'h: '+$(window).height()+'px</p>');
	});
})(jQuery);