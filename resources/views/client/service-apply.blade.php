@section('title') IAI－艾卫艾商贸(上海)有限公司－ ｜ 纸质目录申请 @stop

@section('style')
<link rel="stylesheet" href="{{ asset('css/client/login.css') }}"/>
@stop

@extends('master/client')
@section('content')
	

<div class="wrap service_warp">
	<div class="row crumb">
		<div class="container">
			<ul class="breadcrumb">
				<li>
					<a href="{{ url('/') }}">首页</a>
				</li>
				<li>纸质目录申请</li>
			</ul>
		</div>
	</div>
	<div class="container">
		<div class="color-white">
			<h1>确认信息</h1>
			<hr>
			<h5 style="margin-bottom: 30px;">
				为了能将目录顺利送到您的手中，请核对以下信息。如有错误，修改后点击提交。<br>
				*万分抱歉，由于敝司工作上的纰漏，目前发出的2017综合产品目录封底中刊载的深圳分公司的联系电话有误，正确的号码为0755-2393-2307，敬请注意。
			</h5>
            <form id="apply_form" method="post" action="{{ url('service/apply') }}">
            	<input type="hidden" name="_token" value="{{ csrf_token() }}" />
				<div class="row mypage-row">
					<div class="col-lg-10 col-lg-offset-1">
						<div class="list-lined">
							<div class="list-item">
								<div class="list-item-header">公司：</div>
								<div class="list-item-body">
									<input type="text" class="required" name="company" value="{{ $data->company }}" required>
								</div>
							</div>
							<div class="list-item">
								<div class="list-item-header">部门：</div>
								<div class="list-item-body">
									<input type="text" class="required" name="department" value="{{ $data->department }}" required>
								</div>
							</div>
							<div class="list-item">
								<div class="list-item-header">姓名：</div>
								<div class="list-item-body">
									<input type="text" class="required" name="name" value="{{ $data->name }}" required>
								</div>
							</div>
							<div class="list-item">
								<div class="list-item-header">邮寄地址：</div>
								<div class="list-item-body">
									<input type="text" class="required" name="address" value="{{ $data->prov . $data->city . $data->addr }}" required>
								</div>
							</div>
							<div class="list-item">
								<div class="list-item-header">联系电话：</div>
								<div class="list-item-body">
									<input type="text" class="required" name="tel" value="{{ $data->tel }}" required>
								</div>
							</div>
						</div>
					</div>
					<div class="row mypage-btn-row">
						<p class="text-center login-btn">
							<button style="margin-top: 50px;" type="submit" class="btn btn-red btn-mypage">提交</button>
						</p>
					</div>
				</div>
            </form>
		</div><!-- #main -->
	</div>
</div>



@endsection

@section('script')
<script type="text/javascript" src="{{ asset('js/client/apply.js') }}"></script>
@stop