@section('title') IAI－艾卫艾商贸(上海)有限公司－ ｜ {{ $product->title }} @stop

@section('style')
<link rel="stylesheet" href="{{ asset('css/client/product.css') }}"/>
@stop

@extends('master/client')
@section('content')
	<div class="wrap detail-content" id="products_main">
		<div class="row crumb">
			<div class="container">
				<ul class="breadcrumb">
					<li>
						<a href="{{ url('/') }}">首页</a>
					</li>
					<li>
						<a href="{{ url('/product') }}">产品介绍</a>
					</li>
					<li>{{ $product->title }}</li>
				</ul>
			</div>
		</div>
		<div class="container detail-container">
			<div class="row row-no-offset">
				<div class="col-lg-6">
					<h3 class="detail-title">{{ $product->title }}</h3>
					<p class="detail-text">
						{!! $product->content !!}
					</p>
					<div class="row row-no-offset product-detail-btn-list">
						<div class="col-lg-4">
							<a class="detail-btn" href="##">纸质产品目录申请</a>
						</div>
						<div class="col-lg-4">
							<a class="detail-btn" href="@if(!empty($product->pdf_name)) {{ PRODUCT_PDF_PATH . $product->pdf_name }} @else javascript:void(0); @endif">产品目录下载</a>
						</div>
						<div class="col-lg-4">
							<a class="detail-btn" href="##">3D CAD图纸</a>
						</div>
						<div class="col-lg-4">
							<a class="detail-btn" href="##">3D图纸流程</a>
						</div>
						<div class="col-lg-4">
							<a class="detail-btn" href="mailto:shanghai@iai-robot.com">联系我们</a>
						</div>
					</div>
				</div>
				<div class="col-lg-6 detail-img">
					<img src="{{ PRODUCT_IMG_PATH . $product->image_name }}" />
				</div>
			</div>
		</div>
		<div class="detail-more">
			<div class="detail-tab">
				<div class="container">
					<div class="row row-no-offset">
						<div class="col-lg-3 tab-item"><a href="##">产品说明书<i></i></a></div>
						<div class="col-lg-3 tab-item case-item"><a href="##">产品使用案例<i></i></a></div>
						<div class="col-lg-3 tab-item"><a href="##">相关产品<i></i></a></div>
					</div>
				</div>
			</div>
			<div id="product-introduce">
				<div class="container">
					<h4 class="product-title">产品说明书 <i></i></h4>
					<div class="detail-list">
						@foreach ($manual as $m)
						<div class="detail-list-item">
							<div class="row row-no-offset">
								<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>{{ $m->title }}</big></div>
								<div class="col-lg-4 text-right">
									@if(!empty($m->cn_pdf_name)) <a href="{{ MANUAL_PDF_PATH . $m->cn_pdf_name }}" target="_blank" class="btn btn-red btn-xs">下载(CN)</a> @else <div class="btn btn-gray btn-xs">下载(CN)</div> @endif
									@if(!empty($m->en_pdf_name)) <a href="{{ MANUAL_PDF_PATH . $m->en_pdf_name }}" target="_blank" class="btn btn-red btn-xs">下载(EN)</a> @else <div class="btn btn-gray btn-xs">下载(EN)</div> @endif
									@if(!empty($m->ja_pdf_name)) <a href="{{ MANUAL_PDF_PATH . $m->ja_pdf_name }}" target="_blank" class="btn btn-red btn-xs">下载(JA)</a> @else <div class="btn btn-gray btn-xs">下载(JA)</div> @endif
								</div>
							</div>
						</div>
						@endforeach
					</div>
				</div>
			</div>
			<div id="product-case">
				<div class="container">
					<h4 class="product-title">产品使用案例 <i></i></h4>
					<div class="row row-no-offset row-case case_row">
						@foreach ($cases as $c)
						<div class="col-lg-3">
<<<<<<< Updated upstream
							<a href="">
								<img src="{{ CASE_IMG_PATH . $c->cover_image_name }}" />
							</a>
							<p class="case_text">
								<a href="">{{ $c->title }}</a>
								<span>{!! $c->description !!}</span>
=======
							<a href="javascript:;">
								<img src="" />
							</a>
							<p class="case_text">
								<a href="##">垫片压入装置</a>
								<span>用于在机械部件上压入垫片的装置中。</span>
							</p>
						</div>
						<div class="col-lg-3">
							<a href="javascript:;">
								<img src="" />
							</a>
							<p class="case_text">
								<a href="##">注塑部件的装箱装置</a>
								<span>用于注塑部件的装箱装置上。</span>
							</p>
						</div>
						<div class="col-lg-3">
							<a href="javascript:;">
								<img src="" />
							</a>
							<p class="case_text">
								<a href="##">汽车部件异物吸出装置</a>
								<span>用于汽车部件中的异物吸出装置上</span>
							</p>
						</div>
						<div class="col-lg-3">
							<a href="javascript:;">
								<img src="" />
							</a>
							<p class="case_text">
								<a href="##">注塑部件毛边去除装置</a>
								<span>用于汽车注塑部件毛边去除装置上</span>
>>>>>>> Stashed changes
							</p>
						</div>
						@endforeach
					</div>
				</div>
			</div>
			<div id="related-products">
				<div class="container">
					<h4 class="product-title">相关产品 <i></i></h4>
					<div class="row row-no-offset">
						@foreach ($related as $r)
						<div class="col-lg-3">
							<a href="{{ url('product/detail/' . $r->id) }}">
								<img src="{{ PRODUCT_IMG_PATH . $r->cover_image_name }}" />
								<div class="related-content">
									<h4 class="related-title">{{ $r->title }}</h4>
									<p class="related-text">{!! $r->description !!}</p>
								</div>
							</a>
						</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>




@endsection


@section('script')
<script type="text/javascript" src="{{ asset('js/client/product.js') }}"></script>
@stop