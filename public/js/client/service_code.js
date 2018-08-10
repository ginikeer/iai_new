$(function(){
	$('#alarm-btn').on('click',_onClick);
});

function _onClick(_e, _p){
	$('#tbl-result2').empty();
	// console.log('ok');
	_statusSearch("Searching");
	if(!_p) {_p = 0;}
	var d = {
		"p"      : _p,
		"code"   :$('#alarm-code').val()
	};
	_getContent($('input[name="codeSearch"]').val(), d, _searchData, 'GET', _onEmptyData);
}

function _getContent(_url, _data, _func, _m, _func2){
	if(!_m) {_m = 'GET';}
	$.ajax({
		url      : _url,
		type     : _m,
		data     : _data,
		dataType : 'JSON',
		success  : function(info){
			_func(info.data);
			if(window['_pageCtrl']){
					_pageCtrl(info.total, info.limit, info.p);
			}
			if(window['_totalPage']){
					_totalPage(info.total);
			}
		}
	});
}

function _searchData(_d){
	//console.log(_d);return false;
	_statusSearch("");
	var tb = $('#tbl-result2');

	$.each(_d, function(index, data){
		tb.append(
			'<tr>'
			+ '<td class="t2">'+ data.code +'</td>'
			+ '<td class="t2">'+ data.name +'</td>'
			+ '<td class="t1"><a href="code-detail?id='+data.id+'" target="_blank">'+ data.reason +'</a></td>'
			+ '</tr>'
		);
	});

}


function _pageCtrl(_total, _limit, _p){
	var T          				= $('#pctrl2');
	var p_total    				= 0;  
	var offset    			    = 5;
	var n                       = Math.floor(offset/2);
	var ii                      = 0;
	var oo                      = 0;

	T.empty();

	if( _total > 0 ){
		p_total                 = Math.ceil(_total/_limit);
		ii                      = _p-n;
		if( ii < 0 ){
			ii                  = 0;
		}
		oo                      = parseInt(_p + n + 1);
		if(offset < (oo-ii)){   
			oo 					= ii+offset;
		}
		if(p_total < oo){ 
			oo 					= p_total; 
		}  
		if(offset > (oo-ii)){  
			ii 					= oo-offset;
		}
		if(ii < 0){ 
			ii 					= 0; 
		}
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
		
		$("#pctrl2 li").on('click',function(){
			_onClick(null, $(this).attr('num')-0);
		});
	}
}

function _statusSearch(str,isError){
	$("#statusShow").empty().text(str);
	if(isError){
		$("#statusShow").css('color','#F00');
	}else{
		$("#statusShow").css('color','#000');
	}
}

function _onEmptyData(){
	_statusSearch("没有找到数据", 1);
}

function _totalPage(_total){
	var T = $("#total_result_count_alarm");
	if(_total){
		T.text(_total);
	}else{
		T.text('');
	}
}