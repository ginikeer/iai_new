$(function(){
	sameHeightOnly($('.col-lg-2-5 h4'));
	
	//目录申请；
	$('.media .idtab img').click(function(){
		$(this).parents('.media').siblings('.tab-content').slideToggle();
	});
	
	//使用说明书
	$('#nav-cases>li:not(._search)').click(function(){
		$('.search_result').hide();
		var index = $(this).index();
		$(this).addClass('active').siblings().removeClass('active');
		$('.manual-item:not(.search_result)').eq(index).addClass('show').siblings().removeClass('show');
	});
	
});

