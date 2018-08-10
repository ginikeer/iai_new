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
			<h1>报警代码信息</h1>
			<hr>
			
			<div class="col-lg-8 col-lg-offset-2 faq-block question-block">
				<p class="faq-text">报警代码</p>
				<p>{{$codeInfo->code}}</p>
			</div>
			<div class="col-lg-8 col-lg-offset-2 faq-block question-block">
				<p class="faq-text">报警名称</p>
				<p>{{$codeInfo->code}}</p>
			</div>
			<div class="col-lg-8 col-lg-offset-2 faq-block answer-block">
				<p class="faq-text">原因/对策</p>
				<p>
					{!! $codeInfo->reason !!}
					@if(!empty($codeInfo->pic))
						<br />
						<img src="{{CASE_CODE_PATH . $codeInfo->pic}}" />
					@endif

				</p>
			</div>
			<p class="faq-close text-center"><a href="javascript:window.close();"><img src="{{ asset('i/client/faq/btn_close.png') }}">　关闭该页面</a></p>
		</div><!-- #main -->
	</div>

</div>
@endsection

@section('script')
<script type="text/javascript" src="{{ asset('js/client/service.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/client/service_faq.js') }}"></script>
@stop