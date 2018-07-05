@section('title') IAI－艾卫艾商贸(上海)有限公司－ ｜ 最新消息 @stop

@section('style')
<link rel="stylesheet" href="{{ asset('css/client/news.css') }}"/>
@stop

@extends('master/client')
@section('content')
	

<div class="wrap" id="news_main">
	<div class="row crumb">
		<div class="container">
			<ul class="breadcrumb">
				<li>
					<a href="{{ url('/') }}">首页</a>
				</li>
				<li>最新消息</li>
			</ul>
		</div>
	</div>
	<div class="container">
		@foreach ($news as $n)
		<div class="card bg-gary">
			<div class="news_list">
				<a href="@if(empty($n->pdf_name)) {{ url('/news/detail/' . $n->id) }} @else {{ NEWS_PDF_PATH . $n->pdf_name }} @endif">
					<div class="news_left">
						<h3 class="news_title">{{ $n->title }}</h3>
						<div>
							<span class="news_type" style="background: {{ $n->category_background }}">{{ $n->category }}</span>
							<span class="news_date">{{ $n->date }}</span>
						</div>
						<p class="news_abstract">{{ $n->abstract }}</p>
					</div>
					@if(!empty($n->cover_image_name))
					<div class="news_right">
						<img src="{{ NEWS_IMG_PATH . $n->cover_image_name }}" />
					</div>
					@endif
				</a>
			</div>
		</div>
		@endforeach
	</div>
</div>



@endsection

@section('script')
<script type="text/javascript" src="{{ asset('js/client/news.js') }}"></script>
@stop