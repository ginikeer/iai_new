@section('title') IAI－艾卫艾商贸(上海)有限公司－ ｜ 产品使用案例 @stop

@section('style')
<link rel="stylesheet" href="{{ asset('css/client/case.css') }}"/>
@stop

@extends('master/client')
@section('content')
	

<div class="wrap service_warp">
	<div class="row crumb">
		<div class="container">
			<ul class="breadcrumb">
				<li>
					<a href="{{ url('/') }}">首页</a>
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
						@foreach ($tags as $t)
							@if($t->type == '行业') 
								<span class="case-tag-1">{{ $t->title }}</span>
							@endif
						@endforeach
					</dd>
					<dt style="display: none;">工程</dt>
					<dd style="display: none;">
						@foreach ($tags as $t)
							@if($t->type == '工程') 
								<span class="case-tag-2">{{ $t->title }}</span>
							@endif
						@endforeach
					</dd>
				</dl>
				<div class="case-text">
					<img src="{{ asset('i/client/case/' . $logo) }}" style="display: none;">
					<p class="fontBold">
						{{ $sub_title[0] or '' }}<br>
						<strong style="font-size:160%;">{{ $sub_title[1] or '' }}</strong>
					</p>
				</div>
				@if(isset($case->video_name))
				<div class="case-movie">
					<div class="case-movie-inner">
						<video controls="controls" autoplay="autoplay" loop="loop" width="480">
							<source src="{{ CASE_VIDEO_PATH . $case->video_name }}">
						</video>
						<!--<video autoplay="autoplay" src="{{ CASE_VIDEO_PATH . $case->video_name }}" controls="controls" loop="loop"></video>-->
						<!--<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="240" height="180">
								<param name="movie" value="{{ asset('i/client/case/10.swf') }}">
								<param name="quality" value="high">
								<embed src="{{ asset('i/client/case/10.swf') }}" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="240" height="180">
							</object>-->
					</div>
				</div>
				@endif
				<ul class="case-fe-list clear">
					@foreach ($icons as $icon)
					<li class="fe-list-item">
						<img class="icon-case" src="{{ asset('i/client/case/' . $icon) }}" alt="" />
					</li>
					@endforeach
				</ul>
				<div class="case-article">
					{!! $case->content !!}
				</div>
			</div>
			<div class="col-lg-3">
				<dl class="right_nav">
					<dt>产品使用案例</dt>
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