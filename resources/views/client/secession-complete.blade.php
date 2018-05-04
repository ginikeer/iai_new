@section('title') IAI－艾卫艾商贸(上海)有限公司－ ｜ 退会 @stop

@section('style')
<link rel="stylesheet" href="{{ asset('css/client/login.css') }}"/>
@stop

@extends('master/client')
@section('content')
	

<div class="wrap service_warp" id="login_main">
	<div class="row crumb">
		<div class="container">
			<ul class="breadcrumb">
				<li>
					<a href="{{ url('/') }}">首页</a>
				</li>
				<li>退会</li>
			</ul>
		</div>
	</div>
	
	<div class="container">
		<div class="color-white">
			<h1>退会</h1>
			<hr>
			<div class="row mypage-row">
				<div class="col-lg-8 col-lg-offset-2">
					<p>已经退会。</p>
				</div>
			</div>
			<form>
				<div class="login-form">
					<div class="login-btn">
						<a href="{{ url('/') }}" class="btn btn-red btn-mypage"> 返回首页 </a>
					</div>
				</div>
			</form>
		</div>
	</div>
	
</div>



@endsection

@section('script')
<script type="text/javascript" src="{{ asset('js/client/member.js') }}"></script>
@stop