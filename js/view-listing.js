jQuery(document).ready(function() {
	jQuery('view-listing .node').click( function() {
		window.location = jQuery(this).find('.field-name-node-link a').attr('href');
	});
});