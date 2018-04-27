@section('title') IAI－艾卫艾商贸(上海)有限公司－ ｜ 产品使用案例 @stop

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
		<form>
			<div class="login-form">
				<div class="form-item user-name">
					<label></label>
					<input type="email" name="email" required id="email" />
				</div>
				<div class="form-item password">
					<label></label>
					<input type="password" name="password" required id="password" />
				</div>
				<div class="form-item" id="error-text">
					<p class="text-red">请输入正确的邮箱地址和密码</p>
				</div>
				<div class="forget-password">
					<a href="{{ url('/forget-password') }}">忘记登陆密码？</a>
				</div>
				<div class="login-btn">
					<input type="submit" id="login-btn" value=" 登 陆 " />
				</div>
				<div class="regist">
					<a href="{{ url('/regist') }}">免费注册</a>
				</div>
			</div>
		</form>
	</div>
</div>



@endsection

@section('script')
<script type="text/javascript" src="{{ asset('js/client/login.js') }}"></script>
@stop