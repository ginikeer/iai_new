$(window).load(function () {

	var $container = $('#gallery-content-center');
	    
	$container.isotope({itemSelector : '.all'});
		
	$("#filter-landscape").click(function() {
		$container.isotope({ filter: '.landscape' });
	});
	$("#filter-aa").click(function() {
		$container.isotope({ filter: '.aa' });
	});

});