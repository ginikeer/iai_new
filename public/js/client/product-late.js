// JavaScript Document
$(function() {
	
	$('.tab li').click(function() {

		var index = $('.tab li').index(this);

		$('.content li').css('display','none');

		$('.content li').eq(index).css('display','block');

		$('.tab li').removeClass('select');

		$(this).addClass('select');
		
		$(".tab-select").val(index);
	});
	
	$(".tab-select").change(function () {
		var selItem = parseInt($(this).val());
		$('.content li').css('display','none');
		$('.content li').eq(selItem).css('display','block');
		$('.tab li').removeClass('select');
		$('.tab li').eq(selItem).addClass('select');
	});
});