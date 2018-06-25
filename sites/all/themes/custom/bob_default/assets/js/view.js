jQuery(document).ready(function() {
	// Variables //
	var $grid = jQuery('.grid');

	$grid.masonry({
		itemSelector: '.views-row',
		gutter: 20,
		horizontalOrder: true
	});
});
