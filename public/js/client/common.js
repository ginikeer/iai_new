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
	
	//	公司介绍子菜单
	subMenu($('.company_info'));
	//	产品介绍子菜单
	subMenu($('.product_info'));
	
//	下载子菜单
	subMenu($('.download_info'));
	
	
	$('.footer_nav_list>li').click(function(){
		$(this).toggleClass('active');
	});
	
	$("img:last").hide();
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

//没有子元素
function sameHeightOnly(obj){
	var heiList = [];
	$(obj).each(function(){
		var hei = 0;
		hei += parseInt($(this).height());
		heiList.push(hei);
	});
	
	var maxHei = Math.max.apply(null, heiList);
	$(obj).each(function(){
		$(this).height(maxHei);
	});
}

//判断所有必选项是否都填写
function checkNullAll() {
	$(".error-null").hide();
	var flag = true;
	
	$(".required-item").each(function() {
	 	if( $(this).val() == "" ) {
	 		$(this).parents('.form-item').next('.error-null').show();
	 		flag = false;
	 	}
	});
	
	return flag;
}

//判断手机格式是否正确
function checkTelFormat(tel, _error) {
	$(_error).hide();
	
	if(tel != "") {
		var regPhone = /^(1\d{10})|\d{7,8}$/;
		var regTel = /^(([0\+]\d{2,3}-)?(0\d{2,3})-)(\d{7,8})(-(\d{3,}))?$/;
		
		if( !regPhone.test(tel) && !regTel.test(tel)) {
			$(_error).show();
			return false;
        } else {
       		return true;
        }
	} else {
		return false;
	}
}

//判断密码是否至少4位
function checkPwdLength(pwd, _error) {
	$(_error).hide();
	
	if(pwd.length < 4) {
		$(_error).show();
		return false;
	} else {
		return true;
	}
}

//判断两次输入的密码是否一致
function checkPwdSame(pwd, again, _error) {
	$(_error).hide();
	
	if(pwd != again){
		$(_error).show();
		return false;
	} else {
		return true;
	}
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

