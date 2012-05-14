(function ($) {
	$(document).ready(function() {
		$('#pagejump').change( function() {
			window.location = $(this).val();
		});
		$('.doc-prev').click( function() {
			$('#pagejump')[0].selectedIndex--;
			$('#pagejump').change();
			return false;
		});
		$('.doc-next').click( function() {
			$('#pagejump')[0].selectedIndex++;
			$('#pagejump').change();
			return false;
		});
	});
})(jQuery);
