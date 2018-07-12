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

		<div class="color-white">
			<h1>常见问题</h1>
			<hr>
			
			<div class="col-lg-8 col-lg-offset-2 faq-block question-block">
				<p class="faq-text">问题</p>
				<p>{{$faqInfo->question}}</p>
			</div>
			<div class="col-lg-8 col-lg-offset-2 faq-block answer-block">
				<p class="faq-text">回答</p>
				<p>{{$faqInfo->answer}}</p>
			</div>
			
			<table width="70%" class="col-lg-8 col-lg-offset-2 faq-detail">
				<tr>
					<th>分类1</th>
					<td>{{$faqInfo->c1}}</td>
				</tr>
				<tr>
					<th>分类2</th>
					<td>{{$faqInfo->c2}}</td>
				</tr>
				<tr>
					<th>分类3</th>
					<td>{{$faqInfo->c3}}</td>
				</tr>
				<tr>
					<th>阶段</th>
					<td>{{$faqInfo->stage}}</td>
				</tr>
				<tr>
					<th>咨询内容</th>
					<td>{{$faqInfo->content}}</td>
				</tr>
			</table>
			<p class="faq-close text-center"><a href="javascript:window.close();"><img src="{{ asset('i/client/faq/btn_close.png') }}">　关闭该页面</a></p>
		</div><!-- #main -->
	</div>

</div>
@endsection

@section('script')
<script type="text/javascript" src="{{ asset('js/client/service.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/client/service_faq.js') }}"></script>
@stop