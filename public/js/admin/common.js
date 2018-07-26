$(function() {
	//打开下拉多选
	$('.multiple-select .select-input').on('click', function() {
		$(this).siblings('.select-list').show();
	});
	
	//下拉多选确定按钮
	$('.multiple-select .btn').on('click', function() {
		var name = $(this).attr('data-input-name');
		var ids = '';
		var str = '';
		
		$('input[name="' + name + '"]:checked').each(function() {
			ids += $(this).val() + ',';
			
			if( $(this).attr('data-str') != undefined ) {
				str += $(this).attr('data-str') + '，';
			}
		});
		
		if(ids != '')
			ids = ids.substr(0, ids.length - 1);  //截掉最后一个字符
		
		if(str != '') 
			str = str.substr(0, str.length - 1);  //截掉最后一个字符
		
		$(this).parents('.multiple-select').find('.select-input').text(str);
		$(this).siblings('input[type=hidden]').val(ids);
		$(this).parents('.select-list').hide();
	});
});



//判断必选项是否都填写
function checkNull() {
	$(".error-null").hide();
	var flag = true;
	
	$(".required-item").each(function() {
	 	if( $(this).val() == "" ) {
	 		$(this).parent("div").siblings("div").children(".error-null").show();
	 		flag = false;
	 		return false;
	 	}
	});
	
	return flag;
}

//判断手机格式是否正确
function checkPhoneFormat() {
	if($("#phone").val() != "") {
		var reg = /^(1\d{10})|\d{7,8}$/;
		if( !reg.test($("#phone").val()) ) {
			$(".error-phone-format").show();
			return false;
       } else {
       		return true;
       }
	}
}

//判断邮箱格式是否正确
function checkEmailFormat() {
	if($("#email").val() != "") {
		var reg = /^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
		if( !reg.test($("#email").val()) ) {
			$(".error-email-format").show();
			return false;
		} else {
			return true;
		}
	} else {
		return true;
	}
}

//判断是否为json对象
function isJson(obj) {
	var isjson = typeof(obj) == "object" && Object.prototype.toString.call(obj).toLowerCase() == "[object array]";    
	return isjson;
}

//判断是否为string
function isString(str) {
	var isstring = Object.prototype.toString.call(str).toLowerCase() === "[object string]";
	return isstring;
}

//在.panel-body开始处输出错误提示信息提示
function alertError(text) {
	var div = "<div class='alert alert-danger alert-error'>" + text + "</div>";
	$(".panel-body").prepend(div);
}

//清除错误信息提示
function clearAlert() {
	if($(".alert-error").length > 0)
		$(".alert-error").remove();
}





