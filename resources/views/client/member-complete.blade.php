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
				<li><a href="javascript:;">填写会员信息</a></li>
				<li class="active"><a href="javascript:;">注册成功</a></li>
			</ul>
		</div>
		<div class="row">
			<div class="col-lg-10 col-lg-offset-1">
	            <p align="center">发送成功，感谢注册。</p>
			</div>
		</div>
		<form>
			<div class="login-form">
				<div class="login-btn">
					<a href="{{ url('/login') }}" class="complete-btn"> 登 陆 </a>
					<!--<input type="submit" class="regist-btn" value=" 登 陆 " />-->
				</div>
			</div>
		</form>
	</div>

</div>



@endsection

@section('script')
<script type="text/javascript" src="{{ asset('js/client/member.js') }}"></script>
@stop