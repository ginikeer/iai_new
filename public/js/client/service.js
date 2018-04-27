$(function(){
	sameHeightOnly($('.col-lg-2-5 h4'));
	
	//目录申请；
	$('.media .idtab img').click(function(){
		$(this).parents('.media').siblings('.tab-content').slideToggle();
	});
});
