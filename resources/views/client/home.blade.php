@section('title') IAI－艾卫艾商贸(上海)有限公司 @stop

@section('style')
<link rel="stylesheet" href="{{ asset('css/client/jquery.bxslider.css') }}"/>
<link rel="stylesheet" href="{{ asset('css/client/home.css') }}"/>
@stop

@extends('master/client')
@section('content')
	<div class="wrap" id="bxslider">
		<ul class="bxslider">
			<li class="slider slider1">
				<a href="##">
					<img class="bg pc-only" src="{{ asset('i/client/home/top_slider01.jpg') }}" alt="" />
					<img class="bg sp-only" src="{{ asset('i/client/home/sp_top_slider01.jpg') }}" alt="" />
				</a>
				<a class="slider-btn" target="_blank" href="{{ asset('pdf/client/product/e电缸_CC0250-3A.pdf') }}">
					<img src="{{ asset('i/client/home/slider_button.png') }}" alt="" />
				</a>
				<a class="slider-btn slider-btn-2" target="_blank" href="http://ec-sentei.iai-robot.com/">
					<img src="{{ asset('i/client/home/slider_ecbutton.png') }}" alt="" />
				</a>
			</li>
			<li class="slider slider2">
				<a href="{{ url('/product/grs') }}">
					<img class="bg pc-only" src="{{ asset('i/client/home/top_slider06.jpg') }}" alt="" />
					<img class="bg sp-only" src="{{ asset('i/client/home/sp_top_slider06.jpg') }}" alt="" />
				</a>
				<a class="slider-btn" target="_blank" href="{{ asset('pdf/client/product/GRS(CC0258-1A)_web.pdf') }}">
					<img src="{{ asset('i/client/home/slider_button.png') }}" alt="" />
				</a>
			</li>
			<li class="slider slider3">
				<a href="{{ url('/product/new') }}">
					<img class="bg pc-only" src="{{ asset('i/client/home/top_slider05.jpg') }}" alt="" />
					<img class="bg sp-only" src="{{ asset('i/client/home/sp_top_slider05.jpg') }}" alt="" />
				</a>
				<a class="slider-btn" target="_blank" href="{{ asset('pdf/client/product/RCON样本.pdf') }}">
					<img src="{{ asset('i/client/home/slider_button.png') }}" alt="" />
				</a>
			</li>
			<li class="slider slider4">
				<a href="##">
					<img class="bg pc-only" src="{{ asset('i/client/home/top_slider02.jpg') }}" alt="" />
					<img class="bg sp-only" src="{{ asset('i/client/home/sp_top_slider02.jpg') }}" alt="" />
				</a>
				<a class="slider-btn" target="_blank" href="{{ asset('pdf/client/product/RCS4_CC0255-1A.pdf') }}">
					<img src="{{ asset('i/client/home/slider_button.png') }}" alt="" />
				</a>
			</li>
			<li class="slider slider5">
				<a href="##">
					<img class="bg pc-only" src="{{ asset('i/client/home/top_slider03.jpg') }}" alt="" />
					<img class="bg sp-only" src="{{ asset('i/client/home/sp_top_slider03.jpg') }}" alt="" />
				</a>
				<a class="slider-btn" target="_blank" href="{{ asset('pdf/client/product/TB-03(CC0254-1A-1).pdf') }}">
					<img src="{{ asset('i/client/home/slider_button.png') }}" alt="" />
				</a>
			</li>
			<li class="slider slider6">
				<a href="##">
					<img class="bg pc-only" src="{{ asset('i/client/home/top_slider04.jpg') }}" alt="" />
					<img class="bg sp-only" src="{{ asset('i/client/home/sp_top_slider04.jpg') }}" alt="" />
				</a>
				<a class="slider-btn" target="_blank" href="{{ asset('pdf/client/product/IXA_CC0256-1A.pdf') }}">
					<img src="{{ asset('i/client/home/slider_button.png') }}" alt="" />
				</a>
			</li>
		</ul>
	</div>

	<div class="wrap" id="mian_product">
		<h2 class="mian_title product_title"><span><!--PRODUCT--></span></h2>
		<div class="container">
			<div class="row row-no-offset row-case">
				<div class="col-lg-2 mian_product_list mian_product_img mian_product_new">
					<div class="hover-bg"></div>
					<a href="http://ec-sentei.iai-robot.com/" target="_blank">
						<p class="case-cover case-cover-img">
							<img src="{{ asset('i/client/home/category_17.png') }}" />
						</p>
					</a>
				</div>
				<div class="col-lg-2 mian_product_list mian_product_img mian_product_new">
					<div class="hover-bg"></div>
					<a href="{{ url('/product?n=new') }}">
						<p class="case-cover case-cover-img">
							<img src="{{ asset('i/client/home/category_01.png') }}" />
						</p>
					</a>
				</div>
				@foreach ($category as $c)
				<div class="col-lg-2 mian_product_list">
					<div class="hover-bg"></div>
					<a href="{{ url('/product?category=' . $c->alias) }}">
						<p class="case-cover">
							<img src="{{ asset('i/client/home/category_' . $c->alias . '.jpg') }}" />
						</p>
						<p class="case-description">{{ $c->title }}</p>
					</a>
				</div>
				@endforeach
			</div>
		</div>
	</div><!-- #mian_product -->

	<div class="wrap" id="mian_download">
		<h2 class="mian_title download_title"><span><!--DOWNLOAD--></span></h2>
		<!--<p class="download_text">文字文字文字文字文字文字文字文字文字文字文字文字</p>-->
		<div class="container">
			<div class="row row-no-offset row-case">
				<div class="col-lg-3">
					<a href="{{ url('/service/catalog') }}">
						<p>综合产品目录</p>
					</a>
				</div>
				<div class="col-lg-3">
					<a href="{{ url('/service/manual') }}">
						<p>使用说明书</p>
					</a>
				</div>
				<div class="col-lg-3">
					<a target="_blank" href="https://linkable.partcommunity.com/3d-cad-models/iai/?info=iai">
						<p>CAD图纸</p>
					</a>
				</div>
				<div class="col-lg-3">
					<a href="{{ url('/service/faq') }}">
						<p>常见问题</p>
					</a>
				</div>
				<div class="col-lg-3">
					<a href="{{ url('/service/delivery') }}">
						<p>交货期查询</p>
					</a>
				</div>
				<div class="col-lg-3">
					<a href="{{ url('/service/settings') }}">
						<p>现场网络文件</p>
					</a>
				</div>
				<div class="col-lg-3">
					<a href="{{ url('/service/versionhistory') }}">
						<p>示教器履历</p>
					</a>
				</div>
				<div class="col-lg-3">
					<a href="{{ url('/service/others') }}">
						<p>其他公司相关 </p>
					</a>
				</div>
			</div>
		</div>
	</div><!-- #mian_download -->

	<div class="wrap" id="mian_news">
		<h2 class="mian_title news_title"><span><!--NEWS--></span></h2>
		<div class="container">
			@foreach ($news as $n)
			<div class="row row-case news_row">
				<div class="col-lg-2">{{ $n->date }}</div>
				<div class="col-lg-1" style="background: {{ $n->category_background }}"><span>{{ $n->category }}</span></div>
				<div class="col-lg-7">
					<a href="@if(empty($n->pdf_name)) {{ url('/news/detail/' . $n->id) }} @else {{ NEWS_PDF_PATH . $n->pdf_name }} @endif">{{ $n->title }}</a>
				</div>
			</div>
			@endforeach
			<div class="row news_more_row">
				<a href="{{ url('/news') }}" class="news_more">查看更多</a>
			</div>
		</div>
	</div><!-- #mian_news -->

	<div class="wrap" id="mian_case">
		<h2 class="mian_title case_title"><span><!--CASE STUDIES--></span></h2>
		<div class="container">
			<div class="row row-no-offset row-case case_row">
				@foreach ($case as $c)
				<div class="col-lg-3">
					<a href="{{ url('/case/detail/' . $c->id) }}">
						<img src="{{ CASE_IMG_PATH . $c->cover_image_name }}" />
					</a>
					<p class="case_text">
						<a href="{{ url('/case/detail/' . $c->id) }}">{{ $c->title }}</a>
						<span>{!! $c->description !!}</span>
					</p>
					<!--<span>検査・試験</span>-->
				</div>
				@endforeach
			</div>
			<div class="row news_more_row">
				<a href="{{ url('/case') }}" class="news_more">产品案例一览</a>
			</div>
		</div>
	</div><!-- #mian_case -->
@endsection

@section('script')
<script type="text/javascript" src="{{ asset('js/client/jquery.bxslider.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/client/home.js') }}"></script>
@stop




