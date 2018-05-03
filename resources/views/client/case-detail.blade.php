@section('title') IAI－艾卫艾商贸(上海)有限公司－ ｜ 产品使用案例 @stop

@section('style')
<link rel="stylesheet" href="{{ asset('css/client/case.css') }}"/>
@stop

@extends('master/client')
@section('content')
	

<div class="wrap" id="case_main">
	<div class="row crumb">
		<div class="container">
			<ul class="breadcrumb">
				<li>
					<a href="index.html">首页</a>
				</li>
				<li>产品使用案例</li>
			</ul>
		</div>
	</div>
	<div class="container case-detail-row">
		<div class="row ">
			<div class="col-lg-9">
				<dl class="case_type">
					<dt>行业</dt>
					<dd>
						<span class="case-tag-1">汽车部件</span>
					</dd>
					<dt>工程</dt>
					<dd>
						<span class="case-tag-2">定位</span>
					</dd>
				</dl>
				<div class="case-text">
					<img src="{{ asset('i/client/case/logo_01.png') }}">
					<p class="fontBold">
						使用电缸后省去了每个大约40万日元的力度传感器<br>
						<strong style="font-size:160%;">降低了成本</strong>
					</p>
				</div>
				<div class="case-movie">
					<div class="case-movie-inner">
						<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="240" height="180">
								<param name="movie" value="{{ asset('i/client/case/10.swf') }}">
								<param name="quality" value="high">
								<embed src="{{ asset('i/client/case/10.swf') }}" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="240" height="180">
							</object>
					</div>
				</div>
				<ul class="case-fe-list clear">
					<li class="fe-list-item"><i class="icon-case icon-push">推压</i></li>
					<li class="fe-list-item"><i class="icon-case icon-location">推压</i></li>
				</ul>
				<div class="case-article">
					<p>将从射出型注塑机中出来的注塑部件排放至周转箱的装置中,使用上图中的直交机械臂与夹爪型机械手。<br> 此作业以前使用6轴垂直多关节机械手，但使用垂直多关节机械手时，周转箱中的隔板位置稍有偏差，便会造成停顿。采用直交机械机械臂后,对XY方向的微调整变得简单，停顿现象也减少，提高了生产效率。另外，装置的成本也得到了降低。
					</p>
				</div>
			</div>
			<div class="col-lg-3">
				<dl class="right_nav">
					<dt>
						<a href="##">产品使用案例</a>
					</dt>
					<dd class="active">
						<a href="##">滑块型</a>
					</dd>
					<dd>
						<a href="##">拉杆型</a>
					</dd>
					<dd>
						<a href="##">平台型</a>
					</dd>
					<dd>
						<a href="##">线性伺服马达型</a>
					</dd>
					<dd>
						<a href="##">直交机械手</a>
					</dd>
					<dd>
						<a href="##">桌上型机械手</a>
					</dd>
					<dd>
						<a href="##">水平多关节机械手</a>
					</dd>
					<dd>
						<a href="##">伺服压力机</a>
					</dd>
					<dd>
						<a href="##">夹爪型、旋转型</a>
					</dd>
					<dd>
						<a href="##">无尘规格</a>
					</dd>
					<dd>
						<a href="##">防尘・防滴规格</a>
					</dd>
					<dd>
						<a href="##">控制器</a>
					</dd>
					<dd>
						<a href="##">其他</a>
					</dd>
				</dl>
			</div>
		</div>
	</div>
</div>



@endsection

@section('script')
<script type="text/javascript" src="{{ asset('js/client/case.js') }}"></script>
@stop