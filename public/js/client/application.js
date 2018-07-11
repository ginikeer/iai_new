$(function(){
	$('input[name="catalog"]').change(function(){
		if($(this).val()=='单品目录'){
			$(this).attr('checked',true);
			$('input[value="综合目录及其他"]').attr('checked',false);
			$('.catalog-item').slideDown();
			$('.catalog-item-2').slideUp();
			checkClear($('.catalog-item-2 input'));
		}else{
			$(this).attr('checked',true);
			$('input[value="单品目录"]').attr('checked',false);
			$('.catalog-item-2').slideDown();
			$('.catalog-item').slideUp();
			checkClear($('.catalog-item input'));
		}
	});
	
	// $('#application-btn').click(function(){
	// 	window.location.href = $('#check-link').val();
	// })
	
	$('#send-btn').click(function(){
		window.location.href = $('#send-link').val();
	})
	
	$('#back-btn').click(function(){
		window.location.href = $('#back-link').val();
	})

	//提交表单
	$('#application-btn').click(function(){
		if($('input[name="catalog1[]"]:checked').size() <= 0 && $('input[name="catalog2[]"]:checked').size() <= 0 ){
			layer.msg('目录选项项必须选择！',{icon:3,anim:6});return false;
		}
		// if($('input[name="q1"]:checked').size()<=0 || 
		// 	$('input[name="q2"]:checked').size()<=0 ||
		// 	$('input[name="q3[]"]:checked').size()<=0 ||
		// 	$('input[name="q4"]:checked').size()<=0 ||
		// 	$('input[name="q5"]:checked').size()<=0 ||
		// 	$('input[name="q6"]').val() == '' ||
		// 	$('input[name="q7"]:checked').size()<=0){
		// 	layer.msg('请将问题回答完整！',{icon:3,anim:6});return false;
		// }
		var _url                       = $('form[name="catalogForm"]').attr('action');
		var _type                      = $('form[name="catalogForm"]').attr('method');
		// alert($('form[name="catalogForm"]').serialize());return false;
		$.ajax({
			type          : _type,
			url           : _url,
			data          : $('form[name="catalogForm"]').serialize(),
			dataType      : 'html',
			success       : function(data){
				console.log(data);return false;
				if(data.code == 1){
					setTimeout(function () {
                        location.href = data.url;
                    }, 1000);
                    layer.msg(data.msg,{icon:1});
				}
				if(data.code == 0){
                    layer.msg(data.msg,{icon:3,anim:6});
                }
			}
		});
		return false;
	});

});



function checkClear(obj){
	$(obj).each(function(){
		$(this).attr("checked",false);
	});
}
