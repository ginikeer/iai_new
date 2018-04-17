$(function() {
	
	$('#product-category').on('change', function() {
		var _id = $(this).val();
		$('.related-product').hide();
		$('.related-product-' + _id).show();
	});
});
