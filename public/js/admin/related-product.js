$(function() {
	
	$('#product-category').on('change', function() {
		var _id = $(this).val();
		$('.related-product').hide();
		$('.related-product-' + _id).show();
	});


	$('.select-list .manual_search').on('keyup',function(){
		var _keywords = $(this).val();
		$.ajax({
			type: "post",
			url: $("input[name='manual_search']").val(),
			headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') },
			data: { keywords: _keywords.trim() },
			dataType: "json",
			success: function(data) {
				$('.select-list .first').nextUntil($('.last')).remove();
				var str_html = '';
				if(Object.prototype.isPrototypeOf(data) && Object.keys(data).length==0){
					str_html += '<li><span>没有数据</span></li>';
				}else{
					for(var arg in data){
						str_html += '<li><input name="manual_select" data-str="'+data[arg]['title']+'" type="checkbox" value="'+data[arg]['id']+'"><span>'+data[arg]['title']+'</span></li>';
					}
				}
				$('.select-list .first').after(str_html);
			}
		});
	});
});
