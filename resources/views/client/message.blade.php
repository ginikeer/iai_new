@section('title') IAI－艾卫艾商贸(上海)有限公司－ ｜ 致辞 @stop

@section('style')
<link rel="stylesheet" href="{{ asset('css/client/company.css') }}"/>
@stop

@extends('master/client')
@section('content')
	

<div class="wrap service_warp" id="case_main">
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
		<!-- 致辞 name="main" -->
		<div class="color-white" id="speech">
			<h1>致辞</h1>
			<hr>
			<div class="row">
				<div class="col-lg-12">
					<h3>作为一家龙头企业，我们将迈向新的增长领域。</h3>
					<p>“Quality and Innovation”（品质和创新）是IAI公司的声明，我们的经营理念是“提供让客户满意的商品和服务”。</p>
					 <!--<div style="float:right; clear: both;" align="center">
				        <img src="assets/images/photo.jpg" class="photo_img" hspace="0"><h5 class="right">董事长<span>石田彻</span></h5>
				    </div>-->
					<p>客户拥有的自动化设备千差万别。工件的大小、重量、单位时间处理量、移动速度和加速度和控制方法等会因为客户的产业、制造业种和制造工序的不同而不同。我们每年都会开发出很多新机型以满足各类装置、设备的需要。除了驱动轴，还要开发各种类型的控制器。</p>
				    <p>我们开发的机型包括省配线的ROBONET（具备串行通信功能）、具有程序功能的机型、仅具备定位功能的廉价机型，以及获得CE、UL认证等多种机型，能够满足客户各种装置或设备的控制系统的需要。我们的工作职责主要在于提供超出客户期待的产品和服务。</p>
					<p>我们将朝着成为“世界第一的小型工业机械手制造商”这一目标不断迈进。今后也还请各位客户多多支持。</p>
					<p class="right">董事长<span>石田彻</span></p>
				</div>
			</div>
		</div><!-- #main -->
	</div>
</div>



@endsection

@section('script')
<script type="text/javascript" src="{{ asset('js/client/company.js') }}"></script>
@stop