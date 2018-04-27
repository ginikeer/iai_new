@section('title') IAI－艾卫艾商贸(上海)有限公司－ ｜ 产品使用案例 @stop

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
				<li>
					<a href="{{ url('/service') }}">服务</a>
				</li>
				<li>电脑联机软件版本履历/示教器履历下载</li>
			</ul>
		</div>
	</div>
	<div class="container">
		<h2>电脑联机软件版本履历/示教器履历下载</h2>
		<hr>
		<h3>示教器版本履历</h3>
		<div class="service-list">
			<div class="service-list-item">
				<div class="row row-no-offset">
					<div class="col-lg-8"><big>示教器版本履历</big></div>
					<div class="col-lg-4 text-right">
						<a href="##" target="_blank" class="btn btn-red btn-xs">点击下载</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



@endsection

@section('script')
<script type="text/javascript" src="{{ asset('js/client/service.js') }}"></script>
@stop