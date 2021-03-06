@section('title') IAI－艾卫艾商贸(上海)有限公司－ ｜ 服务 @stop

@section('style')
<link rel="stylesheet" href="{{ asset('css/client/service.css') }}"/>
@stop

@extends('master/client')
@section('content')
	

<div class="wrap service_warp" id="service_main">
	<div class="row crumb">
		<div class="container">
			<ul class="breadcrumb">
				<li>
					<a href="{{ url('/') }}">首页</a>
				</li>
				<li>服务</li>
			</ul>
		</div>
	</div>
	<div class="container service-list-container">
		<div class="row service-row">
			<div class="col-lg-2-5">
				<a href="{{ url('/service/catalog') }}">
					<div class="service-img">
						<img src="{{ asset('/i/client/home/download_01.png') }}" />
					</div>
					<h4>综合产品目录</h4>
				</a>
			</div>
			<div class="col-lg-2-5">
				<a href="{{ url('/service/manual') }}">
					<div class="service-img">
						<img src="{{ asset('/i/client/home/download_02.png') }}" />
					</div>
					<h4>使用说明书</h4>
				</a>
			</div>
			<div class="col-lg-2-5">
				<a target="_blank" href="https://linkable.partcommunity.com/3d-cad-models/iai/?info=iai">
					<div class="service-img">
						<img src="{{ asset('/i/client/home/download_03.png') }}" />
					</div>
					<h4>CAD图纸</h4>
				</a>
			</div>
			<div class="col-lg-2-5">
				<a href="{{ url('/service/faq') }}">
					<div class="service-img">
						<img src="{{ asset('/i/client/home/download_04.png') }}" />
					</div>
					<h4>常见问题</h4>
				</a>
			</div>
			<div class="col-lg-2-5">
				<a href="{{ url('/service/delivery') }}">
					<div class="service-img">
						<img src="{{ asset('/i/client/home/download_05.png') }}" />
					</div>
					<h4>交货期查询</h4>
				</a>
			</div>
			<div class="col-lg-2-5">
				<a href="{{ url('/service/settings') }}">
					<div class="service-img">
						<img src="{{ asset('/i/client/home/download_06.png') }}" />
					</div>
					<h4>现场网络设置用数据</h4>
				</a>
			</div>
			<div class="col-lg-2-5">
				<a href="{{ url('/service/versionhistory') }}">
					<div class="service-img">
						<img src="{{ asset('/i/client/home/download_07.png') }}" />
					</div>
					<h4>小工具下载</h4>
				</a>
			</div>
			<div class="col-lg-2-5">
				<a href="{{ url('/service/others') }}">
					<div class="service-img">
						<img src="{{ asset('/i/client/home/download_08.png') }}" />
					</div>
					<h4>和其他公司产品连接•通信的相关信息</h4>
				</a>
			</div>
		</div>
	</div>
</div>



@endsection

@section('script')
<script type="text/javascript" src="{{ asset('js/client/service.js') }}"></script>
@stop