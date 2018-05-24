@section('title') IAI－艾卫艾商贸(上海)有限公司－ ｜ 注册 @stop

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
				<li>注册</li>
			</ul>
		</div>
	</div>
	<div class="login-content">
		<h2>会员注册</h2>
		
		<input type="radio" name="register-method" id="email" value="email" />
		<input type="radio" name="register-method" id="mobile" value="mobile" />
		
		
		<div class="row row-nav-tabs">
			<ul class="col-lg-10 col-lg-offset-1 nav-tabs nav-justify">
				<li class="active"><a href="javascript:">邮箱确认</a></li>
				<li><a href="javascript:;">填写会员信息</a></li>
				<li><a href="javascript:;">注册成功</a></li>
			</ul>
		</div>
		<div class="tab1">
			<div class="row">
				<div class="col-lg-10 col-lg-offset-1">
		            <p align="center" class="text-red">「由于网站更新，以前登录过的会员需再次输入相关信息。<br>给各位增添了麻烦深表歉意，还望理解支持。」</p>
		            <p>
		            	注册会员之前，须先进行邮箱认证。填写邮箱后，按［邮箱认证］键进行邮箱确认。<br>
		            	我们会将一封邮箱认证邮件发送至您的邮箱，您只需点击邮件正文里的链接，即可完成认证。
		            </p>
				</div>
			</div>
			<form>
				<input type="hidden" id="url-check-email" value="{{ url('/auth/check-email') }}" />
				<div class="login-form">
					<div class="form-item user-name">
						<label></label>
						<input type="email" name="email" required id="regist-email" />
					</div>
					<div class="form-item" id="error-text">
						<p class="text-red">请输入正确的邮箱地址</p>
					</div>
					<div class="login-btn">
						<input type="button" class="regist-btn" id="regist-btn" value=" 邮箱认证 " />
					</div>
				</div>
			</form>
			<div class="row regist-tips">
				<div class="col-lg-10 col-lg-offset-1">
	            	<p>如果没有收到认证邮件，请确认邮箱输入是否有误或是否在垃圾邮件里。</p>
				</div>
			</div>
		</div>
		<div class="tab2">
			<div class="row regist-tips">
				<div class="col-lg-10 col-lg-offset-1">
					<p>
						已将邮箱确认邮件发送至您的邮箱『<span class="email-text"></span>』，主题：会员注册邮箱认证<br><br>
						点击邮件正文中的专用注册链接，填写会员信息。<br>
						(只需点击认证成功的链接即可填写会员信息)<br><br>
						通常情况下，几秒钟后就会将认证邮件发送至您的邮箱，如果长时间后还没收到邮件的话，请确认您的邮箱地址是否输入错误。<br>
						※如果您使用的是Hotmail或Yahoo邮箱，此邮件可能在垃圾邮件里，请在垃圾邮件中查收。
					</p>
				</div>
			</div>
		</div>
	</div>

</div>



@endsection

@section('script')
<script type="text/javascript" src="{{ asset('js/client/regist.js') }}"></script>
@stop