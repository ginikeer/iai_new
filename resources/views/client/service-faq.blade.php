@section('title') IAI－艾卫艾商贸(上海)有限公司－ ｜ 常见问题 @stop

@section('style')
<link rel="stylesheet" href="{{ asset('css/client/service.css') }}"/>
@stop

@extends('master/client')
@section('content')
	

<div class="wrap service_warp" id="service_main">
	<div class="row crumb">
		<div class="container">
			<ul class="breadcrumb">
				<li>
					<a href="{{ url('/') }}">首页</a>
				</li>
				<li>常见问题</li>
			</ul>
		</div>
	</div>
	<div class="container">
		<!-- InstanceBeginEditable name="main" -->
		<div class="color-white">
			<h1>常见问题</h1>
			<hr>

			<table width="100%" class="faq-search">
				<tr>
					<th>阶段</th>
					<td>
						<span class="span_ur"><input type="radio" name="faq_stage" id="faq_stage" value="选型阶段"><font color="#333"> 选型阶段　</font></span>
						<span class="span_ur"><input type="radio" name="faq_stage" id="faq_stage" value="设计阶段"><font color="#333"> 设计阶段　</font></span>
						<span class="span_ur"><input type="radio" name="faq_stage" id="faq_stage" value="下单阶段"><font color="#333"> 下单阶段　</font></span>
						<span class="span_ur"><input type="radio" name="faq_stage" id="faq_stage" value="调试阶段"><font color="#333"> 调试阶段　</font></span>
						<span class="span_ur"><input type="radio" name="faq_stage" id="faq_stage" value="使用阶段"><font color="#333"> 使用阶段　</font>
					</td>
					<td rowspan="4" class="search-btn search-btn-pc"><a href="javascript:void(0);" id="search-btn"><img src="{{ asset('i/client/faq/btn_search.jpg') }}"></a></td>
				</tr>
				<input type="hidden" name="faqData" value="{{url('service/faq-data')}}"/>
				<input type="hidden" name="fagSearch" value="{{url('service/faq-search')}}" />
				<tr>
					<th>产品</th>
					<td class="next-td">
						<select name="cat1" id="cat1">
							<option value="">---</option>
							@foreach($first_catagory as $vo)
							<option value="{{$vo->id}}">{{$vo->name}}</option>
							@endForeach
						</select>
						<span class="next-icon">⇒</span>
						<select name="cat2" id="cat2">
							<option value="">---</option>
						</select>
						<span class="next-icon">⇒</span>
						<select name="cat3" id="cat3">
							<option value="">---</option>
						</select>
					</td>
				</tr>
				<tr>
					<th>咨询内容</th>
					<td>
						<select name="content" id="content">
							<option value="">---</option>
							<option value="规格">规格</option>
							<option value="操作">操作</option>
							<option value="程序">程序</option>
							<option value="故障">故障</option>
							<option value="参数">参数</option>
							<option value="型号">型号</option>
							<option value="机型选择">机型选择</option>
							<option value="接线">接线</option>
							<option value="串行通信">串行通信</option>
							<option value="外观・尺寸・结构・材质">外观・尺寸・结构・材质</option>
							<option value="维护">维护</option>
							<option value="安装方法">安装方法</option>
							<option value="其他">其他</option>
						</select>
					</td>
				</tr>
				<tr>
					<th>关键词</th>
					<td><input name="keywords" id="keywords" size="60"></td>
				</tr>
			</table>
			<div class="sp-only search-btn sp-search"><a href="javascript:void(0);" id="search-btn"><img src="{{ asset('i/client/faq/btn_search.jpg') }}"></a></div>
			<hr>
			<h3>搜索结果一览</h3>
			<p id="hkensu" class="text-right">搜索结果 ： <span id="total_result_count"></span> 个</p>
			<table width="100%" class="faq-results">
				<tr>
					<th width="140">分类1</th><th width="140">分类2</th><th>问题</th>
				</tr>
				<tbody id="tbl-result">
				</tbody>
				<tr>
					<td colspan="3" id="status" class="text-center"></td>
				</tr>
			</table>
			
			<ul class="pagination" id="pctrl">
	
			</ul>

			<!-- <hr>
			<h3>搜索结果一览</h3>
			<p class="text-right">共41个结果中的1~20个</p>
			<table width="100%" class="faq-results">
				<tr>
					<th width="140">分类1</th><th width="140">分类2</th><th>问题</th>
				</tr>
				<tr>
					<td>控制器</td><td>位置点指定型</td><td><a href="#1" target="_blank">希望购入「ERC2」，除了本体以外还有什么需要的吗？</a></td>
				</tr>
			</table> -->
		</div><!-- #main -->
		<!-- InstanceEndEditable -->
	</div>
</div>



@endsection

@section('script')
<script type="text/javascript" src="{{ asset('js/client/service.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/client/service_faq.js') }}"></script>
@stop