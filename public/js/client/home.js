// JavaScript Document
var _currentPageNum = 0;	

$(function(){
	$('.bxslider').bxSlider({
		mode: 'horizontal',
		auto: true,
		pause: 5000,
		speed: 500,
		pager: true,
		controls: false
	});
	
	
//	设置圆形的高度
	$('#mian_download .col-lg-3').height($('#mian_download .col-lg-3').width()).css('transition','none');
	
	$(window).resize(function(){
		$('#mian_download .col-lg-3').height($('#mian_download .col-lg-3').width()).css('transition','none');
		$('.case-cover-img').height(parseInt($('.case-cover:not(.case-cover-img)').height())+44);
	});
	
	
	
	
//			统一列表高度
	var heightList=[];
//	获取li中被撑开的高度，塞入到数组中
	$('.case-description').each(function(){
		heightList.push($(this).height());
	});
//	获取数组中最大值,赋值给每个li
	var max = Math.max.apply(null, heightList);
	$('.case-description').each(function(){
		$(this).height(max);
	});
	
	
	sameHeight($('.case_text'));
	
//	$('.case-cover-img').height(parseInt($('.case-cover:not(.case-cover-img)').height())+44);
});

window.onload = function() {
	$('.case-cover-img').height(parseInt($('.case-cover:not(.case-cover-img)').height())+44);
}

function sameHeight(obj){
	var heiList = [];
	$(obj).each(function(){
		var hei = 0;
		$(this).children().each(function(){
			hei += $(this).height();
			hei += parseInt($(this).css('padding-top'));
			hei += parseInt($(this).css('padding-bottom'));
		});
		heiList.push(hei);
	});
	
	var maxHei = Math.max.apply(null, heiList);
	$(obj).each(function(){
		$(this).height(maxHei);
	});
}


