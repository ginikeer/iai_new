@section('title') IAI－艾卫艾商贸(上海)有限公司－ ｜ 公司概要 @stop

@section('style')
<link rel="stylesheet" href="{{ asset('css/client/application.css') }}"/>
@stop

@extends('master/client')
@section('content')

<div class="wrap color-black" id="leaderboard">
	<div class="container">
	<!-- InstanceBeginEditable name="leaderboard" -->
		<h2>登录</h2>
	<!-- InstanceEndEditable -->
	</div>
</div><!-- #leaderboard -->
<div class="wrap" id="breadcrumb">
	<div class="container">
		<ol class="breadcrumb">
			<li><a href="/index.html">首页</a></li>
			<!-- InstanceBeginEditable name="breadcrumb" -->
			<li class="active">登录</li>
			<!-- InstanceEndEditable -->
		</ol>
	</div>
</div><!-- #breadcrumb -->
<div class="wrap" id="container">
	<div class="container">
		<!-- InstanceBeginEditable name="main" -->
		<div class="card color-white">
			<h1>登录</h1>
			<hr>
			<div class="row">
				<div class="col-lg-4 col-lg-offset-2 text-right">
					<p class="text-right"><img src="../assets/images/logo_lg.png"></p>
				</div>
                <form name="loginForm" method="post" action="index.php">
				<div class="col-lg-4">
					<div class="form-group form-group-login">
						<div class="input-group">
							<div class="input-group-addon">E-mail</div>
							<input type="email" name="email" required>
						</div>
						<div class="input-group">
							<div class="input-group-addon">密码</div>
							<input type="password" name="pwd" required>
						</div>
                        <span style="color:#F00;">{$MESSAGE}</span>
						<div class="input-group">
							<div class="input-group-addon">&nbsp;</div>
							<button class="btn btn-red btn-md btn-block" onClick="javascript:document.loginForm.submit">登录</button>
						</div>
					</div>
                    </form>
					<div class="row row-no-offset">
						<div class="col-lg-6">
							<p><a href="/regist/">免费注册</a></p>
						</div>
						<div class="col-lg-6">
							<p class="text-right"><a href="/mypage/pwd_lost.php">忘记登录密码?</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- InstanceEndEditable -->
	</div>
</div><!-- #container -->

@endsection

@section('script')
<script type="text/javascript" src="{{ asset('js/client/application.js') }}"></script>
@stop