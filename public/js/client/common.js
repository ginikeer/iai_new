$(function() {
	$('.header_menu').click(function(){
		$('.mask').height($('body').height()).show();
		$('.sp_menu .footer_nav_list').show();
		$('.closed_btn').show();
	});
	
	$('.mask').click(function(){
		$('.mask').hide();
		$('.sp_menu .footer_nav_list').hide();
		$('.closed_btn').hide();
	});
	
	$('.closed_btn').click(function(){
		$('.mask').hide();
		$('.sp_menu .footer_nav_list').hide();
		$('.closed_btn').hide();
	});
	
	//	产品介绍子菜单
	subMenu($('.product_info'));
	
//	产品使用案例子菜单
	subMenu($('.download_info'));
	
//	下载子菜单
	subMenu($('.cases_info'));
});
	
function subMenu(obj){
	$(obj).on('mouseover',function(){
		$(obj).siblings('.sub_nav').show();
		$(obj).siblings('.sub_nav').mouseover(function(){  
            $(this).show(); 
        });  
       $(obj).siblings('.sub_nav').mouseout(function(){  
            $(this).hide();
        });  
	});
	$(obj).on('mouseout',function(){
		$(obj).siblings('.sub_nav').hide();
	});
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

function brEscape(str) {
	return str.replace(/<br\/>/g, "\n");
}

function dataFromAjaxJson(_url, _data, _success, _m) {

	if(!_m)	_m = 'POST';

	$.ajax({
		
		url: _url,
		
		headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') },

		type: _m,

		data: _data,

		dataType: "json",

		success: function(res) {
			
			if(res.code == 1) {
				
				_success(res.data);
				
			} else {
				
				console.log(res.data);
				
			}
			
		}

	});

}

