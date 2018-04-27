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
				<li>最新消息</li>
			</ul>
		</div>
	</div>
	<div class="container">
		<div class="card bg-gary">
			<div class="news_list">
				<div class="news_left">
					<h3 class="news_title">
							<a href="{{ url('/news/detail') }}">IAI 2017综合产品目录正式上线！</a>
						</h3>
					<div>
						<span class="news_type news_type_company">公司动态</span>
						<span class="news_date">2017-11-21</span>
					</div>
					<p class="news_abstract">具备丰富的产品阵容，能帮助您更迅速了解IAI各款电缸产品的性能及选型等相关操作指南。 欢迎下载选购 http://iai-robot.com/download/catalog.php </p>
				</div>
				<div class="news_right">
					<a href="news_detail.html"><img src="{{ asset('i/client/news/news-1.jpg') }}" /></a>
				</div>
			</div>
		</div>
		<div class="card bg-gary">
			<div class="news_list">
				<div class="news_left">
					<h3 class="news_title">
							<a href="{{ url('/news/detail') }}">【重要】XSEL-J/JX停产通知</a>
						</h3>
					<div>
						<span class="news_type news_type_product">产品发布</span>
						<span class="news_date">2017-11-23</span>
					</div>
					<p class="news_abstract">万分抱歉，由于敝司工作上的纰漏，2017综合产品目录封底中刊载的深圳分公司的联系电话有误。 正确号码为0755-2393-2307，敬请注意。 </p>
				</div>
				<div class="news_right">
					<a href="{{ url('/news/detail') }}"><img src="{{ asset('i/client/news/news-2.jpg') }}" /></a>
				</div>
			</div>
		</div>
		<div class="card bg-gary">
			<div class="news_list">
				<div class="news_left">
					<h3 class="news_title">
							<a href="##">【重要】XSEL-J/JX停产通知</a>
						</h3>
					<div>
						<span class="news_type news_type_product">产品发布</span>
						<span class="news_date">2017-11-23</span>
					</div>
					<p class="news_abstract">万分抱歉，由于敝司工作上的纰漏，2017综合产品目录封底中刊载的深圳分公司的联系电话有误。 正确号码为0755-2393-2307，敬请注意。 </p>
				</div>
				<div class="news_right">
				</div>
			</div>
		</div>
	</div>
</div>



@endsection

@section('script')
<script type="text/javascript" src="{{ asset('js/client/news.js') }}"></script>
@stop