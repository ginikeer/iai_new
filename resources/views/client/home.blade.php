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
				<img class="bg pc-only" src="{{ asset('i/client/home/top_slider01.jpg') }}" alt="" />
				<img class="bg sp-only" src="{{ asset('i/client/home/sp_top_slider01.jpg') }}" alt="" />
				<a class="slider-btn" target="_blank" href="assets/pdf/product/e电缸_CC0250-3A.pdf">
					<img src="{{ asset('i/client/home/slider_button.png') }}" alt="" />
				</a>
			</li>
			<li class="slider slider2">
				<img class="bg pc-only" src="{{ asset('i/client/home/top_slider02.jpg') }}" alt="" />
				<img class="bg sp-only" src="{{ asset('i/client/home/sp_top_slider02.jpg') }}" alt="" />
				<a class="slider-btn" target="_blank" href="assets/pdf/product/RCS4_CC0255-1A.pdf">
					<img src="{{ asset('i/client/home/slider_button.png') }}" alt="" />
				</a>
			</li>
			<li class="slider slider3">
				<img class="bg pc-only" src="{{ asset('i/client/home/top_slider03.jpg') }}" alt="" />
				<img class="bg sp-only" src="{{ asset('i/client/home/sp_top_slider03.jpg') }}" alt="" />
				<a class="slider-btn" target="_blank" href="assets/pdf/product/TB-03(CC0254-1A-1).pdf">
					<img src="{{ asset('i/client/home/slider_button.png') }}" alt="" />
				</a>
			</li>
			<li class="slider slider4">
				<img class="bg pc-only" src="{{ asset('i/client/home/top_slider04.jpg') }}" alt="" />
				<img class="bg sp-only" src="{{ asset('i/client/home/sp_top_slider04.jpg') }}" alt="" />
				<a class="slider-btn" target="_blank" href="assets/pdf/product/IXA_CC0256-1A.pdf">
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
					<a href="{{ url('/product-late') }}">
						<p class="case-cover case-cover-img">
							<img src="{{ asset('i/client/home/category_01.png') }}" />
						</p>
					</a>
				</div>
				<div class="col-lg-2 mian_product_list">
					<div class="hover-bg"></div>
					<a href="product/category.html?type=slider">
						<p class="case-cover">
							<img src="{{ asset('i/client/home/product_category_1.jpg') }}" />
						</p>
						<p class="case-description">滑块型</p>
					</a>
				</div>
				<div class="col-lg-2 mian_product_list">
					<div class="hover-bg"></div>
					<a href="product/category.html?type=rod">
						<p class="case-cover">
							<img src="{{ asset('i/client/home/product_category_2.jpg') }}" />
						</p>
						<p class="case-description">拉杆型</p>
					</a>
				</div>
				<div class="col-lg-2 mian_product_list">
					<div class="hover-bg"></div>
					<a href="product/category.html?type=cleanroom">
						<p class="case-cover">
							<img src="{{ asset('i/client/home/product_category_3.jpg') }}" />
						</p>
						<p class="case-description">无尘室型</p>
					</a>
				</div>
				<div class="col-lg-2 mian_product_list">
					<div class="hover-bg"></div>
					<a href="product/category.html?type=table">
						<p class="case-cover">
							<img src="{{ asset('i/client/home/product_category_4.jpg') }}" />
						</p>
						<p class="case-description">平台型</p>
					</a>
				</div>
				
				<div class="col-lg-2 mian_product_list">
					<div class="hover-bg"></div>
					<a href="product/category.html?type=waterproof">
						<p class="case-cover">
							<img src="{{ asset('i/client/home/product_category_5.jpg') }}" />
						</p>
						<p class="case-description">防水防尘型</p>
					</a>
				</div>
				<div class="col-lg-2 mian_product_list">
					<div class="hover-bg"></div>
					<a href="product/category.html?type=gripper">
						<p class="case-cover">
							<img src="{{ asset('i/client/home/product_category_6.jpg') }}" />
						</p>
						<p class="case-description">夹爪型</p>
					</a>
				</div>
				<div class="col-lg-2 mian_product_list">
					<div class="hover-bg"></div>
					<a href="product/category.html?type=rotary">
						<p class="case-cover">
							<img src="{{ asset('i/client/home/product_category_7.jpg') }}" />
						</p>
						<p class="case-description">旋转型</p>
					</a>
				</div>
				<div class="col-lg-2 mian_product_list">
					<div class="hover-bg"></div>
					<a href="product/category.html?type=linear">
						<p class="case-cover">
							<img src="{{ asset('i/client/home/product_category_8.jpg') }}" />
						</p>
						<p class="case-description">线性伺服型</p>
					</a>
				</div>
				<div class="col-lg-2 mian_product_list">
					<div class="hover-bg"></div>
					<a href="product/category.html?type=controller">
						<p class="case-cover">
							<img src="{{ asset('i/client/home/product_category_9.jpg') }}" />
						</p>
						<p class="case-description">控制器</p>
					</a>
				</div>
				<div class="col-lg-2 mian_product_list">
					<div class="hover-bg"></div>
					<a href="product/category.html?type=teach">
						<p class="case-cover">
							<img src="{{ asset('i/client/home/product_category_10.jpg') }}" />
						</p>
						<p class="case-description">示教器</p>
					</a>
				</div>
				<div class="col-lg-2 mian_product_list">
					<div class="hover-bg"></div>
					<a href="product/category.html?type=direct">
						<p class="case-cover">
							<img src="{{ asset('i/client/home/product_category_11.jpg') }}" />
						</p>
						<p class="case-description">直驱马达</p>
					</a>
				</div>
				<div class="col-lg-2 mian_product_list">
					<div class="hover-bg"></div>
					<a href="product/category.html?type=manipulator">
						<p class="case-cover">
							<img src="{{ asset('i/client/home/product_category_12.jpg') }}" />
						</p>
						<p class="case-description">机械手</p>
					</a>
				</div>
			</div>
		</div>
	</div><!-- #mian_product -->

	<div class="wrap" id="mian_download">
		<h2 class="mian_title download_title"><span><!--DOWNLOAD--></span></h2>
		<!--<p class="download_text">文字文字文字文字文字文字文字文字文字文字文字文字</p>-->
		<div class="container">
			<div class="row row-no-offset row-case">
				<div class="col-lg-3">
					<a href="download/catalog.php">
						<p>综合产品目录</p>
					</a>
				</div>
				<div class="col-lg-3">
					<a href="download/manual.php">
						<p>使用说明书</p>
					</a>
				</div>
				<div class="col-lg-3">
					<a href="https://linkable.partcommunity.com/3d-cad-models/">
						<p>CAD图纸</p>
					</a>
				</div>
				<div class="col-lg-3">
					<a href="faq/">
						<p>常见问题</p>
					</a>
				</div>
				<div class="col-lg-3">
					<a href="delivery/">
						<p>交货期查询</p>
					</a>
				</div>
				<div class="col-lg-3">
					<a href="download/settings.php">
						<p>现场网络文件</p>
					</a>
				</div>
				<div class="col-lg-3">
					<a href="download/versionhistory.php">
						<p>示教器履历</p>
					</a>
				</div>
				<div class="col-lg-3">
					<a href="download/others.php">
						<p>其他公司相关 </p>
					</a>
				</div>
			</div>
		</div>
	</div><!-- #mian_download -->

	<div class="wrap" id="mian_news">
		<h2 class="mian_title news_title"><span><!--NEWS--></span></h2>
		<!--<p class="download_text">文字文字文字文字文字文字文字文字文字文字文字文字</p>-->
		<div class="container">
			<div class="row row-case news_row">
				<div class="col-lg-2">2017-12-21</div>
				<div class="col-lg-1 news_product"><span>产品发布</span></div>
				<div class="col-lg-7">
					<a href="news/pdf_download.php?i=47">【重要】XSEL-J/JX停产通知</a>
				</div>
			</div>
			<div class="row row-case news_row">
				<div class="col-lg-2">2017-11-23</div>
				<div class="col-lg-1"><span>公司动态</span></div>
				<div class="col-lg-7">
					<a href="news/detail.php?i=45">【重要】2017综合产品目录勘误通知</a>
				</div>
			</div>
			<div class="row row-case news_row">
				<div class="col-lg-2">2017-11-21</div>
				<div class="col-lg-1 news_product"><span>产品发布</span></div>
				<div class="col-lg-7">
					<a href="news/detail.php?i=44">IAI 2017综合产品目录正式上线！</a>
				</div>
			</div>
			<div class="row row-case news_row">
				<div class="col-lg-2">2017-09-05</div>
				<div class="col-lg-1"><span>公司动态</span></div>
				<div class="col-lg-7">
					<a href="news/detail.php?i=42">2017年中国国际工业博览会参展通知</a>
				</div>
			</div>
			<div class="row news_more_row">
				<a href="/news" class="news_more">查看更多</a>
			</div>
		</div>
	</div><!-- #mian_news -->

	<div class="wrap" id="mian_case">
		<h2 class="mian_title case_title"><span><!--CASE STUDIES--></span></h2>
		<!--<p class="download_text">文字文字文字文字文字文字文字文字文字文字文字文字</p>-->
		<div class="container">
			<div class="row row-no-offset row-case case_row">
				<div class="col-lg-3">
					<a href="javascript:;">
						<img src="{{ asset('i/client/home/case_1.jpg') }}" />
					</a>
					<p class="case_text">
						<a href="##">垫片压入装置</a>
						<span>用于在机械部件上压入垫片的装置中。</span>
					</p>
					<!--<span>検査・試験</span>-->
				</div>
				<div class="col-lg-3">
					<a href="javascript:;">
						<img src="{{ asset('i/client/home/case_2.jpg') }}" />
					</a>
					<p class="case_text">
						<a href="##">注塑部件的装箱装置</a>
						<span>用于注塑部件的装箱装置上。</span>
					</p>
					<!--<span>検査・試験</span>-->
				</div>
				<div class="col-lg-3">
					<a href="javascript:;">
						<img src="{{ asset('i/client/home/case_3.jpg') }}" />
					</a>
					<p class="case_text">
						<a href="##">汽车部件异物吸出装置</a>
						<span>用于汽车部件中的异物吸出装置上</span>
					</p>
					<!--<span>検査・試験</span>-->
				</div>
				<div class="col-lg-3">
					<a href="javascript:;">
						<img src="{{ asset('i/client/home/case_4.jpg') }}" />
					</a>
					<p class="case_text">
						<a href="##">注塑部件毛边去除装置</a>
						<span>用于汽车注塑部件毛边去除装置上</span>
					</p>
					<!--<span>検査・試験</span>-->
				</div>
			</div>
			<div class="row news_more_row">
				<a href="cases/index.html" class="news_more">产品案例一览</a>
			</div>
		</div>
	</div><!-- #mian_case -->
@endsection

@section('script')
<script type="text/javascript" src="{{ asset('js/client/jquery.bxslider.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/client/home.js') }}"></script>
@stop




