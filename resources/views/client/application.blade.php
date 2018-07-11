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
			<form name="catalogForm" method="post" action="{{url('service/catalog')}}">
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
									{{$user ? $user->company : ''}}
								</div>
							</div>
							<div class="list-item">
								<div class="list-item-header">部门</div>
								<div class="list-item-body">
									{{$user ? $user->department : ''}}
								</div>
							</div>
							<div class="list-item">
								<div class="list-item-header">姓名</div>
								<div class="list-item-body">
									{{$user ? $user->name : ''}}
								</div>
							</div>
							<div class="list-item">
								<div class="list-item-header">地址</div>
								<div class="list-item-body">
									{{$user ? $user->addr : ''}}
								</div>
							</div>	
	
							<div class="list-item">
								<div class="list-item-header">TEL</div>
								<div class="list-item-body">
									{{$user ? $user->company : ''}}
								</div>
							</div>
	
							<!--application form-->

							<!-- start -->
							<div class="list-item">
								<div class="row row-no-offset">
									目录申请
								</div>
							</div>
							
							<div class="list-item">
								<div class="row row-no-offset">
									<div class="col-lg-1">
										目录
									</div>
									<div class="col-lg-3">
										<label><input name="catalog" type="radio" value="单品目录">单品目录</label>
									</div>
									<div class="col-lg-3">
										<label><input name="catalog" type="radio" value="综合目录及其他">综合目录及其他</label>
									</div>
								</div>
							</div>
														
							<div class="list-item hide-item catalog-item">
								<div class="row row-no-offset">
									<div class="col-lg-3 col-lg-offset-1">
										<label><input name="catalog1[]" type="checkbox" value="2017综合产品目录">2017综合产品目录</label>
									</div>
									<div class="col-lg-3">
										<label><input name="catalog1[]" type="checkbox" value="资料光盘">资料光盘</label>
									</div>
								</div>
							</div>
							
							<div class="list-item hide-item catalog-item-2">
								<div class="row row-no-offset">
									<div class="col-lg-3 col-lg-offset-1">
										<p><label><input name="catalog2[]" type="checkbox" value="GRS电磁夹爪">GRS电磁夹爪</label></p>
										<p><label><input name="catalog2[]" type="checkbox" value="e电缸">e电缸</label></p>
										<p><label><input name="catalog2[]" type="checkbox" value="示教器TB03">示教器TB03</label></p>
										<p><label><input name="catalog2[]" type="checkbox" value="手腕单元WU">手腕单元WU</label></p>
									</div>
									<div class="col-lg-3">
										<p><label><input name="catalog2[]" type="checkbox" value="RCON控制器">RCON控制器</label></p>
										<p><label><input name="catalog2[]" type="checkbox" value="水平多关节机械手IXA">水平多关节机械手IXA</label></p>
										<p><label><input name="catalog2[]" type="checkbox" value="细小型电缸">细小型电缸</label></p>
									</div>
									<div class="col-lg-3">
										<p><label><input name="catalog2[]" type="checkbox" value="RCS3拉杆型">RCS3拉杆型</label></p>
										<p><label><input name="catalog2[]" type="checkbox" value="电缸RCS4">电缸RCS4</label></p>
										<p><label><input name="catalog2[]" type="checkbox" value="薄型夹爪 RCP6GRT7">薄型夹爪 RCP6GRT7</label></p>
									</div>
								</div>
							</div>
							<!-- end -->

							<div class="list-item">
								<div class="row row-no-offset">
									<div class="col-lg-1">
										Q1
									</div>
									<div class="col-lg-3">
										您是否经常使用气缸?
									</div>
									<div class="col-lg-2">
										<label><input name="q1" type="radio" value="是">是</label>
									</div>
									<div class="col-lg-2">
										<label><input name="q1" type="radio" value="否">否</label>
									</div>
									<div class="col-lg-2">
										<label><input name="q1" type="radio" value="用过">用过</label>
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
										<label><input name="q2" type="radio" value="是">是</label>
									</div>
									<div class="col-lg-2">
										<label><input name="q2" type="radio" value="否">否</label>
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
										<p><label><input name="q3[]" type="checkbox" value="位置点变更不方便">位置点变更不方便</label></p>
										<p><label><input name="q3[]" type="checkbox" value="低速下无法顺畅动作">低速下无法顺畅动作</label></p>
										<p><label><input name="q3[]" type="checkbox" value="希望速度更快些">希望速度更快些</label></p>
										<p><label><input name="q3[]" type="checkbox" value="无法多点定位">无法多点定位</label></p>
									</div>
									<div class="col-lg-4">
										<p><label><input name="q3[]" type="checkbox" value="气缸夹爪的把持力调整不能简单进行">气缸夹爪的把持力调整不能简单进行</label></p>
										<p><label><input name="q3[]" type="checkbox" value="转台型无法中间停止">转台型无法中间停止</label></p>
										<p><label><input name="q3[]" type="checkbox" value="启动·停止时的有冲击">启动·停止时的有冲击</label></p>
										<p><label><input name="q3[]" type="checkbox" value="其他">其他</label></p>
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
										<label><input name="q4" type="radio" value="是">是</label>
									</div>
									<div class="col-lg-2">
										<label><input name="q4" type="radio" value="否">否</label>
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
										<label><input name="q5" type="radio" value="是">是</label>
									</div>
									<div class="col-lg-2">
										<label><input name="q5" type="radio" value="否">否</label>
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
										<textarea name="q6"></textarea>
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
										<ul class="list-inline">
											<li class="list-item">
												<p><img src="{{ asset('i/client//application/product_type_1.jpg') }}"></p>
												<p><label><input name="q7[]" type="checkbox" value="滑块型·拉杆型">滑块型·拉杆型</label></p>
											</li>
											<li class="list-item">
												<p><img src="{{ asset('i/client//application/product_type_2.jpg') }}"></p>
												<p><label><input name="q7[]" type="checkbox" value="电动夹爪型">电动夹爪型</label></p>
											</li>
											<li class="list-item">
												<p><img src="{{ asset('i/client//application/product_type_3.jpg') }}"></p>
												<p><label><input name="q7[]" type="checkbox" value="电动转台型">电动转台型</label></p>
											</li>
											<li class="list-item">
												<p><img src="{{ asset('i/client//application/product_type_4.jpg') }}"></p>
												<p><label><input name="q7[]" type="checkbox" value="单轴·直叫机械手">单轴·直叫机械手</label></p>
											</li>
											<li class="list-item">
												<p><img src="{{ asset('i/client//application/product_type_5.jpg') }}"></p>
												<p><label><input name="q7[]" type="checkbox" value="水平多关节机械手">水平多关节机械手</label></p>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<input type="hidden" name="_token" value="{{csrf_token()}}" />
				<div class="row row-no-offset">
					<div class="col-lg-12">
						<div class="btn-group text-center appli-btn">
							<!-- <input type="hidden" id="check-link" value="{{url('/application/check')}}" /> -->
							<!--<button type="submit" class="btn btn-red" id="application-btn">确认</button>-->
							<!-- <button type="button" class="btn btn-red" id="application-btn">确认</button> -->
							<button type="button" class="btn btn-red" id="application-btn">确认</button>
							<button type="reset" class="btn btn-red">重置</button>
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
<script type="text/javascript">
@if(!empty($message))
	@if($message['code'] == 1)
		layer.msg("{{$message['msg']}}",{icon:1});
	@else
		layer.msg("{{$message['msg']}}",{icon:3,anim:6});
	@endif
@endif
</script>
@stop