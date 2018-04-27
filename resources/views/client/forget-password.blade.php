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
		<h2>找回密码</h2>
		<div class="row">
			<div class="col-lg-10 col-lg-offset-1">
	            <p>
	            	请输入您的会员ID（E-mail），我们将会向您的邮箱发送确认邮件。<br>
	            	您可以通过邮件内的链接重置您的密码。
	            </p>
			</div>
		</div>
		<form>
			<div class="login-form">
				<div class="form-item user-name">
					<label></label>
					<input type="email" name="email" required id="lost-email" />
				</div>
				<div class="form-item" id="error-text">
					<p class="text-red">请输入正确的邮箱地址</p>
				</div>
				<p class="text-red send-hide">已将邮件发送至您的邮箱.</p>
				<div class="login-btn">
					<input type="button" class="regist-btn" id="send-btn" value=" 发 送 " />
				</div>
			</div>
		</form>
		<div class="row regist-tips">
			<div class="col-lg-10 col-lg-offset-1">
            	<p>如果没有收到认证邮件，请确认邮箱输入是否有误或是否在垃圾邮件里。</p>
			</div>
		</div>
	</div>
</div>



@endsection

@section('script')
<script type="text/javascript" src="{{ asset('js/client/login.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/client/pwd_lost.js') }}"></script>
@stop