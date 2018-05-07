@section('title') IAI－艾卫艾商贸(上海)有限公司－ ｜ 登陆  @stop

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
				<li>登陆</li>
			</ul>
		</div>
	</div>
	<div class="login-content">
		<h2>会员登陆</h2>
		<form id="form-login" action="{{ url('auth/login') }}" method="post">
			<input type="hidden" name="_token" value="{{ csrf_token() }}" />
			<div class="login-form">
				<div class="form-item user-name">
					<label></label>
					<input type="text" name="email" id="email" />
				</div>
				<div class="form-item password">
					<label></label>
					<input type="password" name="password" id="password" />
				</div>
				<p class="text-red error">{{ $error or '' }}</p>
				<div class="forget-password">
					<a href="{{ url('auth/forget') }}">忘记登陆密码？</a>
				</div>
				<div class="login-btn">
					<input type="submit" id="login-btn" value=" 登 陆 " />
				</div>
				<div class="regist">
					<a href="{{ url('auth/register') }}">免费注册</a>
				</div>
			</div>
		</form>
	</div>
</div>



@endsection

@section('script')
<script type="text/javascript" src="{{ asset('js/client/login.js') }}"></script>
@stop