@section('title') IAI－艾卫艾商贸(上海)有限公司－ ｜ 会员注册 @stop

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
		<div class="row row-nav-tabs">
			<ul class="col-lg-10 col-lg-offset-1 nav-tabs nav-justify">
				<li><a href="javascript:">邮箱确认</a></li>
				<li class="active"><a href="javascript:;">填写会员信息</a></li>
				<li><a href="javascript:;">注册成功</a></li>
			</ul>
		</div>
		<form id="form-register" method="post" action="{{ url('/auth/register') }}">
			<input type="hidden" name="_token" value="{{ csrf_token() }}" />
			<input type="hidden" name="reg_key" value="{{ $key }}" />
			<input type="hidden" name="status" value="1" />
			<div class="login-form regist-form">
				<div class="form-item">
					<label>会员ID(Email)</label>
					<input type="email" name="email" value="{{ $email }}" @if($reg_method == "email") readonly @endif />
				</div>
				<div class="form-item password">
					<label>密码</label>
					<input class="info-read required-item" type="password" name="pwd" id="pwd" maxlength="32" />
				</div>
				<p class="text-red error-text error-null">请输入密码</p>
				<p class="text-red error-text error-pwd-length">密码至少4位</p>
				<div class="form-item password">
					<label>确认密码</label>
					<input class="info-read required-item" type="password" id="pwd_again" maxlength="32" />
				</div>
				<p class="text-red error-text error-null">请再次输入密码</p>
				<p class="text-red error-text error-not-same">两次密码不一致</p>
				<div class="form-item">
					<label>公司名</label>
					<input class="info-read required-item" type="text" id="company" name="company" />
				</div>
				<p class="text-red error-text error-null">请输入公司名</p>
				<div class="form-item">
					<label>部门</label>
					<input class="info-read required-item" type="text" id="department" name="department" />
				</div>
				<p class="text-red error-text error-null">请输入部门</p>
				<div class="form-item">
					<label>姓名</label>
					<input class="info-read required-item" type="text" id="name" name="name" maxlength="64" />
				</div>
				<div class="form-item">
					<label>地址-所在省市</label>
					<select class="info-read" name="prov">
						<option value="">所在省/市</option>
						@foreach ($prov as $p)
						<option value="{{ $p }}">{{ $p }}</option>
						@endforeach
					</select>
				</div>
				<div class="form-item">
					<label>城市</label>
					<input class="info-read" type="text" id="city" name="city" maxlength="32" />
				</div>
				<div class="form-item">
					<label>地址</label>
					<input class="info-read" type="text" id="addr" name="addr" />
				</div>
				<div class="form-item">
					<label>TEL</label>
					<input class="info-read required-item" value="{{ $mobile }}" type="tel" id="tel" name="tel" maxlength="24" @if($reg_method == "mobile") readonly @endif />
				</div>
				<p class="text-red error-text error-null">请输入电话</p>
				<p class="text-red error-text error-tel-format">电话格式不正确</p>
				<div class="login-btn info-btn">
					<input type="button" id="next-btn" value=" 下 一 步 " />
				</div>
				<div class="login-btn check-btn">
					<input type="button" id="regist-check-btn" value=" 注 册 " />
					<input type="button" id="back-btn" value=" 返 回 " />
				</div>
			</div>
		</form>
	</div>

</div>



@endsection

@section('script')
<script type="text/javascript" src="{{ asset('js/client/register.js') }}"></script>
@stop