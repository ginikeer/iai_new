@section('title') IAI－艾卫艾商贸(上海)有限公司－ ｜ 找回密码 @stop

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
				<li>找回密码</li>
			</ul>
		</div>
	</div>
	<div class="login-content">
		<h2>找回密码</h2>
		<div class="register-choose-wraper">
			<label for="email" class="active">
				<span>邮箱找回</span>
				<input type="radio" name="register-method" id="email" value="email-register" checked="checked" />
			</label>
			<label for="mobile">
				<span>手机找回</span>
				<input type="radio" name="register-method" id="mobile" value="mobile-register" />
			</label>
		</div>
		<div class="register-method email-register">
			<div class="row">
				<div class="col-lg-10 col-lg-offset-1">
		            <p>
		            	请输入您的会员ID（E-mail），我们将会向您的邮箱发送确认邮件。<br>
		            	您可以通过邮件内的链接重置您的密码。
		            </p>
				</div>
			</div>
			<form>
				<input type="hidden" id="url-email-password" value="{{ url('/auth/forget-email') }}" />
				<div class="login-form">
					<div class="form-item user-name">
						<label></label>
						<input type="email" name="email" required id="lost-email" />
					</div>
					<div class="form-item" id="error-text">
						<p class="text-red">请输入正确的邮箱地址!</p>
					</div>
					<p class="text-red send-hide">已将邮件发送至您的邮箱。</p>
					<div class="login-btn">
						<input type="button" class="regist-btn" id="email-send-btn" value=" 发 送 " />
					</div>
				</div>
			</form>
			<div class="row regist-tips">
				<div class="col-lg-10 col-lg-offset-1">
	            	<p>如果没有收到认证邮件，请确认邮箱输入是否有误或是否在垃圾邮件里。</p>
				</div>
			</div>
		</div>
		
		<div class="mobile-method mobile-register hide">
			<div class="row">
				<div class="col-lg-10 col-lg-offset-1">
		            <p>
		            	请输入您的手机号，我们将会向您的发送确认短信。<br>
		            	您可以通过输入短信内的验证码重置您的密码。
		            </p>
				</div>
			</div>
			<form>
				<input type="hidden" id="url-check-mobile" value="{{ url('/auth/check-mobile') }}" />
				<input type="hidden" id="url-send-vcode" value="{{ url('/auth/send-vcode') }}" />
				
				<div class="login-form">
					<div class="form-item user-mobile">
						<label></label>
						<input type="tel" id="regist-mobile" />
						<div class="btn send-vcode-btn">发送验证码</div>
					</div>
					<div class="form-item mobile-vcode">
						<label></label>
						<input type="text" id="regist-vcode" />
					</div>
					<div class="form-item error" id="mobile-error-text">
						<p class="text-red">请输入正确的手机号！</p>
					</div>
					<div class="form-item error" id="vcode-error-text">
						<p class="text-red">请输入验证码！</p>
					</div>
					<div class="form-item error" id="send-error-text">
						<p class="text-red"></p>
					</div>
					<div class="login-btn">
						<input type="button" class="regist-btn" id="reg-mobile-btn" value="手机认证" />
					</div>
				</div>
			</form>
		</div>
	</div>
</div>



@endsection

@section('script')
<script type="text/javascript" src="{{ asset('js/client/register.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/client/pwd_lost.js') }}"></script>
@stop