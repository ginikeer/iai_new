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
		<form id="reset_form" method="post" action="{{ url('/auth/reset') }}">
			<input type="hidden" name="reg_key" value="{{ $key }}" />
			<input type="hidden" name="_token" value="{{ csrf_token() }}" />
			<div class="login-form regist-form">
				<p>请重置您的密码</p>
				<div class="form-item">
					<label>会员账号</label>
					@if($reg_method == 'email')
					<input type="text" value="{{ $email }}" readonly />
					@else
					<input type="text" value="{{ $mobile }}" readonly />
					@endif
				</div>
				<div class="form-item password">
					<label>新密码</label>
					<input type="password" required name="password" id="new-password" />
				</div>
				<p class="text-red error-text">请输入新密码</p>
				<div class="form-item password">
					<label>重复新密码</label>
					<input type="password" required id="repeat-password" />
				</div>
				<p class="text-red error-text"></p>
				<div class="login-btn">
					<input type="button" id="reset-btn" value=" 发送 " />
				</div>
			</div>
		</form>
	</div>
</div>



@endsection

@section('script')
<script type="text/javascript" src="{{ asset('js/client/pwd_lost.js') }}"></script>
@stop