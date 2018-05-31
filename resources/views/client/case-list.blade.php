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
					<a href="index.html">首页</a>
				</li>
				<li>产品使用案例</li>
			</ul>
		</div>
	</div>
	<div class="container">
		<div>
			<div class="row sortNav clear">
				<div class="sortNavBtn filter-tag" data-id="0">
					<p><span>最新</span></p>
				</div>
				@foreach ($tag as $t)
				<div class="sortNavBtn filter-tag" data-id="{{ $t->id }}">
					<p><span>{{ $t->title }}</span></p>
				</div>
				@endforeach
			</div>
			<div class="row case_row">
				<div class="row" id="gallery-content-center">
					@foreach ($case as $c)
					<div class="col-lg-3 all tag-{{ $c->primary_tag }}">
						<a class="case_img" href="{{ url('/case/detail/' . $c->id) }}">
							<img src="{{ CASE_IMG_PATH . $c->cover_image_name }}">
						</a>
						<div class="case_text">
							<p>
								<a href="{{ url('/case/detail/' . $c->id) }}">{{ $c->title }}</a>
								<span>{!! $c->description !!}</span>
							</p>
							<div class="case-tag">
								@foreach ($c->tags as $tag)
									@if($tag->type == '行业')
										<span class="case-tag-1">{{ $tag->title }}</span>
									@elseif($tag->type == '工程')
										<span class="case-tag-2">{{ $tag->title }}</span>
									@endif
								@endforeach
							</div>
						</div>
					</div>
					@endforeach
					
				</div>
			</div>
		</div>

	</div>
</div>



@endsection

@section('script')
<script type="text/javascript" src="{{ asset('js/client/case.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/client/jquery-ui-1.10.4.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/client/jquery.isotope.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/client/animated-masonry-gallery.js') }}"></script>
@stop