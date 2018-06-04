@section('title') IAI－艾卫艾商贸(上海)有限公司－ ｜ 重置密码 @stop

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
				<li>重置密码</li>
			</ul>
		</div>
	</div>
	<div class="login-content">
		<h2>重置密码</h2>
		<div class="row">
			<div class="col-lg-10 col-lg-offset-1">
	            <p align="center">您的密码已经重置，请使用新密码登录。</p>
			</div>
		</div>
		<form>
			<div class="login-form">
				<div class="login-btn">
					<a href="{{ url('/auth/login') }}" class="complete-btn"> 登 陆 </a>
				</div>
			</div>
		</form>
	</div>
</div>



@endsection

@section('script')
<script type="text/javascript" src="{{ asset('js/client/pwd_lost.js') }}"></script>
@stop