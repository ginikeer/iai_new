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
			<div class="row case_row">
				<div class="col-lg-9">
					<div class="row">
						@foreach ($data as $d)
						<div class="col-lg-4">
							<a class="case_img" href="{{ url('/case/detail/' . $d->id) }}">
								<img src="{{ CASE_IMG_PATH . $d->cover_image_name }}">
							</a>
							<div class="case_text">
								<p>
									<a href="{{ url('/case/detail/' . $d->id) }}">{{ $d->title }}</a>
									<span>{!! $d->description !!}</span>
								</p>
								<div class="case-tag">
									@foreach ($d->tags as $tag)
									<span class="@if($tag->type == '行业') case-tag-1 @elseif($tag->type == '工程') case-tag-2 @endif ">{{ $tag->title }}</span>
									@endforeach
								</div>
							</div>
						</div>
						@endforeach
					</div>
				</div>
				<div class="col-lg-3">
					<dl class="right_nav">
						<dt>产品使用案例</dt>
						<dd class="active">
							<a href="##">滑块型</a>
						</dd>
						<dd>
							<a href="##">拉杆型</a>
						</dd>
						<dd>
							<a href="##">平台型</a>
						</dd>
						<dd>
							<a href="##">线性伺服马达型</a>
						</dd>
						<dd>
							<a href="##">直交机械手</a>
						</dd>
						<dd>
							<a href="##">桌上型机械手</a>
						</dd>
						<dd>
							<a href="##">水平多关节机械手</a>
						</dd>
						<dd>
							<a href="##">伺服压力机</a>
						</dd>
						<dd>
							<a href="##">夹爪型、旋转型</a>
						</dd>
						<dd>
							<a href="##">无尘规格</a>
						</dd>
						<dd>
							<a href="##">防尘・防滴规格</a>
						</dd>
						<dd>
							<a href="##">控制器</a>
						</dd>
						<dd>
							<a href="##">其他</a>
						</dd>
					</dl>
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
@stop