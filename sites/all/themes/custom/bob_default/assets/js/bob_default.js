jQuery(document).ready(function() {
	// Random color //
	var color_value = Math.floor((Math.random() * 4)),
	color_classList = [ 'ultra_violet',	'greenery',	'rose_quartz', 'serenity' ];

	var $body = jQuery('body'),
	$main_container = jQuery('#main_container');
	$body.addClass(color_classList[color_value]);

	// Header //
	var $btn_toggle;
	jQuery('#toggler_for_sidebar').find('.btn_toggle').on('click', function(e) {
		btn_toggle = jQuery(this);
		if($btn_toggle.hasClass('closed')) {
			console.log('Open menu');
			$btn_toggle.removeClass('closed');
			$btn_toggle.addClass('opened');
			$main_container.removeClass('closed');
			$main_container.addClass('opened');
		}
		else if($btn_toggle.hasClass('opened')) {
			console.log('Close menu');
			$btn_toggle.removeClass('opened');
			$btn_toggle.addClass('closed');
			$main_container.removeClass('opened');
			$main_container.addClass('closed');
		}
	});
});
