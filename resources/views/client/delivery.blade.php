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
				<li>交货期查询</li>
			</ul>
		</div>
	</div>
	<div class="container">
		<!-- InstanceBeginEditable name="main" -->
		<div class="color-white">
        <h1>预定出货日</h1>
        <iframe id="myFrame" name="myFrame" src="http://www.iai-robot.co.jp/delivery/asp_ch/delivery_ch.asp" width="100%" height="900" frameborder="0"></iframe>
		</div>
		<!-- InstanceEndEditable -->
	</div>
</div>



@endsection

@section('script')
<script type="text/javascript" src="{{ asset('js/client/service.js') }}"></script>
@stop