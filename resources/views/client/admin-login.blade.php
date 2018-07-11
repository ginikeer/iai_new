<!doctype html>
<html lang="zh-cn">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="HandheldFriendly" content="true">
	<title>管理员登录</title>
	<meta name="keywords" content="IAI,电缸,电动缸,工业机械手,单轴机械手,电动机械手,直交机械手,直线伺服,电动滑台,水平多关节机械手" />
	<meta name="description" content="电动电缸(产业用机械人　电动机械缸)的制作和销售。有电缸、单轴机械手、直角坐标机械手、滑动式机械手、线性伺服机械手、电动滑台等商品。" />
	<meta name="_token" content="{{ csrf_token() }}"/>
	<link href="{{ asset('favicon.ico') }}" rel="SHORTCUT ICON">
	
	<link rel="stylesheet" href="{{ asset('css/client/normalize.css') }}">
	<link rel="stylesheet" href="{{ asset('css/client/default.css') }}">
	<link rel="stylesheet" href="{{ asset('css/client/common.css') }}"/>
	<link rel="stylesheet" href="{{ asset('css/client/login.css') }}"/>
</head>
<body>
<div class="wrap service_warp" id="login_main">
	<div class="login-content">
		<h2>管理员登陆</h2>
		<form id="form-login" action="{{ url('/login/update') }}" method="post">
			<input type="hidden" name="_token" value="{{ csrf_token() }}" />
			<div class="login-form">
				<div class="form-item user-name">
					<label></label>
					<input type="text" name="username" id="username" placeholder="请输入登录账号" />
				</div>
				<div class="form-item password">
					<label></label>
					<input type="password" name="password" id="password" placeholder="请输入登录密码" />
				</div>
				<p class="text-red error">{{ $error or '' }}</p>
				<div class="login-btn">
					<input type="submit" id="login-btn" value=" 登 陆 " />
				</div>
			</div>
		</form>
	</div>
</div>
</body>

<script src="{{ asset('js/client/jquery-1.11.2.min.js') }}"></script>
<script src="{{ asset('js/client/jquery.tmpl.min.js') }}"></script>
<script src="{{ asset('js/client/common.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/client/admin.js') }}"></script>
