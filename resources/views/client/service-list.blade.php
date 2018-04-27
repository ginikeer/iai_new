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
	<div class="container">
		<div class="row service-row">
			<div class="col-lg-2-5">
				<a href="{{ url('/service/testmachine') }}">
					<div class="service-img">
						<img src="{{ asset('i/client/service/service-1.png') }}" />
					</div>
					<h4>快速试机指南</h4>
				</a>
			</div>
			<div class="col-lg-2-5">
				<a href="{{ url('/service/guide') }}">
					<div class="service-img">
						<img src="{{ asset('i/client/service/service-2.png') }}" />
					</div>
					<h4>初次操作指南</h4>
				</a>
			</div>
			<div class="col-lg-2-5">
				<a href="{{ url('/service/manual') }}">
					<div class="service-img">
						<img src="{{ asset('i/client/service/service-3.png') }}" />
					</div>
					<h4>使用说明书</h4>
				</a>
			</div>
			<div class="col-lg-2-5">
				<a href="{{ url('/service/catalog') }}">
					<div class="service-img">
						<img src="{{ asset('i/client/service/service-4.png') }}" />
					</div>
					<h4>产品目录</h4>
				</a>
			</div>
			<div class="col-lg-2-5">
				<a href="{{ url('/service/settings') }}">
					<div class="service-img">
						<img src="{{ asset('i/client/service/service-5.png') }}" />
					</div>
					<h4>现场网络设置用数据</h4>
				</a>
			</div>
			<div class="col-lg-2-5">
				<a href="{{ url('/service/versionhistory') }}">
					<div class="service-img">
						<img src="{{ asset('i/client/service/service-6.png') }}" />
					</div>
					<h4>电脑联机软件版本履历/示教器履历下载</h4>
				</a>
			</div>
			<div class="col-lg-2-5">
				<a href="{{ url('/service/others') }}">
					<div class="service-img">
						<img src="{{ asset('i/client/service/service-7.png') }}" />
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