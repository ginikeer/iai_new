@section('title') IAI－艾卫艾商贸(上海)有限公司－ ｜ 变更密码 @stop

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
				<li>变更密码</li>
			</ul>
		</div>
	</div>
	<div class="login-content">
		<h2>变更密码</h2>
		<form>
			<div class="login-form regist-form">
				<p>请变更您的密码</p>
				<div class="form-item">
					<label>会员ID(Email)</label>
					<input type="email" name="email" value="xxx@xxx.com" readonly />
				</div>
				<div class="form-item password">
					<label>旧密码</label>
					<input type="password" required name="old-password" id="old-password" />
				</div>
				<p class="text-red error-text">请输入旧密码</p>
				<div class="form-item password">
					<label>新密码</label>
					<input type="password" required name="password" id="new-password" />
				</div>
				<p class="text-red error-text">请输入新密码</p>
				<div class="form-item password">
					<label>重复新密码</label>
					<input type="password" required name="repeat-password" id="repeat-password" />
				</div>
				<p class="text-red error-text"></p>
				<div class="login-btn">
					<input type="hidden" id="send-change-link" value="{{ url('/login/mypage') }}" />
					<input type="button" id="send-change-btn" value=" 发送 " />
				</div>
			</div>
		</form>
	</div>
</div>



@endsection

@section('script')
<script type="text/javascript" src="{{ asset('js/client/pwd_change.js') }}"></script>
@stop