$(function(){
	
	sameHeight($('.col-lg-3 .case_text'));
	sameHeight($('.col-lg-4 .case_text'));
	sameHeight($('.sortNav .sortNavBtn p'));
	
	$(window).resize(function(){
		sameHeight($('.col-lg-3 .case_text'));
		sameHeight($('.col-lg-4 .case_text'));
		sameHeight($('.sortNav .sortNavBtn p'));
	});
	
	$('.right_nav dd').click(function(){
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
	
	$('.sortNav .sortNavBtn').click(function(){
		$(this).find('p').addClass('select').parents('.sortNavBtn').siblings().find('p').removeClass('select');
	})
});

