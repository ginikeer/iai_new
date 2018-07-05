var flag = 0; //记录tab标签搜索前的位置，默认在第一个标签
$(document).ready(function(){
	
	//pc端切换产品列表信息
	$('.products-lists-tab').find('dd').each(function(n){
		$(this).click(function(){
			$(this).addClass('active').siblings('dd').removeClass('active');
			getProductByCategory($(this).attr('data-alias'));
		});
	});
	
	$(window).resize(function(){
		sameHeight($('.products-items').find('.row').find('.items-content .items-content-text'));
		
		if($(window).width()>750){
			$('.tab-list-item').eq(0).css({'margin-left':'0'});
		}else{
			if($('.search-item').hasClass('active')){
				$('.tab-list-item').eq(0).css({'margin-left':'-28%'});
			}else{
				$('.tab-list-item').eq(0).css({'margin-left':'0'});
			}
		}
	});
	
//	sp端切换产品列表信息
	$('.products-lists-tab-sp').find('dd').each(function(n){
		$(this).click(function(){
			if($(this).hasClass('is-open') || $(this).hasClass('has-data')) {
				$(this).toggleClass('is-open');
				$(this).find('ul').slideToggle();
			} else {
				getProductByCategorySp($(this), $(this).attr('data-alias'));
			}
		});
	});
	
	$(".products-lists-tab-sp dd ul").click(function(event){
		event.stopPropagation();
	});
	
	//切换产品tab
	$('.tab-list-item').each(function(n){
		$(this).click(function(){
			flag = n;
			$('.search-item').width(52).removeClass('transition');
			$('.search-item p').width(52);
			$('.search-item input').width(0);
			$('.tab-list-item').eq(0).css({'margin-left':'0'});
			$(this).addClass('active').siblings().removeClass('active');
			$(this).parents('.products-tab').siblings('.products-contents').find('.products-tab-item').eq(n).show().siblings('.products-tab-item').hide();
			sameHeight($('.products-items').eq(0).find('.items-content .items-content-text'));
//			$('.products-items').eq(0).find('.row').masonry({
//			    itemSelector : '.col-lg-3',
//			    columnWidth : 0
//		  	});
		});
	});
	
//	搜索切换
	$('.search-item').find('i').click(function(){
		if($(this).parents('.search-item').hasClass('active')) {
			$('.products-tab-item').hide();
			$('.search-products').show();
			getProductBySearch($('#keyword').val());
		}
		
		$(this).parents('.search-item').addClass('active').siblings().removeClass('active');
		if($(window).width() < 750 ){
			$('.search-item').width($('.tab-list-item').eq(0).width()*2 + 52 + 18 ).addClass('transition');
			$('.search-item p').width($('.tab-list-item').eq(0).width()*2 + 52 + 18 );
			$('.search-item input').width($('.tab-list-item').eq(0).width()*2 - 24 - 52 + 18);
		}else{
			$('.search-item').width($('.tab-list-item').eq(0).width() + 52 + 6 ).addClass('transition');
			$('.search-item p').width($('.tab-list-item').eq(0).width() + 52 + 6 );
			$('.search-item input').width($('.tab-list-item').eq(0).width()-24 - 52 + 6);
		}
		
	});
	
	$('.search-item').find('span').click(function(){
		$('.tab-list-item').eq(flag).click();
	});
	
	$('.new-product-item').height($('.new-product-item').width);
	
	
//	产品详细页面
	sameHeight($('.case_text'));
	sameHeight($('.related-content'));
	
	$('.tab-item').each(function(n){
		$(this).click(function(){
			if($(window).width()>750){
				if(n==0){
					$(window).scrollTop($('#product-introduce').offset().top - $('#header').height());
				}
				if(n==1){
					$(window).scrollTop($('#product-case').offset().top - $('#header').height());
				}
				if(n==2){
					$(window).scrollTop($('#related-products').offset().top - $('#header').height());
				}
			}else{
				if(n==0){
					$(window).scrollTop($('#product-introduce').offset().top);
				}
				if(n==1){
					$(window).scrollTop($('#product-case').offset().top);
				}
				if(n==2){
					$(window).scrollTop($('#related-products').offset().top);
				}
			}
		});
	});
	
	var Request = new Object();
	Request = GetRequest();
	var param = Request['n'];
	if(param == 'new'){
		$('.tab-list-item').eq(0).click();
	}else{
		$('.tab-list-item').eq(1).click();
	}
});

//ajax根据分类获取产品列表
function getProductByCategory(alias) {
	$('.product-list .row').html('');
	$('.product-list .loading').show();
	
	dataFromAjaxJson($('#url-products-by-category').val(), {category: alias}, function(data) {
		$('#tmpl-product-list').tmpl(data).appendTo('.product-list .row');
		sameHeight($('.product-list .row .items-content .items-content-text'));
		$('.product-list .loading').hide();
	});
}

//ajax根据分类获取手机产品列表
function getProductByCategorySp(dd, alias) {
	var $ul = dd.find('ul');
	dd.addClass('wating');
	
	dataFromAjaxJson($('#url-products-by-category').val(), {category: alias}, function(data) {
		if(data == "") {
			$('<li><a><span class="">暂无数据</span></a></li>').appendTo($ul);
		} else {
			$('#tmpl-sp-product-list').tmpl(data).appendTo($ul);
		}
		dd.removeClass('wating').toggleClass('is-open').addClass('has-data');
		$ul.slideToggle();
	});
}

//ajax根据搜索内容获取产品列表
function getProductBySearch(keyword) {
	$target = $('.search-products .products-items .row');
	$target.html('');
	$('.search-products .loading').show();
	
	dataFromAjaxJson($('#url-products-by-search').val(), {keyword: keyword}, function(data) {
		if(data == "") {
			$('<p>暂无数据</p>').appendTo($target);
		} else {
			$('#tmpl-product-search').tmpl(data).appendTo($target);
			sameHeight($target.find('.items-content .items-content-text'));
		}
		$('.search-products .loading').hide();
	});
}


function GetRequest() {
    var url = location.search; //获取url中"?"符后的字串
    var theRequest = new Object();
    if (url.indexOf("?") != -1) {
        var str = url.substr(1);
        strs = str.split("&");
        for(var i = 0; i < strs.length; i ++) {
            theRequest[strs[i].split("=")[0]] = unescape(strs[i].split("=")[1]);
        }
    }
    return theRequest;
}
