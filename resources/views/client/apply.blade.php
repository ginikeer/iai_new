@section('title') IAI－艾卫艾商贸(上海)有限公司－ ｜ 产品使用案例 @stop

@section('style')
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
            <form id="form" method="post" action="">
			<div class="row">
				<div class="col-lg-10 col-lg-offset-1">
					<div class="list-lined">
						<div class="list-item">
							<div class="list-item-header">姓名：</div>
							<div class="list-item-body">
									<input type="text" name="name" value="" required>
							</div>
						</div>
						<div class="list-item">
							<div class="list-item-header">邮寄地址：</div>
							<div class="list-item-body">
									<input type="text" name="address" value="" required>
							</div>
						</div>
						<div class="list-item">
							<div class="list-item-header">联系电话：</div>
							<div class="list-item-body">
									<input type="text" name="tel" value="" maxlength="11" required>
							</div>
						</div>
					</div>
				</div>
				<p class="text-center">
					<button style="margin: 30px 0; padding: 15px;" type="submit" class="btn btn-red btn-lg btn-apply">提交</button>
				</p>
			</div>
            </form>
		</div><!-- #main -->
	</div>
</div>



@endsection

@section('script')
<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=25ed4b581d617c933999a7ea31860244"></script>
<script type="text/javascript" src="{{ asset('js/client/bmap-embedded.js') }}"></script>
@stop