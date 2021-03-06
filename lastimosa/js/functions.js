/**
 * Theme functions file
 *
 * Contains handlers for navigation, accessibility, header sizing
 * footer widgets and Featured Content slider
 *
 */

/**
 * Mean Menu
 */
( function( $ ) {
	var body    = $( 'body' ),
		_window = $( window );

	// Enable menu toggle for small screens.
	( function() {
		var nav = $( '#primary-navigation, #secondary-navigation' ), button, menu;
		if ( ! nav ) {
			return;
		}

		button = nav.find( '.menu-toggle' );
		if ( ! button ) {
			return;
		}

		// Hide button if menu is missing or empty.
		menu = nav.find( '.nav-menu' );
		if ( ! menu || ! menu.children().length ) {
			button.hide();
			return;
		}

		$( '.menu-toggle' ).on( 'click.fw_theme', function() {
			nav.toggleClass( 'toggled-on' );
		} );
	} )();
	
	if($(window).width() < 768)
	{
		 $('.primary-navigation ul').append($('.secondary-navigation ul li')
			 .unwrap()).parent()
			$('.secondary-navigation').remove();
	}

	/*
	 * Makes "skip to content" link work correctly in IE9 and Chrome for better
	 * accessibility.
	 *
	 * @link http://www.nczonline.net/blog/2013/01/15/fixing-skip-to-content-links/
	 */
	_window.on( 'hashchange.fw_theme', function() {
		var element = document.getElementById( location.hash.substring( 1 ) );

		if ( element ) {
			if ( ! /^(?:a|select|input|button|textarea)$/i.test( element.tagName ) ) {
				element.tabIndex = -1;
			}

			element.focus();

			// Repositions the window on jump-to-anchor to account for header height.
			window.scrollBy( 0, -80 );
		}
	} );

	$( function() {
		// Search toggle.
		$( '.search-toggle' ).on( 'click.fw_theme', function( event ) {
			var that    = $( this ),
				wrapper = $( '.search-box-wrapper' );

			that.toggleClass( 'active' );
			wrapper.toggleClass( 'hide' );

			if ( that.is( '.active' ) || $( '.search-toggle .screen-reader-text' )[0] === event.target ) {
				wrapper.find( '.search-field' ).focus();
			}
		} );

		/*
		 * Fixed header for large screen.
		 * If the header becomes more than 48px tall, unfix the header.
		 *
		 * The callback on the scroll event is only added if there is a header
		 * image and we are not on mobile.
		 */
		if ( _window.width() > 781 ) {
			var mastheadHeight = $( '#masthead' ).height(),
				toolbarOffset, mastheadOffset;

			if ( mastheadHeight > 48 ) {
				body.removeClass( 'masthead-fixed' );
			}

			if ( body.is( '.header-image' ) ) {
				toolbarOffset  = body.is( '.admin-bar' ) ? $( '#wpadminbar' ).height() : 0;
				mastheadOffset = $( '#masthead' ).offset().top - toolbarOffset;

				_window.on( 'scroll.fw_theme', function() {
					if ( ( window.scrollY > mastheadOffset ) && ( mastheadHeight < 49 ) ) {
						body.addClass( 'masthead-fixed' );
					} else {
						body.removeClass( 'masthead-fixed' );
					}
				} );
			}
		}

		// Focus styles for menus.
		$( '.primary-navigation, .secondary-navigation' ).find( 'a' ).on( 'focus.fw_theme blur.fw_theme', function() {
			$( this ).parents().toggleClass( 'focus' );
		} );
	} );

	_window.load( function() {
		// Arrange footer widgets vertically.
		if ( $.isFunction( $.fn.masonry ) ) {
			$( '#footer-sidebar' ).masonry( {
				itemSelector: '.widget',
				columnWidth: function( containerWidth ) {
					return containerWidth / 4;
				},
				gutterWidth: 0,
				isResizable: true,
				isRTL: $( 'body' ).is( '.rtl' )
			} );
		}

		// Initialize Featured Content slider.
		if ( body.is( '.slider' ) ) {
			$( '.featured-content' ).featuredslider( {
				selector: '.featured-content-inner > article',
				controlsContainer: '.featured-content'
			} );
		}
	} );
} )( jQuery );



/**
 * Mega Menu
 */
/* jQuery(function ($) {

	function hoverIn() {
		var a = $(this);
		var nav = a.closest('.nav-menu');
		var mega = a.find('.mega-menu');
		var offset = rightSide(nav) - leftSide(a);
		mega.width(Math.min(rightSide(nav), columns(mega)*325));
		mega.css('left', Math.min(0, offset - mega.width()));
	}

	function hoverOut() {
	}

	function columns(mega) {
		var columns = 0;
		mega.children('.mega-menu-row').each(function () {
			columns = Math.max(columns, $(this).children('.mega-menu-col').length);
		});
		return columns;
	}

	function leftSide(elem) {
		return elem.offset().left;
	}

	function rightSide(elem) {
		return elem.offset().left + elem.width();
	}

	$('.primary-navigation .menu-item-has-mega-menu').hover(hoverIn, hoverOut);

}); */

/**
 * Mega Menu
 */
jQuery(function ($) {

		function megaMenu(megaMenuSelector) {
				$(megaMenuSelector).each(function () {
						var a = $(this);
						var nav = a.closest('.container');
						var mega = a.find('.mega-menu');
						var offset = rightSide(nav) - leftSide(a);
						var col_width = 280 + 2; // 2px border left
						var col_width2 = a.closest('.container').width() / columns(mega);

						if (columns(mega) < 4) {
								mega.width(Math.min(rightSide(nav), columns(mega) * col_width));
								mega.children('.mega-menu-row').each(function () {
										$(this).children('.mega-menu-col').css('width', col_width);
								});
						} else {
								mega.width(Math.min(rightSide(nav), columns(mega) * col_width2));
								mega.children('.mega-menu-row').each(function () {
										$(this).children('.mega-menu-col').css('width', col_width2, 'important');
								});
						}
						mega.css('left', (Math.min(0, offset - mega.width())) + 15);
				});
		}

		megaMenu('.site-navigation .menu-item-has-mega-menu');

		$('.header .menu-item-has-mega-menu').hover(function () {
				$(this).find('.mega-menu').css('display', 'block');
		}, function () {
				$(this).find('.mega-menu').css('display', 'none');
		});

		$(window).on('resize', function () {
				megaMenu('.site-navigation .menu-item-has-mega-menu');
		})
	
		function leftSide(elem) {
				return elem.offset().left;
		}

		function rightSide(elem) {
				return elem.offset().left + elem.width();
		}

		function columns(mega) {
				var columns = 0;
				mega.children('.mega-menu-row').each(function () {
						columns = Math.max(columns, $(this).children('.mega-menu-col').length);
				});
				return columns;
		}
});


/**
 * Back to top button
 */
jQuery(function ($) {
	$(document).ready(function(){
		// hide #back-top first
		$("#scroll-top").hide();
		// fade in #back-top
		$(function () {
			$(window).scroll(function () {
				if ($(this).scrollTop() > 100) {
					$("#scroll-top").fadeIn();
				} else {
					$("#scroll-top").fadeOut();
				}
			});
			// scroll body to 0px on click
			$("#scroll-top button").click(function () {
				$("body,html").animate({
					scrollTop: 0
				}, 800);
			});
		});
	});
});


// Rating Stars
jQuery(document).ready(function(){
	var $ = jQuery;
	//Rating stars
	jQuery('.wrap-rating.in-post .fa.fa-star').hover(
		function() {
			jQuery(this).addClass('over').prevAll().addClass('over');
		}
		, function() {
			jQuery(this).removeClass('over').prevAll().removeClass('over');
		}
	);

	jQuery('.wrap-rating.in-post .fa.fa-star').on('click', function() {
		var $this = jQuery(this),
			value = $this.data('vote');

		$this.parent().children('.fa.fa-star').removeClass('voted');
		$this.addClass('voted').prevAll().addClass('voted');
		$this.parents('.wrap-rating.in-post').find('input[type="hidden"]').val(value);
	});

	//Rating qTip
	jQuery('.wrap-rating.header.qtip-rating').each(function() { // Notice the .each() loop, discussed below
		jQuery(this).qtip({
			content: {
				text: jQuery(this).next('div') // Use the "div" element next to this for the content
			},
			style: {
				classes: 'rating-tip'
			},
			position: {
				my: 'top center',
				at: 'bottom center'
			}
		});
	});

	//Custom CheckBox & Select
	// Styled Select, CheckBox, RadioBox
	if(jQuery('.select-styled select').length > 0){
		jQuery('.select-styled select').selectize({
			create: true,
			sortField: 'text'
		});
	}
	if (jQuery(".input-styled").length) {
		jQuery(".input-styled input").customInput();
	}

	//Date Picker
	//Date picker for Bookings Form
	if(jQuery('.datepicker').length > 0){
		jQuery('.datepicker').datetimepicker({
			timepicker:false,
			format:'d.m.Y',
			closeOnDateSelect:true,
			minDate:0
		});
	}

	//Height tr end align radio
	jQuery('.field-table table tr').each(function(){
		var height_tr = $(this).outerHeight();
		$(this).find('.custom-radio').css('margin-top', height_tr/2-17);
	});
});

function calculate_columns() {
	var counter = 0;
	var widths = {
		'1-1' : 1,
		'3-4' : 0.75,
		'2-3' : 0.6,
		'1-2' : 0.5,
		'1-3' : 0.3,
		'1-4' : 0.25,
		'1-5' : 0.2
	};

	var columns = jQuery('*>*[class*="column-"]');
	columns.first().addClass('first');

	columns.each(function () {
		var klass = jQuery(this).attr('class').match(/column-[1-9]-[1-9]/g);
		var width = 0;

		if (klass != null) {
			klass = klass.shift().replace('column-', '');

			if (widths.hasOwnProperty(klass)) {
				width = widths[klass];
			}
		}

		if ( ( counter + width ) > 1) {
			jQuery(this).addClass('first');
			counter = 0;
		}

		counter += width;
	});
}
calculate_columns();

/*$(document).ready(function(){
    $(window).bind('scroll', function() {
        var navHeight = $("#topbar").height();
        ($(window).scrollTop() > navHeight) ? $('nav').addClass('goToTop') : $('nav').removeClass('goToTop');
    });
}); */

/*!
 * Dropdownhover
 */
/*$(function(){
	$(".dropdown").hover(            
		function() {
			$('.dropdown-menu', this).stop( true, true ).fadeIn("fast");
			$(this).toggleClass('open');
			$('b', this).toggleClass("caret caret-up");                
		},
		function() {
			$('.dropdown-menu', this).stop( true, true ).fadeOut("fast");
			$(this).toggleClass('open');
			$('b', this).toggleClass("caret caret-up");                
		});
}); */

jQuery(function ($) {
	$(document).on('click', 'a[href^="#"]', function (event) {
		event.preventDefault();

		$('html, body').animate({
			scrollTop: $($.attr(this, 'href')).offset().top
		}, 800);
	});
});

/*
 * Replace all SVG images with inline SVG
 */
/*jQuery(function ($) {
    $('img.svg').each(function(){
        var $img = $(this);
        var imgID = $img.attr('id');
        var imgClass = $img.attr('class');
        var imgURL = $img.attr('src');
    
        $.get(imgURL, function(data) {
            // Get the SVG tag, ignore the rest
            var $svg = $(data).find('svg');
    
            // Add replaced image's ID to the new SVG
            if(typeof imgID !== 'undefined') {
                $svg = $svg.attr('id', imgID);
            }
            // Add replaced image's classes to the new SVG
            if(typeof imgClass !== 'undefined') {
                $svg = $svg.attr('class', imgClass+' replaced-svg');
            }
    
            // Remove any invalid XML tags as per http://validator.w3.org
            $svg = $svg.removeAttr('xmlns:a');
            
            // Check if the viewport is set, else we gonna set it if we can.
            if(!$svg.attr('viewBox') && $svg.attr('height') && $svg.attr('width')) {
                $svg.attr('viewBox', '0 0 ' + $svg.attr('height') + ' ' + $svg.attr('width'))
            }
    
            // Replace image with new SVG
            $img.replaceWith($svg);
    
        }, 'xml');
    
    });
}); */