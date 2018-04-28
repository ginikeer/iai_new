@section('title') IAI－艾卫艾商贸(上海)有限公司－ ｜ 产品 @stop

@section('style')
<link rel="stylesheet" href="{{ asset('css/client/product.css') }}"/>
@stop

@extends('master/client')
@section('content')
	<div class="wrap" id="products_main">
		<div class="row crumb">
			<div class="container">
				<ul class="breadcrumb">
					<li>
						<a href="{{ url('/') }}">首页</a>
					</li>
					<li>产品介绍</li>
				</ul>
			</div>
		</div>
		<div class="container">
			<div class="explanatory-text">
				<p>说明说明说明说明说明说明说明说明说明说明说明说明说明说明说明说明说明说明说明说明说明说明说明说明说明说明说明说明说明说明说明说明说明说明说明说明说明说明说明说明说明说明说明说明说明说明说明说明说明说明说明说明说明说明说明说明</p>
			</div>
		</div>
		<div class="products-list">
			<div class="container products-tab">
				<div class="row row-no-offset tab-list">
					<div class="col-lg-6 tab-list-item @if(empty($query_category)) active @endif">
						<p>新产品</p>
					</div>
					<div class="col-lg-6 tab-list-item @if(!empty($query_category)) active @endif">
						<p>产品列表</p>
					</div>
					<div class="search-item">
						<p><span></span><input id="keyword" type="text" /><i></i></p>
					</div>
				</div>
			</div>
			<div class="products-contents ">
				<div class="products-tab-item new-products @if(!empty($query_category)) hide @endif">
					<div class="container">
						<div class="row row-no-offset">
							@foreach ($new as $n)
							<div class="col-lg-3">
								<div class="new-product-item">
									<img src="{{ PRODUCT_IMG_PATH . $n->cover_image_name }}" />
									<div class="product-content">
										<h4>{{ $n->title }}</h4>
										<p>{!! $n->description !!}</p>
									</div>
								</div>
								<a href="@if(!empty($n->pdf_name)) {{ PRODUCT_PDF_PATH . $n->pdf_name }} @else javascript:void(0); @endif"><span>> 下载产品目录</span><i></i></a>
							</div>
							@endforeach
						</div>
					</div>
				</div>
				<div class="products-tab-item products-lists @if(empty($query_category)) hide @endif">
					<input type="hidden" id="url-products-by-category" value="{{ url('product/data-by-category') }}" />
					<input type="hidden" id="url-products-by-search" value="{{ url('product/data-by-search') }}" />
					
					<div class="container pc-only clear">
						<div class="left">
							<dl class="products-lists-tab">
								<dt>所有产品</dt>
								@for ($i = 0; $i < count($category); $i++)
								<dd @if(($i == 0 && empty($query_category)) || $query_category == $category[$i]->alias ) class="active" @endif data-alias="{{ $category[$i]->alias }}" >{{ $category[$i]->title }}</dd>
								@endfor
							</dl>
						</div>
						<div class="right">
							<div class="product-list products-items">
								<img class="loading" src="{{ asset('i/client/common/bx_loader.gif') }}" alt="" />
								<div class="row row-no-offset">
									@if(count($default) > 0)
									@foreach ($default as $d)
									<div class="col-lg-3">
										<div class="items-content">
											<a href="{{ url('product/detail/' . $d->id) }}">
												<img src="{{ PRODUCT_IMG_PATH . $d->cover_image_name }}" />
												<h4>{{ $d->title }}</h4>
												<p>{!! $d->description !!}</p>
											</a>
										</div>
									</div>
									@endforeach
									@endif
								</div>
							</div>
						</div>
					</div>
					<div class="container sp-only">
						<div class="row">
							<dl class="products-lists-tab-sp">
								<dt>
									<p>所有产品</p>
								</dt>
								@foreach ($category as $c)
								<dd data-alias="{{ $c->alias }}">
									<p>{{ $c->title }}</p>
									<ul></ul>
								</dd>
								@endforeach
							</dl>
						</div>
					</div>
				</div>
				<div class="products-tab-item search-products hide">
					<div class="container">
						<div class="row row-no-offset">
							<div class="products-items">
								<img class="loading" src="{{ asset('i/client/common/bx_loader.gif') }}" alt="" />
								<div class="row row-no-offset">
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>




@endsection

@section('script')
<script id="tmpl-product-list" type="text/x-jquery-tmpl">
	<div class="col-lg-3">
		<div class="items-content">
			<a href="{{ url('product/detail') }}/${id}">
				<img src="{{ PRODUCT_IMG_PATH }}${cover_image_name}" />
				<h4>${title}</h4>
				<!--<p class="pre">${brEscape(description)}</p>-->
				<p>${brEscape(description)}</p>
			</a>
		</div>
	</div>
</script>

<script id="tmpl-sp-product-list" type="text/x-jquery-tmpl">
	<li>
		<a href="{{ url('product/detail') }}/${id}">
			<span class="spPanelThumb">
				<img src="{{ PRODUCT_IMG_PATH }}${cover_image_name}">
			</span>
			<span class="spPanelTit">${title}</span>
		</a>
	</li>
</script>

<script id="tmpl-product-search" type="text/x-jquery-tmpl">
	<div class="col-lg-2">
		<div class="items-content">
			<a href="{{ url('product/detail') }}/${id}">
				<img src="{{ PRODUCT_IMG_PATH }}${cover_image_name}" />
				<h4>${title}</h4>
				<!--<p class="pre">${brEscape(description)}</p>-->
				<p>${brEscape(description)}</p>
			</a>
		</div>
	</div>
</script>


<script type="text/javascript" src="{{ asset('js/client/product.js') }}"></script>
@stop