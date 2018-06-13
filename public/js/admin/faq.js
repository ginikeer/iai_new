$(function() {
	
	$('#third_level').on('change', function() {
		setSecondLevel($(this).val(), -1);
	});
	
	$("#faq_category_form").submit(function(event) {
		$(".form-group").removeClass("has-error");
		var flag = true;
		
		$(".required").each(function() {
			if($(this).val() == "") {
				$(this).parents(".form-group").addClass("has-error");
				flag = false;
			}
		});
		
		if(flag) $(this).submit();
        event.preventDefault();
	});
	
});

function setSecondLevel(parent, selected) {
	var $second_level = $('#second_level');
	var _second_default = '<option value="">---分类2---</option>'; 
	
	//清空分类2下拉列表，并初始化
	$second_level.html('').append(_second_default);
	
	$.ajax({
		type: "post",
		url: $("#url_get_second").val(),
		headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') },
		data: {id: parent},
		dataType: "json",
		success: function(result) {
			if(result.length > 0) {
				result.forEach(function(value, index, array) {
					var html = '';
					
					if(selected > 0 && selected == value.id) {
						html += '<option selected="selected" value="' + value.id + '">' + value.name + '</option>';
					} else {
						html += '<option value="' + value.id + '">' + value.name + '</option>';
					}
					
			 		$second_level.append(html);
			　　  });
			}
		}
	});
}




