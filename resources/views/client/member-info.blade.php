@section('title') IAI－艾卫艾商贸(上海)有限公司－ ｜ 产品使用案例 @stop

@section('style')
<link rel="stylesheet" href="{{ asset('css/client/login.css') }}"/>
@stop

@extends('master/client')
@section('content')
	

<div class="wrap service_warp" id="login_main">
	<div class="row crumb">
		<div class="container">
			<ul class="breadcrumb">
				<li>
					<a href="{{ url('/') }}">首页</a>
				</li>
				<li>登陆</li>
			</ul>
		</div>
	</div>
	<div class="login-content">
		<h2>会员注册</h2>
		<div class="row row-nav-tabs">
			<ul class="col-lg-10 col-lg-offset-1 nav-tabs nav-justify">
				<li><a href="javascript:">邮箱确认</a></li>
				<li class="active"><a href="javascript:;">填写会员信息</a></li>
				<li><a href="javascript:;">注册成功</a></li>
			</ul>
		</div>
		<form>
			<div class="login-form regist-form">
				<div class="form-item">
					<label>会员ID(Email)</label>
					<input type="email" name="email" value="xxx@xxx.com" readonly />
				</div>
				<div class="form-item password">
					<label>密码</label>
					<input class="info-read" type="password" required name="password" id="password" />
				</div>
				<p class="text-red error-text">请输入密码</p>
				<div class="form-item">
					<label>公司名</label>
					<input class="info-read" type="text" required id="company" name="company" />
				</div>
				<p class="text-red error-text">请输入公司名</p>
				<div class="form-item">
					<label>部门</label>
					<input class="info-read" type="text" required id="department" name="department" />
				</div>
				<p class="text-red error-text">请输入部门</p>
				<div class="form-item">
					<label>姓名</label>
					<input class="info-read" type="text" required id="name" name="name" />
				</div>
				<div class="form-item">
					<label>地址-所在省市</label>
					<select class="info-read" name="prov">
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
				<div class="form-item">
					<label>城市</label>
					<input class="info-read" type="text" id="city" name="city" />
				</div>
				<div class="form-item">
					<label>地址</label>
					<input class="info-read" type="text" id="address" name="address" />
				</div>
				<div class="form-item">
					<label>TEL</label>
					<input class="info-read" type="tel" required id="tel" name="tel" />
				</div>
				<p class="text-red error-text">请输入电话</p>
				<div class="login-btn info-btn">
					<input type="button" id="next-btn" value=" 下 一 步 " />
				</div>
				<div class="login-btn check-btn">
					<input type="hidden" id="regist-btn-link" value="{{ url('/regist/membercomplete') }}" />
					<input type="button" id="regist-check-btn" value=" 注 册 " />
					<input type="button" id="back-btn" value=" 返 回 " />
				</div>
			</div>
		</form>
	</div>

</div>



@endsection

@section('script')
<script type="text/javascript" src="{{ asset('js/client/member.js') }}"></script>
@stop