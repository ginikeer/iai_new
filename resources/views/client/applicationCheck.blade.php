@section('title') IAI－艾卫艾商贸(上海)有限公司－ ｜ 公司概要 @stop

@section('style')
<link rel="stylesheet" href="{{ asset('css/client/application.css') }}"/>
@stop

@extends('master/client')
@section('content')
	

<div class="wrap service_warp" id="case_main">
	<div class="row crumb">
		<div class="container">
			<ul class="breadcrumb">
				<li>
					<a href="{{ url('/') }}">首页</a>
				</li>
				<li>目录申请</li>
			</ul>
		</div>
	</div>
	<div class="container">
		<!-- InstanceBeginEditable name="main" -->
		<div class="card color-white">
			<h1>目录申请</h1>
			<form name="catalogForm" method="post" action="check.php">
				<div class="row row-no-offset">
					<div class="col-lg-12">
						<div class="list-lined">
							<!--delivery info-->
							<div class="list-item">
								<div class="row row-no-offset">
									<div class="col-lg-2">
										会员信息
									</div>
									<div class="col-lg-9">
										（会员信息也是您的收信地址，如需变更，请到我的页面进行变更。）
										<a href="{{url('/member/info')}}" class="btn btn-red btn-xs last-child">变更信息</a>
									</div>
								</div>
							</div>
							<div class="list-item">
								<div class="list-item-header">公司名</div>
								<div class="list-item-body">
									wqew
								</div>
							</div>
							<div class="list-item">
								<div class="list-item-header">部门</div>
								<div class="list-item-body">
									qwe
								</div>
							</div>
							<div class="list-item">
								<div class="list-item-header">姓名</div>
								<div class="list-item-body">
									qwe
								</div>
							</div>
							<div class="list-item">
								<div class="list-item-header">地址</div>
								<div class="list-item-body">
									上海市 wqew
								</div>
							</div>
	
							<div class="list-item">
								<div class="list-item-header">TEL</div>
								<div class="list-item-body">
									15035648790
								</div>
							</div>
	
							<!--application form-->
	
							<div class="list-item">
								<div class="row row-no-offset">
									目录申请
								</div>
							</div>
							
							<div class="list-item">
								<div class="row row-no-offset">
									<div class="col-lg-1">
										单品目录
									</div>
									<div class="col-lg-11">
										2017综合产品目录<br />
										资料光盘
									</div>
								</div>
							</div>
														
							<div class="list-item">
								<div class="row row-no-offset">
									<div class="col-lg-1">
										Q1
									</div>
									<div class="col-lg-3">
										您是否经常使用气缸?
									</div>
									<div class="col-lg-2">
										是
									</div>
								</div>
							</div>
							<div class="list-item">
								<div class="row row-no-offset">
									<div class="col-lg-1">
										Q2
									</div>
									<div class="col-lg-3">
										您是否对气缸有所不满?
									</div>
									<div class="col-lg-2">
										是
									</div>
								</div>
							</div>
							<div class="list-item">
								<div class="row row-no-offset">
									<div class="col-lg-1">
										Q3
									</div>
									<div class="col-lg-9">
										<p>如果您在Q2中选择“是”，那么您对气缸有哪些不满(多选)</p>
										<p></p>
									</div>
									<div class="col-lg-3 col-lg-offset-1">
										位置点变更不方便<br />
										转台型无法中间停止<br />
										其他
									</div>
								</div>
							</div>
							<div class="list-item">
								<div class="row row-no-offset">
									<div class="col-lg-1">
										Q4
									</div>
									<div class="col-lg-3">
										您是否听说过电缸?
									</div>
									<div class="col-lg-2">
										是
									</div>
								</div>
							</div>
							<div class="list-item">
								<div class="row row-no-offset">
									<div class="col-lg-1">
										Q5
									</div>
									<div class="col-lg-3">
										您是否有兴趣了解电缸?
									</div>
									<div class="col-lg-2">
										是
									</div>
								</div>
							</div>
							<div class="list-item">
								<div class="row row-no-offset">
									<div class="col-lg-1">
										Q6
									</div>
									<div class="col-lg-8">
										<p>如果您有其他的需求请告诉我们</p>
										<p>测试</p>
									</div>
								</div>
							</div>
							<div class="list-item">
								<div class="row row-no-offset">
									<div class="col-lg-1">
										Q7
									</div>
									<div class="col-lg-11">
										<p>请勾选您所感兴趣的产品(多选)</p>
										<p>
											滑块型·拉杆型<br />
											电动夹爪型<br />
											电动转台型
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row row-no-offset">
					<div class="col-lg-12">
						<div class="btn-group text-center appli-btn">
							<input type="hidden" id="send-link" value="{{url('/application/complete')}}" />
							<input type="hidden" id="back-link" value="{{url('/application')}}" />
							<!--<button type="submit" id="send-btn" class="btn btn-red">发送</button>-->
							<button type="button" id="send-btn" class="btn btn-red">发送</button>
							<button type="button" id="back-btn" class="btn btn-red">返回</button>
						</div>
					</div>
				</div>
			</form>
		</div>
		<!-- InstanceEndEditable -->
	</div>
</div>



@endsection

@section('script')
<script type="text/javascript" src="{{ asset('js/client/application.js') }}"></script>
@stop