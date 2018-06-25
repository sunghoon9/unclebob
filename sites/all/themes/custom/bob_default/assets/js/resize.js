jQuery(document).ready(function(e) {
	var window_width = jQuery(window).outerWidth();
	var window_height = jQuery(window).outerHeight();
	var wrapper_offset = jQuery('#wrapper').offset();
	var wrapper_top = wrapper_offset.top;

	var wrapper_height = window_height - wrapper_top;
	var header_height = jQuery('header').outerHeight();
	var footer_height = jQuery('footer').outerHeight();
	var content_height = wrapper_height - (header_height + footer_height);

	function set_layout() {
		window_width = jQuery(window).outerWidth();
		window_height = jQuery(window).outerHeight();

		wrapper_offset = jQuery('#wrapper').offset();
		wrapper_top = wrapper_offset.top;

		wrapper_height = window_height - wrapper_top;
		header_height = jQuery('header').outerHeight();
		footer_height = jQuery('footer').outerHeight();

		jQuery('#wrapper').css({
			'height':wrapper_height
		});

		// jQuery('#main_container').css({
		// 	'height':content_height,
		// 	'padding-top':header_height,
		// 	'padding-bottom':footer_height
		// });

		// jQuery('aside').css({
		// 	'top':header_height,
		// 	'bottom':footer_height
		// });
	}

	jQuery(window).smartresize(function(e) {
		set_layout();
	}).resize();

	// Drupal 관리자메뉴의 trigger 이벤트 리스너 추가 //
	jQuery('#toolbar-bar').find('.trigger').click(function() {
		set_layout();
	});
});
