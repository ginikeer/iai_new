$(function(){
	
	sameHeight($('.col-lg-3 .case_text'));
	
	$('.case_nav_blocks li').click(function(){
		$(this).addClass('active').siblings().removeClass('active');
	})
	
	//	sp端切换产品列表信息
	$('.case-lists-tab').find('dd').each(function(n){
		$(this).click(function(){
			$(this).toggleClass('is-open');
			$(this).find('ul').slideToggle();
		});
	});
	
	$(".case-lists-tab dd ul").click(function(event){
		event.stopPropagation();
	});
});

