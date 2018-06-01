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
		<div class="pc-only">
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
					<?php $i = 0; ?>
					@foreach ($case as $c)
					<div class="col-lg-3 all tag-{{ $c->primary_tag }} @if($i < 40) tag-0 @endif ">
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
					<?php $i++; ?>
					@endforeach
					
					<!--<div class="col-lg-3 all landscape">
						<a class="case_img" href="{{ url('/case/detail') }}">
							<img src="{{ asset('i/client/case/case_1.jpg') }}">
						</a>
						<div class="case_text">
							<p>
								<a href="{{ url('/case/detail') }}">垫片压入装置</a>
								<span>用于在机械部件上压入垫片的装置中。</span>
							</p>
							<div class="case-tag">
								<span class="case-tag-1">汽车部件</span>
								<span class="case-tag-2">定位</span>
							</div>
						</div>
					</div>
					<div class="col-lg-3 all aa">
						<a class="case_img" href="{{ url('/case/detail') }}">
							<img src="{{ asset('i/client/case/case_1.jpg') }}">
						</a>
						<div class="case_text">
							<p>
								<a href="{{ url('/case/detail') }}">注塑部件的装箱装置</a>
								<span>用于注塑部件的装箱装置上。</span>
							</p>
							<div class="case-tag">
								<span class="case-tag-1">汽车部件</span>
								<span class="case-tag-2">定位</span>
							</div>
						</div>
						
					</div>
					<div class="col-lg-3 all aa">
						<a class="case_img" href="{{ url('/case/detail') }}">
							<img src="{{ asset('i/client/case/case_1.jpg') }}">
						</a>
						<div class="case_text">
							<p>
								<a href="{{ url('/case/detail') }}">汽车部件异物吸出装置</a>
								<span>用于汽车部件中的异物吸出装置上</span>
							</p>
							<div class="case-tag">
								<span class="case-tag-1">汽车部件</span>
								<span class="case-tag-2">定位</span>
							</div>
						</div>
					</div>
					
					<div class="col-lg-3 all landscape">
						<a class="case_img" href="{{ url('/case/detail') }}">
							<img src="{{ asset('i/client/case/case_1.jpg') }}">
						</a>
						<div class="case_text">
							<p>
								<a href="{{ url('/case/detail') }}">垫片压入装置</a>
								<span>用于在机械部件上压入垫片的装置中。</span>
							</p>
							<div class="case-tag">
								<span class="case-tag-1">汽车部件</span>
								<span class="case-tag-2">定位</span>
							</div>
						</div>
					</div>
					<div class="col-lg-3 all landscape">
						<a class="case_img" href="{{ url('/case/detail') }}">
							<img src="{{ asset('i/client/case/case_1.jpg') }}">
						</a>
						<div class="case_text">
							<p>
								<a href="{{ url('/case/detail') }}">注塑部件的装箱装置</a>
								<span>用于注塑部件的装箱装置上。</span>
							</p>
							<div class="case-tag">
								<span class="case-tag-1">汽车部件</span>
								<span class="case-tag-2">定位</span>
							</div>
						</div>
						
					</div>
					<div class="col-lg-3 all landscape">
						<a class="case_img" href="{{ url('/case/detail') }}">
							<img src="{{ asset('i/client/case/case_1.jpg') }}">
						</a>
						<div class="case_text">
							<p>
								<a href="{{ url('/case/detail') }}">汽车部件异物吸出装置</a>
								<span>用于汽车部件中的异物吸出装置上</span>
							</p>
							<div class="case-tag">
								<span class="case-tag-1">汽车部件</span>
								<span class="case-tag-2">定位</span>
							</div>
						</div>
					</div>-->
				</div>
			</div>
		</div>
		<div class="sp-only">
			<div class="row">
				<dl class="case-lists-tab">
					<dd data-alias="slider">
						<p>滑块型</p>
						<ul>
							<li>
								<a href="##">
									<span class="spPanelThumb">
										<img src="{{ asset('i/client/case/case_1.jpg') }}" />
									</span>
									<div class="spPanelTit">
										<h3>垫片压入装置</h3>
										<div class="case-tag">
											<span class="case-tag-1">汽车部件</span>
											<span class="case-tag-2">定位</span>
										</div>
									</div>
								</a>
							</li>
							<li>
								<a href="##">
									<span class="spPanelThumb">
										<img src="{{ asset('i/client/case/case_1.jpg') }}" />
									</span>
									<div class="spPanelTit">
										<h3>垫片压入装置</h3>
										<div class="case-tag">
											<span class="case-tag-1">汽车部件</span>
											<span class="case-tag-2">定位</span>
										</div>
									</div>
								</a>
							</li>
						</ul>
					</dd>
					<dd data-alias="rod">
						<p>拉杆型</p>
						<ul>
							<li>
								<a href="##">
									<span class="spPanelThumb">
										<img src="{{ asset('i/client/case/case_1.jpg') }}" />
									</span>
									<div class="spPanelTit">
										<h3>垫片压入装置</h3>
										<div class="case-tag">
											<span class="case-tag-1">汽车部件</span>
											<span class="case-tag-2">定位</span>
										</div>
									</div>
								</a>
							</li>
						</ul>
					</dd>
					<dd data-alias="table">
						<p>平台型</p>
						<ul>
							<li>
								<a href="##">
									<span class="spPanelThumb">
										<img src="{{ asset('i/client/case/case_1.jpg') }}" />
									</span>
									<div class="spPanelTit">
										<h3>垫片压入装置</h3>
										<div class="case-tag">
											<span class="case-tag-1">汽车部件</span>
											<span class="case-tag-2">定位</span>
										</div>
									</div>
								</a>
							</li>
						</ul>
					</dd>
					<dd data-alias="linear">
						<p>线性伺服马达型</p>
						<ul>
							<li>
								<a href="##">
									<span class="spPanelThumb">
										<img src="{{ asset('i/client/case/case_1.jpg') }}" />
									</span>
									<div class="spPanelTit">
										<h3>垫片压入装置</h3>
										<div class="case-tag">
											<span class="case-tag-1">汽车部件</span>
											<span class="case-tag-2">定位</span>
										</div>
									</div>
								</a>
							</li>
						</ul>
					</dd>
					<dd data-alias="manipulator">
						<p>直交机械手</p>
						<ul>
							<li><a><span class="">暂无数据</span></a></li>
						</ul>
					</dd>
					<dd data-alias="table_manipulator">
						<p>桌上型机械手</p>
						<ul>
							<li><a><span class="">暂无数据</span></a></li>
						</ul>
					</dd>
					<dd data-alias="multi_joint_manipulator">
						<p>水平多关节机械手</p>
						<ul>
							<li><a><span class="">暂无数据</span></a></li>
						</ul>
					</dd>
					<dd data-alias="press">
						<p>伺服压力机</p>
						<ul>
							<li><a><span class="">暂无数据</span></a></li>
						</ul>
					</dd>
					<dd data-alias="gripper_rotary">
						<p>夹爪型、旋转型</p>
						<ul>
							<li><a><span class="">暂无数据</span></a></li>
						</ul>
					</dd>
					<dd data-alias="cleanroom">
						<p>无尘规格</p>
						<ul>
							<li><a><span class="">暂无数据</span></a></li>
						</ul>
					</dd>
					<dd data-alias="waterproof">
						<p>防尘・防滴规格</p>
						<ul>
							<li><a><span class="">暂无数据</span></a></li>
						</ul>
					</dd>
					<dd data-alias="controller">
						<p>控制器</p>
						<ul>
							<li><a><span class="">暂无数据</span></a></li>
						</ul>
					</dd>
					<dd data-alias="other">
						<p>其他</p>
						<ul>
							<li><a><span class="">暂无数据</span></a></li>
						</ul>
					</dd>
				</dl>
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