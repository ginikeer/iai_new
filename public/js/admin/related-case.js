$(function() {
	
	$('#case-category').on('change', function() {
		var _id = $(this).val();
		$('.related-case').hide();
		$('.related-case-' + _id).show();
	});
});
