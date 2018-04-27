@section('title') IAI－艾卫艾商贸(上海)有限公司－ ｜ 公司概要 @stop

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
				<li>联系我们</li>
			</ul>
		</div>
	</div>
	<div class="container">
		<!--公司概要-->
		<div class="color-white" id="profile">
			<div>
				<h1>公司概要</h1>
				<hr>
				<div class="row">
					<div class="col-lg-12">
						<div>
							<p>IAI公司1976年成立于日本，是小型工业机械手制造商，市场份额居业界首位，占据日本直线电动执行机构市场的50%以上。凭借齐全的品种、一流的品质以及周到的服务，IAI机械手获得了包括汽车、半导体、电子、医疗及食品等各制造业的青睐。</p>
						</div>
					</div>
				</div>
				<div class="row profile_row">
					<div class="col-lg-6">
						<h4 class="profile_title">1. 服务体系</h4>
						<div class="service_system">
							<p>我们拥有覆盖全国多达34个代理点117个销售点的服务支援体系。</p>
							<!--<div class="outstanding_performance_img">
								<img src="assets/images/profile_bg1.jpg" />
							</div>-->
							<p class="service_system_small"><small>2007年1月在中国上海成立艾卫艾商贸(上海)有限公司<br />2011年9月在中国深圳成立艾卫艾商贸(上海)有限公司深圳分公司<br />2017年4月在中国北京成立艾卫艾商贸（上海）有限公司北京分公司</small></p>
						</div>
					</div>
					<div class="col-lg-6">
						<h4 class="profile_title">2. 业绩卓越<small>(市场占有率No.1)</small></h4>
						<p>在众多行业领域内，我们的产品服务于国内外知名企业。特别是作为小型工业机械手的专业厂商，更是超过60%的日本市场占有率，深深地赢得了广大客户的信任与支持。</p>
						<!--<p><small>单轴、直角坐标机械手日本市场占有率(富士经济调查报告)</small></p>
						<div class="outstanding_performance_img">
							<img src="assets/images/profile2_1.jpg" />
							<p>销售台数占有率动迁图</p>
						</div>
						<div class="outstanding_performance_img">
							<img src="assets/images/profile3_1.jpg" />
							<p>销售额占有率动迁图</p>
						</div>-->
					</div>
				</div>
				<div class="row profile_row">
					<div class="col-lg-6">
						<h4 class="profile_title">3. 研发积极</h4>
						<div class="service_system">
							<p>顺应时代需求，我们积极投入到研发工作中去。向市场提供新技术新产品的同时，进一步将客户的意见融于产品设计中，从而向市场和客户提供更为易用的产品。</p>
						</div>
					</div>
					<div class="col-lg-6">
						<h4 class="profile_title">4. 品管严格</h4>
						<div class="service_system">
							<p>为确保产品品质，我们引进了最先进的检测设备，并由熟练的操作员在准无尘室中进行组装。同时，杜绝微小异常状况出现的检测流程，可以严格确保生产出高可靠性、高品质的产品。</p>
						</div>
					</div>
				</div>
				<div class="row profile_row">
					<div class="col-lg-6">
						<h4 class="profile_title">5. 产品丰富</h4>
						<div class="service_system">
							<p>从电缸到单轴及直角坐标机械手、控制器，我们的各种产品展现出性能卓越、简单易用、机型丰富、经济实用等特性。根据使用目的与环境的不同，我们可以向客户提供竞争力强、高附加值的多种机型解决方案。</p>
							<dl class="product_rich">
								<dd>电缸</dd>
								<dd>单轴机械手</dd>
								<dd>线性伺服机械手</dd>
								<dd>无尘室用机械手</dd>
								<dd>防水防尘型机械手</dd>
								<dd>直角坐标机械手</dd>
								<dd>桌上型机械手</dd>
								<dd>水平多关节械手</dd>
								<dd>超小型电动机械手</dd>
								<dd>各类控制器</dd>
							</dl>
						</div>
					</div>
					<div class="col-lg-6">
						<h4 class="profile_title">6. 特规产品</h4>
						<div class="service_system">
							<p>为了向客户提供最适合的产品，我们积极开展以标准型产品为原型的定制开发工作。<br>因标准型产品造成客户使用不便时，请与我们联系。</p>
							<dl class="product_rich">
								<dt>特规产品占销售额的比例【一年】</dt>
								<dt>特规产品占销售额40%</dt>
								<dt>主要的特规开发内容</dt>
								<dd>行程特规</dd>
								<dd>电缆拖链特规</dd>
								<dd>电缆布线方向特规</dd>
								<dd>导轨特规</dd>
								<dd>2轴/3轴组合特规</dd>
								<dd>马达处有机硅密封胶特规</dd>
								<dd>马达折返特规</dd>
								<dd>双滑块特规</dd>
								<dd>电缆长度特规</dd>
								<dd>指定润滑油特规等</dd>
							</dl>
						</div>
					</div>
				</div>
			</div>
		
			<div class="profile-section">
				<h3>主要客户群</h3>
				<hr>
				<div class="row group-section">
					<div class="row">
						<div class="col-lg-4">爱信精机</div>
						<div class="col-lg-4">佳能</div>
						<div class="col-lg-4">TDK</div>
					</div>
					<div class="row">
						<div class="col-lg-4">东丽</div>
						<div class="col-lg-4">日清食品</div>
						<div class="col-lg-4">普利司通</div>
					</div>
					<div class="row">
						<div class="col-lg-4">山崎面包</div>
						<div class="col-lg-4">阿尔卑斯电器</div>
						<div class="col-lg-4">夏普</div>
					</div>
					<div class="row">
						<div class="col-lg-4">泰尔茂</div>
						<div class="col-lg-4">捷太格特（JTEKT)</div>
						<div class="col-lg-4">日立制作所</div>
					</div>
					<div class="row">
						<div class="col-lg-4">本田技研工业</div>
						<div class="col-lg-4">横河电机</div>
						<div class="col-lg-4">欧姆龙</div>
					</div>
					<div class="row">
						<div class="col-lg-4">STANLEY电气</div>
						<div class="col-lg-4">电装</div>
						<div class="col-lg-4">丰田汽车</div>
					</div>
					<div class="row">
						<div class="col-lg-4">富士胶卷</div>
						<div class="col-lg-4">Panasonic</div>
						<div class="col-lg-4">ROHM半导体集团</div>
					</div>
					<div class="row">
						<div class="col-lg-4">花王</div>
						<div class="col-lg-4">索尼</div>
						<div class="col-lg-4">东芝</div>
					</div>
					<div class="row">
						<div class="col-lg-4">丰田自动织机</div>
						<div class="col-lg-4">兄弟工业</div>
						<div class="col-lg-4">松下电工</div>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</div>



@endsection

@section('script')
<script type="text/javascript" src="{{ asset('js/client/company.js') }}"></script>
@stop