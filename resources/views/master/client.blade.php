<!doctype html>
<html lang="zh-cn">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="HandheldFriendly" content="true">
	<title>@section('title') @show</title>
	<meta name="keywords" content="IAI,电缸,电动缸,工业机械手,单轴机械手,电动机械手,直交机械手,直线伺服,电动滑台,水平多关节机械手" />
	<meta name="description" content="电动电缸(产业用机械人　电动机械缸)的制作和销售。有电缸、单轴机械手、直角坐标机械手、滑动式机械手、线性伺服机械手、电动滑台等商品。" />
	<meta name="_token" content="{{ csrf_token() }}"/>
	<link href="{{ asset('favicon.ico') }}" rel="SHORTCUT ICON">
	
	<link rel="stylesheet" href="{{ asset('css/client/normalize.css') }}">
	<link rel="stylesheet" href="{{ asset('css/client/default.css') }}">
	<link rel="stylesheet" href="{{ asset('css/client/common.css') }}"/>
	@section('style')
    @show
</head>
<body>
	<div class="wrap" id="header">
		<div class="row row-no-offset">
			<div class="col-lg-1 header_logo">
				<a href="{{ url('/') }}"><img src="{{ asset('i/client/common/logo.png') }}" /></a>
			</div>
			<div class="col-lg-1 header_right">
				@if($is_logined)
				<a href="{{ url('auth/logout') }}" class="btn btn_login"><i class="icon login-icon"></i><span>登出</span></a>
				@else
				<a href="{{ url('auth/login') }}" class="btn btn_login"><i class="icon login-icon"></i><span>登陆</span></a>
				@endif
				<a class="btn btn_login btn_weixin">
					<i class="icon weixin-icon"></i><span>微信</span>
					<img class="weixin-img" src="{{ asset('i/client/common/QR-code.jpg') }}">
				</a>
			</div>
			<div class="col-lg-7 header_nav">
				<ul class="nav nav-primary header_nav_list">
					<li><a href="{{ url('/') }}" @if($nav == 'home') class="active" @endif>首页<i></i></a></li>
					<li>
						<a href="{{ url('/company') }}" class="company_info @if($nav == 'company') active @endif">公司介绍<i></i></a>
						<div class="wrap sub_nav" id="company_nav">
							<div class="container">
								<ul class="nav nav-primary nav_list">
									<li><a href="{{ url('/company/profile') }}">公司概要</a></li>
									<li><a href="{{ url('/company/message') }}">致辞</a></li>
									<li><a href="{{ url('/company/history') }}">沿革</a></li>
								</ul>
							</div>
						</div>
					</li>
					<li>
						<a href="{{ url('/product') }}" class="product_info @if($nav == 'product') active @endif">产品<i></i></a>
						<div class="wrap sub_nav" id="product_nav">
							<div class="container">
								<ul class="nav nav-primary nav_list">
									@foreach ($product_category as $c)
									<li><a href="{{ url('/product?category=' . $c->alias) }}">{{ $c->title }}</a></li>
									@endforeach
								</ul>
							</div>
						</div>
					</li>
					<li>
						<a href="{{ url('/case') }}" class="cases_info @if($nav == 'case') active @endif">产品使用案例<i></i></a>
					</li>
					<li>
						<a href="{{ url('/service') }}" class="download_info @if($nav == 'service') active @endif">服务<i></i></a>
						<div class="wrap sub_nav" id="download_nav">
							<div class="container">
								<ul class="nav nav-primary nav_list">
									<li><a href="{{ url('/service/catalog') }}">综合产品目录</a></li>
									<li><a href="{{ url('/service/manual') }}">使用说明书</a></li>
									<li><a target="_blank" href="https://linkable.partcommunity.com/3d-cad-models/iai/?info=iai">CAD图纸</a></li>
									<li><a href="{{ url('/service/faq') }}">常见问题</a></li>
									<li><a href="{{ url('/service/delivery') }}">交货期查询</a></li>
									<li><a href="{{ url('/service/settings') }}">现场网络文件</a></li>
									<li><a href="{{ url('/service/versionhistory') }}">示教器履历</a></li>
									<li><a href="{{ url('/service/others') }}">其他公司相关</a></li>
								</ul>
							</div>
						</div>
					</li>
					<li><a href="{{ url('/news') }}" class="@if($nav == 'news') active @endif">最新信息<i></i></a></li>
					<li><a href="{{ url('/contact') }}" class="@if($nav == 'contact') active @endif">联系我们<i></i></a></li>
				</ul>
			</div>
			<div class="header_menu"></div>
		</div>
	</div><!-- #header -->
	
	
	@yield('content')
	
	
	<div class="wrap" id="footer">
		<div class="container">
			<div class="row footer_nav_row">
				<div class="col-lg-3">
					<ul class="nav nav-primary footer_nav footer_nav_list">
						<li><a href="{{ url('/') }}">首页</a></li>
						<li><a href="{{ url('/case') }}">产品使用案例</a>
							<ul class="list-text cases_list_text">
								<li><a href="/cases/index.html"><small>汽车部件</small></a></li>
								<li><a href="/cases/electronics.html"><small>电子部件</small></a></li>
								<li><a href="/cases/foodmedicine.html"><small>食品·医药品</small></a></li>
								<li><a href="/cases/materials.html"><small>纸·布·薄膜·线材·建材</small></a></li>
								<li><a href="/cases/inspection.html"><small>检查·试验</small></a></li>
								<li><a href="/cases/others.html"><small>其他</small></a></li>
							</ul>
						</li>
						<li><a href="{{ url('/service') }}">服务</a>
							<ul class="list-text">
								<li><a href="{{ url('/service/catalog') }}"><small>综合产品目录</small></a></li>
								<li><a href="{{ url('/service/manual') }}"><small>使用说明书</small></a></li>
								<li><a target="_blank" href="https://linkable.partcommunity.com/3d-cad-models/iai/?info=iai"><small>CAD图纸</small></a></li>
								<li><a href="{{ url('/service/faq') }}"><small>常见问题</small></a></li>
								<li><a href="{{ url('/service/delivery') }}"><small>交货期查询</small></a></li>
								<li><a href="{{ url('/service/settings') }}"><small>现场网络文件</small></a></li>
								<li><a href="{{ url('/service/versionhistory') }}"><small>示教器履历</small></a></li>
								<li><a href="{{ url('/service/others') }}"><small>其他公司相关</small></a></li>
							</ul>
						</li>
						<li><a href="{{ url('/company') }}">公司介绍</a>
							<ul class="list-text cases_list_text">
								<li><a href="{{url('/company/profile')}}"><small>公司概要</small></a></li>
								<li><a href="{{ url('/company/message') }}"><small>致辞</small></a></li>
								<li><a href="{{ url('/company/history') }}"><small>沿革</small></a></li>
							</ul>
						</li>
						<li><a href="{{ url('/contact/privacy') }}">个人信息保护方针</a></li>
					</ul>
				</div>
				<div class="col-lg-3">
					<ul class="nav nav-primary footer_nav footer_nav_list">
						<li class="foot-nav-sp"><a href="{{ url('/product') }}">产品</a>
							<ul class="list-text">
								@foreach ($product_category as $c)
								<li><a href="{{ url('/product?category=' . $c->alias) }}"><small>{{ $c->title }}</small></a></li>
								@endforeach
							</ul>
						</li>
						<li><a href="{{ url('/member/info') }}">会员</a>
							<ul class="list-text cases_list_text">
								<li><a href="{{ url('/auth/login') }}"><small>会员登陆</small></a></li>
								<li><a href="{{ url('/regist') }}"><small>会员注册</small></a></li>
								<li><a href="{{ url('/member/info') }}"><small>我的页面</small></a></li>
							</ul>
						</li>
						<li><a href="{{ url('/contact') }}">联系我们</a></li>
						<li><a href="{{ url('/news') }}">最新信息</a></li>
						<li><a href="{{ url('/faq') }}">常见问题</a></li>
					</ul>
				</div>
				
				<div class="footer_company">
					<div class="footer_company_logo"></div>
					<p class="footer_company_text pc_tel">上海总公司&nbsp;&nbsp;&nbsp;&nbsp;021-6448-4753</p>
					<p class="footer_company_text sp_tel">上海总公司&nbsp;&nbsp;&nbsp;&nbsp;<a href="tel:021-6448-4753">021-6448-4753</a></p>
					<p class="footer_company_text pc_tel">免费咨询电话：800-988-1597</p>
					<p class="footer_company_text sp_tel">免费咨询电话：<a href="tel:800-988-1597">800-988-1597</a></p>
					<p class="footer_company_text">Email：<a href="mailto:shanghai@iai-robot.com">shanghai@iai-robot.com</a></p>
					<div class="row footer_tel">
						<div class="col-lg-7">
							<p class="pc_tel">深圳分公司<br/>0755-2393-2307</p>
							<p class="sp_tel">深圳分公司<br/><a href="tel:0755-2393-2307">0755-2393-2307</a></p>
							<p><a href="mailto:shenzhen@iai-robot.com">shenzhen@iai-robot.com</a></p>
						</div>
						<div class="col-lg-5">
							<p class="pc_tel">北京分公司<br/>010-6500-1707</p>
							<p class="sp_tel">北京分公司<br/><a href="tel:010-6500-1707">010-6500-1707</a></p>
							<p><a href="mailto:beijing@iai-robot.com">beijing@iai-robot.com</a></p>
						</div>
					</div>
					
				</div>
			</div>
			<div class="row">
				<div class="col-lg-7 copyright">
					<p>&copy; IAI Shanghi Co.,Ltd. All Rights Reserved.</p>
				</div>
				<div class="col-lg-5 portal">
					<img src="http://www.beian.gov.cn/img/ghs.png"/>
					<span>沪公网安备 31010402002510号&nbsp;&nbsp;&nbsp;&nbsp;</span>
					<span>沪ICP备15008055号-1</span>
				</div>
			</div>
		</div>
	</div><!-- #footer -->
	
	<div class="mask"></div>
	<div class="sp_menu">
		<div class="row footer_nav_row">
			<ul class="nav nav-primary footer_nav footer_nav_list">
				<li><a href="{{ url('auth/login') }}">登录</a><i></i></li>
				<li><a href="{{ url('/') }}">首页</a><i></i></li>
				<li>
					<a href="{{ url('/product') }}">产品</a><i></i>
				</li>
				<li>
					<a href="{{ url('/case') }}">产品使用案例</a><i></i>
				</li>
				<li>
					<a href="{{ url('/service') }}">服务</a><i></i>
				</li>
				<li><a href="{{ url('/news') }}">最新信息</a><i></i></li>
				<li><a href="{{ url('/service/faq') }}">常见问题</a><i></i></li>
				<li><a href="{{ url('/company') }}">公司介绍</a><i></i></li>
				<li><a href="{{ url('/contact') }}">联系我们</a><i></i></li>
				<li><a href="javascript:;">产品搜索</a><i></i></li>
				<li><a href="{{ url('/contact/privacy') }}">个人信息保护方针</a></li>
			</ul>
		</div>
		<i class="closed_btn"></i>
	</div>

	<script src="{{ asset('js/client/jquery-1.11.2.min.js') }}"></script>
	<script src="{{ asset('js/client/jquery.tmpl.min.js') }}"></script>
	<script src="{{ asset('js/client/common.js') }}"></script>
	@section('script')
    @show
    
    <!-- google-analytics -->
	<script type="text/javascript">
		var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
		document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
		
		try {
			var pageTracker = _gat._getTracker("UA-6472735-3");
			pageTracker._trackPageview();
		} catch(err) {}
	</script>
	<!-- google-analytics -->

	<script type="text/javascript">
		var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
		document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F2fdeda9c02bc2241dce652ff27891639' type='text/javascript'%3E%3C/script%3E"));
	
		var hmt = hmt || [];
		(function() {  var hm = document.createElement("script");  hm.src = "https://hm.baidu.com/hm.js?a40ddf324d1e35c4b8f554005b7e7a40";  var s = document.getElementsByTagName("script")[0];   s.parentNode.insertBefore(hm, s);})();
	</script>
</body>
</html>