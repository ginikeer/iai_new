// $(function(){
// 	$('#cat1').on('change',function(){
// 		var _id = $(this).val();
// 		if(isNaN(parseInt(_id)))return false;
// 		$.ajax({
// 			type     : 'GET',
// 			url      : $('input[name="faqData"]').val(),
// 			data     : {id : _id,type : 1},
// 			// dataType : 'html',
// 			success  : function(data){
// 				var str_html = '<option value="">---</option>';
// 				for(var arg in data){
// 					str_html += "<option value='"+data[arg]['id']+"'>"+data[arg]['name']+"</option>";
// 				}
// 				$('#cat2').html(str_html);
// 			}
// 		});
// 	});
// });



var _currentPageNum = 0;

$(function(){
	$("#cat1").change(_onSelectChange);
	$("#cat2").change(_onSelectChange);
	$("#search-btn").click(_onChange);			
});


//select选择
function _onSelectChange(_e){
var d = {
		id:$(this).val()
	};
	_getData($('input[name="faqData"]').val(), d, _onSelectData, 'GET', _onSelectErrorData);
}


function _getData(_url, _data, _func, _m, _func2){
	if(!_m){_m = 'GET';}
	$.ajax({
		url:_url,
		type:_m,
		data:_data,
		dataType:"json",
		success:function(jsonData){
			console.log(jsonData);
			if(false == jsonData.error){
				_func(jsonData.data);
			}else if(_func2){
				_func2(jsonData.data);
			}
			
			if(window['_makePageCtrl']){
					_makePageCtrl(jsonData.total, jsonData.limit, jsonData.p);
			}
			if(window['_setTotalPage']){
					_setTotalPage(jsonData.total);
			}
		}
	});
}

//---
function _onSelectData(_d){
	// _log(_d);	
	var text = _d;
	var coded = '<option value="">---</option>';
	var decoded = coded + $('<div/>').html(text).text();
	_log(decoded);
	if(!$("#cat2").val() || '' == $("#cat2").val()){
		$("#cat2").html(decoded);
	}else{
		$("#cat3").html(decoded);
	}
	
}
//---
function _onSelectErrorData(_d){
	var coded = '<option value="">---</option>';
	if(!$("#cat1").val() || '' == $("#cat1").val()){
		$("#cat2").html(coded);
	}else{
		$("#cat3").html(coded);
		$("#cat3").html(coded);
	}
}

//---
function _onChange(_e, _p){
$("#tbl-result").empty();
_statusChange("Searching");
if(!_p){ _p=0; }
_currentPageNum=_p;
var d = {
		"p":_p,
		"stage":$('input:radio[name="faq_stage"]:checked').val(),
		"cat1":$("#cat1").val(),
		"cat2":$("#cat2").val(),
		"cat3":$("#cat3").val(),
		"content":$("#content").val(),
		"keywords":$("#keywords").val()
	};
	//_log(d);
	_getData($('input[name="fagSearch"]').val(), d, _onData, 'GET', _onErrorData);
}
//---
function _onData(_d){
	_statusChange("");
	// _log(_d);return false;
	var tbl = $("#tbl-result");
	var len = _d.length;
	tbl.empty();
	var classtr='';
	// var state;
	$.each(_d,function(index,data){	
		tbl.append(
			'<tr class="'+classtr+'">'
				+'<td class="t2">'+ data.c1 +'</td>'
				+'<td class="t2">'+ data.c2 +'</td>'
				+'<td class="t1"><a href="detail.php?i='+data.id+'" target="_blank">'+ data.question +'</a></td>'
			+"</tr>"
		);
	});
	// _refresh();
}
//---
function _onErrorData(_d){
	_statusChange("没有找到数据", 1);
}





function _makePageCtrl(_total, _limit, _p){
var T = $("#pctrl");
var p_total = 0;
var offset = 5;
var n = Math.floor(offset/2);
var ii = 0;
var oo = 0;

	T.empty();
	if(0 < _total){
		p_total =　Math.ceil(_total/_limit);
		ii = (_p-n);
		if(ii < 0){ ii = 0; }
		oo = (_p+n+1);
		if(offset > (oo-ii)){
			oo = ii+offset;
		}
		if(p_total < oo){ oo = p_total; }
		if(offset > (oo-ii)){
			ii = oo-offset;
		}
		if(ii < 0){ ii = 0; }
	}
	
	if(1 < p_total){
		T.append('<li num="0"><a href="javascript:;">&lt;&lt;</a></li>');
		if(0 < _p){
			T.append('<li num="'+(_p-1)+'"><a href="javascript:;">&lt;</a></li>');
		}
		for(var i=ii; i < oo; i++){
			var c = '';
			if(i == _p){ c=' class="active"'; }
			T.append('<li num="'+i+'"'+c+'><a href="javascript:;">'+(i+1)+'</a></li>');
		}
		if(_p < (p_total-1)){
		T.append('<li num="'+(_p+1)+'"><a href="javascript:;">&gt;</a></li>');
		}
		T.append('<li num="'+(p_total-1)+'"><a href="javascript:;">&gt;&gt;</a></li>');
		
		$("#pctrl li").on('click',function(){
			_onChange(null, $(this).attr('num')-0);
		});
	}
}

function _setTotalPage(_total){
	var T = $("#total_result_count");
	if(_total){
		T.text(_total);
	}
}

function _statusChange(str,isError){
	$("#status").empty().text(str);
	if(isError){
		$("#status").css('color','#F00');
	}else{
		$("#status").css('color','#000');
	}
}

function _log(_d){
	console.log(_d);
}