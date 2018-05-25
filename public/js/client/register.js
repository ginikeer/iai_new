var emailreg = /^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
var mobilereg = /^(1\d{10})|\d{7,8}$/;

$(function(){
	$('.register-choose-wraper input[type="radio"]').on('change', function() {
		var _m = $(this).val();
		$(this).parents('label').addClass('active').siblings().removeClass('active');
		$('.register-method').addClass('hide');
		$('.' + _m).removeClass('hide');
	});
	
	/*--- 手机注册 ---*/
	//发送验证码
	$('.send-vcode-btn').on('click', function() {
		var _mobile = $('#regist-mobile').val();
		
		if( !checkMobile(_mobile) ) return false;
		
		settime($(this));
		
		$.ajax({
			type: "post",
			url: $("#url-send-vcode").val(),
			headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') },
			data: {mobile: _mobile},
			dataType: "json",
			success: function(result) {
				if(result.Code != 'OK') {
					$('#send-error-text').show();
					$('#send-error-text .text-red').text(result.Message);
//					alert(result.Message);
				}else{
					$('#send-error-text').hide();
					$('#send-error-text .text-red').text('');
				}
			}
		});
	});
	
	//手机认证
	$('#reg-mobile-btn').on('click', function() {
		var _mobile = $('#regist-mobile').val();
		var _vcode = $('#regist-vcode').val();
		
		if( _vcode == "" ) {
			$('#vcode-error-text').show();
			return false;
		}
		if( !checkMobile(_mobile) ) return false;
		
		$.ajax({
			type: "post",
			url: $("#url-check-mobile").val(),
			headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') },
			data: {mobile: _mobile, vcode: _vcode},
			dataType: "json",
			success: function(result) {
				if(result.code > 0) {
					window.location.href = result.msg;
					$('#send-error-text').hide();
					$('#send-error-text .text-red').text('');
				} else {
					$('#send-error-text').show();
					$('#send-error-text .text-red').text(result.msg);
//					alert(result.msg);
				}
			}
		});
		
	});
	
	/*--- 邮箱注册 ---*/
	$('#regist-email').change(function() {
		if(!emailreg.test($(this).val())){
			$('#email-error-text').show();
		}else{
			$('#email-error-text').hide();
		}
	});
	
	/*--- STEP1 ---*/
	$('#reg-email-btn').click(function() {
		var _email = $('#regist-email').val();
		
		if(!emailreg.test(_email)){
			$('#email-error-text').show();
			return;
		}else{
			$.ajax({
				type: "post",
				url: $("#url-check-email").val(),
				headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') },
				data: {email: _email},
				dataType: "text",
				success: function(result) {
					if(result == "ok") {
						$('.email-text').text(_email);
						$('.tab1').hide();
						$('.tab2').show();
					} else {
						$('#email-error-text p').text(result);
						$('#email-error-text').show();
					}
				}
			});
		}
	});
	
	/*--- STEP2 ---*/
	$('#next-btn').click(function() {
		if( !checkNullAll() ) 
			return false;
			
		if( !checkPwdLength($('#pwd').val(), '.error-pwd-length') )
			return false;
		
		if( !checkPwdSame($('#pwd').val(), $('#pwd_again').val(), '.error-not-same') )
			return false;
			
		if( !checkTelFormat($('#tel').val(), '.error-tel-format') )
			return false;
			
		
		$('.info-read').prop("readonly",true);
		$('.info-btn').hide();
		$('.check-btn').show();
		
		$('#back-btn').click(function(){
			$('.info-read').prop("readonly",false);
			$('.info-btn').show();
			$('.check-btn').hide();
		});
		
		$('#regist-check-btn').click(function(){
			$('#form-register').submit();
		});
	});
});

function checkMobile(_mobile) {
	if( _mobile == "" ) {
		$('#mobile-error-text').show();
		return false;
	}
	
	if( !mobilereg.test(_mobile) ) {
		$('#mobile-error-text').show();
		return false;
	}
	
	return true;
}


var countdown=60; 
function settime(obj) { //发送验证码倒计时
    if (countdown == 0) { 
        obj.attr('disabled',false); 
        obj.text("发送验证码");
        obj.removeClass("disable");
        countdown = 60; 
        return;
    } else { 
        obj.attr('disabled',true);
        obj.text( countdown + "s");
        obj.addClass("disable");
        countdown--; 
    } 
	setTimeout(function() { 
	    settime(obj) }
	,1000) 
}