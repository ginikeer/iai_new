@section('title') IAI－艾卫艾商贸(上海)有限公司－ ｜ 沿革 @stop

@section('style')
<link rel="stylesheet" href="{{ asset('css/client/company.css') }}"/>
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
				<li>沿革</li>
			</ul>
		</div>
	</div>
	<div class="container">
		<!--沿革-->
		<div class="color-white" id="history">
			<h1>沿革</h1>
			<hr>
			<div class="row">
				<table>
					<tbody>
						<tr>
							<th width="16%">1976年</th>
							<th width="12%">4月</th>
							<td width="72%">
								<ul class="list-lined">
									<li class="list-item">公司以资本金200万日元</li>
									<li class="list-item">在静冈市清水西高町75番地成立</li>
									<li class="list-item">清水机电株式会社</li>
								</ul>
							</td>
						</tr>
						<tr>
							<th>1986年</th>
							<th>10月</th>
							<td>
								<ul class="list-lined">
									<li class="list-item">开始销售制造“IA”</li>
									<li class="list-item">单轴直角坐标机械手产品</li>
								</ul>
							</td>
						</tr>
						<tr>
							<th rowspan="2">1992年</th>
							<th>5月</th>
							<td>
								<ul class="list-lined">
									<li class="list-item">IA销售达3万轴</li>
								</ul>
							</td>
						</tr>
						<tr>
							<th class="bass-separate">6月</th>
							<td>
								<ul class="list-lined">
									<li class="list-item">公司名更改为株式会社IAI</li>
									<li class="list-item">在静冈市清水区广濑645-1</li>
									<li class="list-item">新建工厂并搬迁至此</li>
								</ul>
							</td>
						</tr>
						<tr>
							<th rowspan="2">1997年</th>
							<th>2月</th>
							<td>
								<ul class="list-lined">
									<li class="list-item">在静冈，东京，大阪，福冈，长野成立营业所</li>
								</ul>
							</td>
						</tr>
						<tr>
							<th class="bass-separate">6月</th>
							<td>
								<ul class="list-lined">
									<li class="list-item">IA销售达10万轴</li>
								</ul>
							</td>
						</tr>
						<tr>
							<th>1996年</th>
							<th>6月</th>
							<td>
								<ul class="list-lined">
									<li class="list-item">IA开始销售“电缸”系列</li>
									<li class="list-item">（单轴滑块）产品</li>
								</ul>
							</td>
						</tr>
						<tr>
							<th>1999年</th>
							<th>6月</th>
							<td>
								<ul class="list-lined">
									<li class="list-item">IA开始销售“电缸”系列</li>
									<li class="list-item">（单轴滑块）产品</li>
								</ul>
							</td>
						</tr>
						<tr>
							<th>2001年</th>
							<th>10月</th>
							<td>
								<ul class="list-lined">
									<li class="list-item">获得ISO9001认证</li>
								</ul>
							</td>
						</tr>
						<tr>
							<th>2003年</th>
							<th>12月</th>
							<td>
								<ul class="list-lined">
									<li class="list-item">IA销售达30万轴</li>
								</ul>
							</td>
						</tr>
						<tr>
							<th>2004年</th>
							<th>9月</th>
							<td>
								<ul class="list-lined">
									<li class="list-item">新建尾羽工厂</li>
								</ul>
							</td>
						</tr>
						<tr>
							<th rowspan="2">2007年</th>
							<th>1月</th>
							<td>
								<ul class="list-lined">
									<li class="list-item">在中国上海市成立艾卫艾商贸（上海）有限公司</li>
								</ul>
							</td>
						</tr>
						<tr>
							<th class="bass-separate">8月</th>
							<td>
								<ul class="list-lined">
									<li class="list-item">新建总公司大楼</li>
								</ul>
							</td>
						</tr>
						<tr>
							<th>2008年</th>
							<th>5月</th>
							<td>
								<ul class="list-lined">
									<li class="list-item">日本全国第25个营业所在盛冈成立</li>
								</ul>
							</td>
						</tr>
						<tr>
							<th rowspan="2">2011年</th>
							<th>2月</th>
							<td>
								<ul class="list-lined">
									<li class="list-item">总销售轴数达100万轴</li>
								</ul>
							</td>
						</tr>
						<tr>
							<th class="bass-separate">9月</th>
							<td>
								<ul class="list-lined">
									<li class="list-item">在中国深圳市成立艾卫艾商贸（上海）有限公司深圳分公司</li>
								</ul>
							</td>
						</tr>
						<tr>
							<th>2013年</th>
							<th>3月</th>
							<td>
								<ul class="list-lined">
									<li class="list-item">IAI Robot(Thailand) Co.,Ltd成立</li>
								</ul>
							</td>
						</tr>
						<tr>
							<th>2014年</th>
							<th>1月</th>
							<td>
								<ul class="list-lined">
									<li class="list-item">富士宫工厂新建完成</li>
								</ul>
							</td>
						</tr>
						<tr>
							<th>2017年</th>
							<th>4月</th>
							<td>
								<ul class="list-lined">
									<li class="list-item">在中国北京成立艾卫艾商贸（上海）有限公司北京分公司</li>
								</ul>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>



@endsection

@section('script')
<script type="text/javascript" src="{{ asset('js/client/company.js') }}"></script>
@stop