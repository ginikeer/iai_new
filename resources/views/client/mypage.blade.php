@section('title') IAI－艾卫艾商贸(上海)有限公司－ ｜ 致辞 @stop

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
				<li>我的页面</li>
			</ul>
		</div>
	</div>
	<div class="container">
		<div class="color-white">
			<h1>我的页面</h1>
			<hr>
            <form name="inputForm" method="post" action="post.php">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="list-lined">
						<div class="list-item">
							<div class="list-item-header">会员ID（E-mail）</div>
							<div class="list-item-body">
									<input type="email" name="email" value="18******@qq.com" readonly required>
							</div>
						</div>
						<div class="list-item">
							<div class="list-item-header">密码</div>
							<div class="list-item-body">
								<div class="row">
									<div class="col-lg-6">
										a1*****
									</div>
									<div class="col-lg-6">
										<a href="pwd_change.php" class="btn btn-red btn-xs last-child">变更密码</a>
									</div>
								</div>
							</div>
						</div>
						<div class="list-item">
							<div class="list-item-header">公司名</div>
							<div class="list-item-body">
								<input type="text" name="company" value="公司名">
							</div>
						</div>
						<div class="list-item">
							<div class="list-item-header">部门</div>
							<div class="list-item-body">
								<input type="text" name="department" value="部门">
							</div>
						</div>
						<div class="list-item">
							<div class="list-item-header">姓名</div>
							<div class="list-item-body">
								<div class="row">
									<div class="col-lg-6">
										<input type="text" name="name" value="姓名" required>
									</div>
								</div>
							</div>
						</div>
						<div class="list-item">
							<div class="list-item-header">地址-所在省市</div>
							<div class="list-item-body">
								<div class="row">
									<div class="col-lg-6">
										<select name="prov">
											<option value="上海市">上海市</option>
											<option value="北京市">北京市</option>
											<option value="重庆市">重庆市</option>
											<option value="天津市">天津市</option>
											<option value="浙江省">浙江省</option>
											<option value="江苏省">江苏省</option>
											<option value="江西省">江西省</option>
											<option value="湖北省">湖北省</option>
											<option value="安徽省">安徽省</option>
											<option value="河南省">河南省</option>
											<option value="河北省">河北省</option>
											<option value="山西省">山西省</option>
											<option value="山东省">山东省</option>
											<option value="广东省">广东省</option>
											<option value="海南省">海南省</option>
											<option value="湖南省">湖南省</option>
											<option value="福建省">福建省</option>
											<option value="吉林省">吉林省</option>
											<option value="黑龙江省">黑龙江省</option>
											<option value="辽宁省">辽宁省</option>
											<option value="甘肃省">甘肃省</option>
											<option value="青海省">青海省</option>
											<option value="陕西省">陕西省</option>
											<option value="四川省">四川省</option>
											<option value="陕西省">陕西省</option>
											<option value="云南省">云南省</option>
											<option value="贵州省">贵州省</option>
											<option value="内蒙古自治区">内蒙古自治区</option>
											<option value="新疆维吾尔自治区">新疆维吾尔自治区</option>
											<option value="宁夏回族自治区">宁夏回族自治区</option>
											<option value="西藏自治区">西藏自治区</option>
										</select>
									</div>
								</div>
							</div>
						</div>
						<div class="list-item">
							<div class="list-item-header">城市</div>
							<div class="list-item-body">
								<input type="text" name="city" value="城市">
							</div>
						</div>
						<div class="list-item">
							<div class="list-item-header">地址</div>
							<div class="list-item-body">
								<input type="text" name="addr" value="地址">
							</div>
						</div>
						<div class="list-item">
							<div class="list-item-header">TEL</div>
							<div class="list-item-body">
								<div class="row">
									<div class="col-lg-6">
										<input type="tel" name="tel" value="TEL" required>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-lg-offset-2">
					<p class="text-center">
						<button type="submit" class="btn btn-red btn-lg" onClick="javascript:if(confirm('确定保存信息吗?')) return true; else return false;">保存更改</button>
					</p>
				</div>
				<div class="col-lg-4">
					<p class="text-center">
						<a href="secession.php" class="btn btn-gray btn-lg">退会</a>
					</p>
				</div>
			</div>
            </form>
		</div>
		
	</div>
</div>



@endsection

@section('script')
<script type="text/javascript" src="{{ asset('js/client/company.js') }}"></script>
@stop