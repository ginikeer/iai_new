@section('title') IAI－艾卫艾商贸(上海)有限公司－ ｜ 小工具下载 @stop

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
				<li>小工具下载</li>
			</ul>
		</div>
	</div>
	<div class="container">
		<h2>小工具下载</h2>
		<hr>
		<h3>示教器版本履历</h3>
		<div class="service-list" style="margin-bottom: 30px;">
			<div class="service-list-item">
				<div class="row row-no-offset">
					<div class="col-lg-8"><big>示教器版本履历</big></div>
					<div class="col-lg-4 text-right">
						<a href="{{ url('service/history-download?l=CN&t=history&n=teaching') }}" target="_blank" class="btn btn-red btn-xs">点击下载</a>
					</div>
				</div>
			</div>
		</div>
		
		<h3>节拍计算工具</h3>
		<div class="service-list">
			<div class="service-list-item">
				<div class="row row-no-offset">
					<div class="col-lg-8"><big>01_TANJIKU_RC-1(Normal-Spec)</big></div>
					<div class="col-lg-4 text-right">
						<a href="{{ asset('pdf/client/versionhistory/01_TANJIKU_RC-1(Normal-Spec).xls') }}" download="{{ asset('pdf/client/versionhistory/01_TANJIKU_RC-1(Normal-Spec).xls') }}" target="_blank" class="btn btn-red btn-xs">点击下载</a>
					</div>
				</div>
			</div>
			<div class="service-list-item">
				<div class="row row-no-offset">
					<div class="col-lg-8"><big>02_TANJIKU_RC-2(High-Spec)</big></div>
					<div class="col-lg-4 text-right">
						<a href="{{ asset('pdf/client/versionhistory/02_TANJIKU_RC-2(High-Spec).xls') }}" download="{{ asset('pdf/client/versionhistory/02_TANJIKU_RC-2(High-Spec).xls') }}" target="_blank" class="btn btn-red btn-xs">点击下载</a>
					</div>
				</div>
			</div>
			<div class="service-list-item">
				<div class="row row-no-offset">
					<div class="col-lg-8"><big>03_TANJIKU_RC-2(Normal-Spec)</big></div>
					<div class="col-lg-4 text-right">
						<a href="{{ asset('pdf/client/versionhistory/03_TANJIKU_RC-2(Normal-Spec).xls') }}" download="{{ asset('pdf/client/versionhistory/03_TANJIKU_RC-2(Normal-Spec).xls') }}" target="_blank" class="btn btn-red btn-xs">点击下载</a>
					</div>
				</div>
			</div>
			<div class="service-list-item">
				<div class="row row-no-offset">
					<div class="col-lg-8"><big>04_RC-24VSERVO(High-Spec)</big></div>
					<div class="col-lg-4 text-right">
						<a href="{{ asset('pdf/client/versionhistory/04_RC-24VSERVO(High-Spec).xls') }}" download="{{ asset('pdf/client/versionhistory/04_RC-24VSERVO(High-Spec).xls') }}" target="_blank" class="btn btn-red btn-xs">点击下载</a>
					</div>
				</div>
			</div>
			<div class="service-list-item">
				<div class="row row-no-offset">
					<div class="col-lg-8"><big>05_RC-24VSERVO(Normal-Spec)</big></div>
					<div class="col-lg-4 text-right">
						<a href="{{ asset('pdf/client/versionhistory/05_RC-24VSERVO(Normal-Spec).xls') }}" download="{{ asset('pdf/client/versionhistory/05_RC-24VSERVO(Normal-Spec).xls') }}" target="_blank" class="btn btn-red btn-xs">点击下载</a>
					</div>
				</div>
			</div>
			<div class="service-list-item">
				<div class="row row-no-offset">
					<div class="col-lg-8"><big>06_RC-PULSE-1(Normal-Spec)</big></div>
					<div class="col-lg-4 text-right">
						<a href="{{ asset('pdf/client/versionhistory/06_RC-PULSE-1(Normal-Spec).xls') }}" download="{{ asset('pdf/client/versionhistory/06_RC-PULSE-1(Normal-Spec).xls') }}" target="_blank" class="btn btn-red btn-xs">点击下载</a>
					</div>
				</div>
			</div>
			<div class="service-list-item">
				<div class="row row-no-offset">
					<div class="col-lg-8"><big>07_RC-PULSE-2(High-Spec)</big></div>
					<div class="col-lg-4 text-right">
						<a href="{{ asset('pdf/client/versionhistory/07_RC-PULSE-2(High-Spec).xls') }}" download="{{ asset('pdf/client/versionhistory/07_RC-PULSE-2(High-Spec).xls') }}" target="_blank" class="btn btn-red btn-xs">点击下载</a>
					</div>
				</div>
			</div>
			<div class="service-list-item">
				<div class="row row-no-offset">
					<div class="col-lg-8"><big>08_RC-PULSE-2(Normal-Spec)</big></div>
					<div class="col-lg-4 text-right">
						<a href="{{ asset('pdf/client/versionhistory/08_RC-PULSE-2(Normal-Spec).xls') }}" download="{{ asset('pdf/client/versionhistory/08_RC-PULSE-2(Normal-Spec).xls') }}" target="_blank" class="btn btn-red btn-xs">点击下载</a>
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