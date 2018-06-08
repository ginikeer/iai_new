@section('title') IAI－艾卫艾商贸(上海)有限公司－ ｜ 纸质目录申请 @stop

@section('style')
<link rel="stylesheet" href="{{ asset('css/client/login.css') }}"/>
@stop

@extends('master/client')
@section('content')
	

<div class="wrap service_warp">
	<div class="row crumb">
		<div class="container">
			<ul class="breadcrumb">
				<li>
					<a href="{{ url('/') }}">首页</a>
				</li>
				<li>纸质目录申请</li>
			</ul>
		</div>
	</div>
	<div class="container">
		<div class="color-white">
			<h1>发送结果</h1>
			<hr>
			<h5 style="margin-bottom: 200px;">
				感谢您的申请，我司将会尽快邮寄给您最新版的2017综合产品目录！
			</h5>
		</div><!-- #main -->
	</div>
</div>

@endsection