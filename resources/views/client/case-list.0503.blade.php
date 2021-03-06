@section('title') IAI－艾卫艾商贸(上海)有限公司－ ｜ 产品使用案例 @stop

@section('style')
<link rel="stylesheet" href="{{ asset('css/client/case.css') }}"/>
@stop

@extends('master/client')
@section('content')
	

<div class="wrap" id="case_main">
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
			<div class="row">
				<div class="case_nav">
					<ul class="case_nav_blocks clear">
						<li class="active">
							<a href="##">滑块型</a>
						</li>
						<li>
							<a href="##">拉杆型</a>
						</li>
						<li>
							<a href="##">平台型</a>
						</li>
						<li>
							<a href="##">线性伺服马达型</a>
						</li>
						<li>
							<a href="##">直交机械手</a>
						</li>
						<li>
							<a href="##">桌上型机械手</a>
						</li>
						<li>
							<a href="##">水平多关节机械手</a>
						</li>
						<li>
							<a href="##">伺服压力机</a>
						</li>
						<li>
							<a href="##">夹爪型、旋转型</a>
						</li>
						<li>
							<a href="##">无尘规格</a>
						</li>
						<li>
							<a href="##">防尘・防滴规格</a>
						</li>
						<li>
							<a href="##">控制器</a>
						</li>
						<li>
							<a href="##">其他</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="row case_row">
				<div class="col-lg-3">
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
				<div class="col-lg-3">
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
				<div class="col-lg-3">
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