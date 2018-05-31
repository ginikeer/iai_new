$(window).load(function () {

	var $container = $('#gallery-content-center');
	    
	$container.isotope({itemSelector : '.all'});
		
	$("#filter-tag").click(function() {
		var _id = $(this).attr('data-id');
		$container.isotope({ filter: '.tag-' + _id });
	});
});