<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="_token" content="{{ csrf_token() }}"/>
	<title>IAI网站管理系统</title>

	<link href="{{ asset('/css/admin/app.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/admin/common.css') }}" rel="stylesheet">
	<link href="{{ asset('favicon.ico') }}" rel="SHORTCUT ICON">

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	@section('style')
    @show
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="{{ url('admin/home') }}">首页</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li class="dropdown">
						<a href="" class="dropdown-toggle" data-toggle="dropdown">
							产品管理 <span class="caret"></span>
						</a>
						<ul class="dropdown-menu" role="menu">
							<li>
								<a href="{{ url('admin/product/list') }}">产品列表 </a>
							</li>
							<li>
								<a href="{{ url('admin/product/single') }}">产品新增 </a>
							</li>
							<li>
								<a href="{{ url('admin/manual') }}">产品使用说明管理</a>
							</li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="" class="dropdown-toggle" data-toggle="dropdown">
							产品案例管理 <span class="caret"></span>
						</a>
						<ul class="dropdown-menu" role="menu">
							<li>
								<a href="{{ url('admin/case/list') }}">产品案例列表</a>
							</li>
							<li>
								<a href="{{ url('admin/case/single') }}">产品案例新增</a>
							</li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="" class="dropdown-toggle" data-toggle="dropdown">
							新闻管理 <span class="caret"></span>
						</a>
						<ul class="dropdown-menu" role="menu">
							<li>
								<a href="{{ url('admin/news/list') }}">新闻列表</a>
							</li>
							<li>
								<a href="{{ url('admin/news/single') }}">新闻新增</a>
							</li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="" class="dropdown-toggle" data-toggle="dropdown">
							会员管理 <span class="caret"></span>
						</a>
						<ul class="dropdown-menu" role="menu">
							<li>
								<a href="{{ url('admin/user/list') }}">会员列表</a>
							</li>
							<li>
								<a href="{{ url('admin/user/single') }}">会员新增</a>
							</li>
							<li>
								<a href="{{ url('admin/user/apply') }}">会员目录申请</a>
							</li>
							<li>
								<a href="{{ url('admin/user/download') }}">会员下载记录</a>
							</li>
							<li>
								<a href="{{ url('admin/user/paper-apply') }}">纸质目录申请</a>
							</li>
						</ul>
					</li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					<li><a href="{{ url('admin/auth/logout') }}">注销</a></li>
				</ul>
			</div>
		</div>
	</nav>

	@yield('content')

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
	<script src="{{ asset('/js/admin/common.js') }}"></script>
	<script src="{{ asset('/js/client/jquery.tmpl.min.js') }}"></script>
	@section('script')
    @show
</body>
</html>
