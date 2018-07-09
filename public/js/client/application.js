$(function(){
	$('input[name="catalog"]').change(function(){
		if($(this).val()=='单品目录'){
			$('.catalog-item').slideDown();
			$('.catalog-item-2').slideUp();
			checkClear($('.catalog-item-2 input'));
		}else{
			$('.catalog-item-2').slideDown();
			$('.catalog-item').slideUp();
			checkClear($('.catalog-item input'));
		}
	});
	
	$('#application-btn').click(function(){
		window.location.href = $('#check-link').val();
	})
	
	$('#send-btn').click(function(){
		window.location.href = $('#send-link').val();
	})
	
	$('#back-btn').click(function(){
		window.location.href = $('#back-link').val();
	})
});

function checkClear(obj){
	$(obj).each(function(){
		$(this).attr("checked",false);
	});
}
