var emailreg = /^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;

/*--- STEP1 ---*/
$(function(){
	$('#regist-email').change(function(){
		if(!emailreg.test($(this).val())){
			$('#error-text').show();
		}else{
			$('#error-text').hide();
		}
	});
	
	$('#regist-btn').click(function(){
		var _email = $('#regist-email').val();
		
		if(!emailreg.test(_email)){
			$('#error-text').show();
			return;
		}else{
			$.ajax({
				type: "post",
				url: $("#url-check-email").val(),
				headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') },
				data: {email: _email},
	        	cache: false,  
				dataType: "text",
				success: function(result) {
					if(result == "ok") {
						$('.email-text').text(_email);
						$('.tab1').hide();
						$('.tab2').show();
					} else {
						$('#error-text p').text(result);
						$('#error-text').show();
					}
				}
			});
		}
	});
})

/*--- STEP2 ---*/
$(function(){
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