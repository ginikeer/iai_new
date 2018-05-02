@section('title') IAI－艾卫艾商贸(上海)有限公司－ ｜ 产品使用案例 @stop

@extends('master/client')
@section('content')
	

<div class="wrap service_warp">
	<div class="row crumb">
		<div class="container">
			<ul class="breadcrumb">
				<li>
					<a href="{{ url('/') }}">首页</a>
				</li>
				<li>联系我们</li>
			</ul>
		</div>
	</div>
	<div class="container">
		<div class="color-white">
			<h1>联系我们</h1>
			<hr>
			<div class="row">
				<div class="col-lg-12">
					<h3>艾卫艾商贸(上海)有限公司</h3>
					<div class="list-lined">
						<div class="list-item">
							<div class="row">
								<div class="col-lg-2">地址</div>
								<div class="col-lg-10">上海市虹桥路808号 加华商务中心A栋8303室</div>
							</div>
						</div>
						<div class="list-item">
							<div class="row">
								<div class="col-lg-2">邮编</div>
								<div class="col-lg-10">200030</div>
							</div>
						</div>
						<div class="list-item">
							<div class="row">
								<div class="col-lg-2">TEL</div>
								<div class="col-lg-10">021-6448-4753</div>
							</div>
						</div>
						<div class="list-item">
							<div class="row">
								<div class="col-lg-2">FAX</div>
								<div class="col-lg-10">021-6448-3992</div>
							</div>
						</div>
						<div class="list-item">
							<div class="row">
								<div class="col-lg-2">Email</div>
								<div class="col-lg-10"><a href="m&#97;ilto&#58;sh&#97;ng&#104;a&#105;&#64;&#105;a&#105;-&#114;ob&#111;&#116;.c&#111;m">&#115;&#104;&#97;ng&#104;&#97;i&#64;ia&#105;&#45;&#114;&#111;b&#111;&#116;.&#99;o&#109;</a></div>
							</div>
						</div>
					</div>
					<div class="embedded embedded-bmap">
						<div class="embedded-inner">
							<div class="bmap" id="bmap-1"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<h3>深圳分公司</h3>
					<div class="list-lined">
						<div class="list-item">
							<div class="row">
								<div class="col-lg-2">地址</div>
								<div class="col-lg-10">广东省深圳市福田区车公庙泰然工贸园泰然四路212栋502室</div>
							</div>
						</div>
						<div class="list-item">
							<div class="row">
								<div class="col-lg-2">邮编</div>
								<div class="col-lg-10">518040</div>
							</div>
						</div>
						<div class="list-item">
							<div class="row">
								<div class="col-lg-2">TEL</div>
								<div class="col-lg-10">0755-2393-2307</div>
							</div>
						</div>
						<div class="list-item">
							<div class="row">
								<div class="col-lg-2">FAX</div>
								<div class="col-lg-10">0755-2393-2432</div>
							</div>
						</div>
						<div class="list-item">
							<div class="row">
								<div class="col-lg-2">Email</div>
								<div class="col-lg-10"><a href="&#109;ailto&#58;&#115;henz&#104;en&#64;iai&#45;r&#111;bot&#46;c&#111;&#109;">&#115;&#104;&#101;nz&#104;&#101;n&#64;i&#97;i-ro&#98;&#111;&#116;.&#99;o&#109;</a></div>
							</div>
						</div>
					</div>
					<div class="embedded embedded-bmap">
						<div class="embedded-inner">
							<div class="bmap" id="bmap-2"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<h3>北京分公司</h3>
					<div class="list-lined">
						<div class="list-item">
							<div class="row">
								<div class="col-lg-2">地址</div>
								<div class="col-lg-10">北京市朝阳区麦子店街36号龙宝大厦305室</div>
							</div>
						</div>
						<div class="list-item">
							<div class="row">
								<div class="col-lg-2">邮编</div>
								<div class="col-lg-10">100020</div>
							</div>
						</div>
						<div class="list-item">
							<div class="row">
								<div class="col-lg-2">TEL</div>
								<div class="col-lg-10">010-6500-1707</div>
							</div>
						</div>
						<div class="list-item">
							<div class="row">
								<div class="col-lg-2">FAX</div>
								<div class="col-lg-10">010-6500-2607</div>
							</div>
						</div>
						<div class="list-item">
							<div class="row">
								<div class="col-lg-2">Email</div>
								<div class="col-lg-10"><a href="mail&#116;o&#58;b&#101;i&#106;in&#103;&#64;i&#97;&#105;-&#114;o&#98;o&#116;&#46;com">be&#105;j&#105;n&#103;&#64;i&#97;i&#45;r&#111;&#98;ot&#46;com</a></div>
							</div>
						</div>
					</div>
					<div class="embedded embedded-bmap">
						<div class="embedded-inner">
							<div class="bmap" id="bmap-3"></div>
						</div>
					</div>
				</div>
			</div>
		</div><!-- #main -->
	</div>
</div>



@endsection

@section('script')
<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=25ed4b581d617c933999a7ea31860244"></script>
<script type="text/javascript" src="{{ asset('js/client/bmap-embedded.js') }}"></script>
@stop