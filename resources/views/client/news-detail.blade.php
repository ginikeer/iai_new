@section('title') IAI－艾卫艾商贸(上海)有限公司－ ｜ 产品使用案例 @stop

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
				<li>IAI 2017综合产品目录正式上线！</li>
			</ul>
		</div>
	</div>
	<div class="container">
		<div class="">
			<div class="news_list">
				<div class="news_left">
					<h3 class="news_title news_detail_title">
						<a href="javascript:;">IAI 2017综合产品目录正式上线！</a>
					</h3>
					<div class="sub_title">
						<span class="news_type news_type_company">公司动态</span>
						<span class="news_date">2017-11-21</span>
					</div>
					<div class="article-content">
						<p>
							具备丰富的产品阵容，能帮助您更迅速了解IAI各款电缸产品的性能及选型等相关操作指南。具备丰富的产品阵容，能帮助您更迅速了解IAI各款电缸产品的性能及选型等相关操作指南。
							<br />
							欢迎下载选购 http://iai-robot.com/download/catalog.php 
						</p>
						<img src="{{ asset('i/client/news/news-1.jpg') }}" />
						<p>
							具备丰富的产品阵容，能帮助您更迅速了解IAI各款电缸产品的性能及选型等相关操作指南。具备丰富的产品阵容，能帮助您更迅速了解IAI各款电缸产品的性能及选型等相关操作指南。
							<br />
							欢迎下载选购 http://iai-robot.com/download/catalog.php 
						</p>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</div>



@endsection

@section('script')
<script type="text/javascript" src="{{ asset('js/client/news.js') }}"></script>
@stop