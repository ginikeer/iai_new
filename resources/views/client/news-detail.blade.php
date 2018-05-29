@section('title') IAI－艾卫艾商贸(上海)有限公司－ ｜{{ $news->title }} @stop

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
				<li><a href="{{ url('/news') }}">最新消息</a></li>
				<li>{{ $news->title }}</li>
			</ul>
		</div>
	</div>
	<div class="container">
		<div class="">
			<div class="news_list">
				<div class="news_left">
					<h3 class="news_title news_detail_title">
						<a href="javascript:;">{{ $news->title }}</a>
					</h3>
					<div class="sub_title">
						<span class="news_type" style="background: {{ $news->category_background }}">{{ $news->category }}</span>
						<span class="news_date">{{ $news->date }}</span>
					</div>
					<div class="article-content">{!! $news->content !!}</div>
					
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('script')
<script type="text/javascript" src="{{ asset('js/client/news.js') }}"></script>
@stop