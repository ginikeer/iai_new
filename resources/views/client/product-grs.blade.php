@section('title') IAI－艾卫艾商贸(上海)有限公司－ ｜ 最新产品 @stop

@section('style')
<link rel="stylesheet" href="{{ asset('css/client/product-late.css') }}"/>
@stop

@extends('master/client')
@section('content')
	

<div class="wrap service_warp" id="new_products_main">
	<div class="row crumb">
		<div class="container">
			<ul class="breadcrumb">
				<li>
					<a href="{{ url('/') }}">首页</a>
				</li>
				<li>最新产品</li>
			</ul>
		</div>
	</div>
	<SECTION>
		<DIV class="bass-frame" id="bass-content-area">
			<DIV class="bass-frame-content">
				<DIV id="bass-content-body">
					<DIV class="bass-figure-A01">
						<IMG alt="小型、价廉、操作简单！电磁夹爪崭新发售" style="width: 100%;" src="{{ asset('i/client/product/product-late/grs/new_grs_title.jpg') }}">
					</DIV>
					<DIV class="bass-conversion-A01">
						<DIV class="bass-conversion-download">
							<H2 class="download-title">GRS产品信息</H2>
							<UL class="download-list">
								<LI class="download-catalog">
									<A href="{{ url('/service/catalog') }}" target="_blank">纸质产品目录申请</A>
								</LI>
								<LI class="download-manual">
									<A href="{{ asset('pdf/client/product/GRS(CC0258-1A)_web.pdf') }}" target="_blank">产品目录下载</A>
								</LI>
								<LI class="download-cad2">
									<A href="https://linkable.partcommunity.com/3d-cad-models/iai/?info=iai" target="_blank">3D CAD图纸</A>
								</LI>
								<!-- /download-list -->
							</UL>
							<!-- /bass-conversion-download -->
						</DIV>
						<!-- /bass-conversion-A01 -->
					</DIV>
					<DIV class="bass-heading-A01">
						<H2><SPAN class="download-title">GRS的优点</SPAN></H2>
						<!-- /bass-heading-A01 -->
					</DIV>
					<div class="advantage-table">
						<div class="table-left">
							<DIV class="bass-feature-heading-A01">
								<H3><SPAN class="bass-feature-text">优点1</SPAN>小体型</H3>
								<p class="grs-desc">可以收纳入掌心的轻巧电动夹爪。</p>
							</DIV>
							<DIV class="bass-table-B01" style="text-align: center;">
								<IMG alt="" src="{{ asset('i/client/product/product-late/grs/new_rcon_img07.jpg') }}">
							</DIV>
						</div>
						<div class="table-right">
							<DIV class="bass-feature-heading-A01">
								<H3><SPAN class="bass-feature-text">优点2</SPAN>低价格</H3>
								<p class="grs-desc">实现了可以媲美气动夹爪的低廉价格。<br>实现电动化还能节省能源。</p>
							</DIV>
							<DIV class="bass-table-B01">
							</DIV>
						</div>
					</div>
					<div class="advantage-table" style="margin-bottom: 0px;">
						<div class="table-left">
							<DIV class="bass-feature-heading-A01">
								<H3><SPAN class="bass-feature-text">优点3</SPAN>ON/OFF控制方式，只需要1根配线</H3>
								<p class="grs-desc">只需要ON/OFF信号即可控制爪部的开闭动作。可以长时间保持夹持或松开的状态。<br>只需要1根配线，布线简单。</p>
							</DIV>
							<DIV class="bass-table-B01">
								<IMG alt="" src="{{ asset('i/client/product/product-late/grs/new_grs_img02.jpg') }}">
							</DIV>
						</div>
						<div class="table-right">
							<DIV class="bass-feature-heading-A01">
								<H3><SPAN class="bass-feature-text">优点4</SPAN>长寿命</H3>
								<p class="grs-desc">耐久性优越，可达到3,000万次以上的动作寿命。<br /><small>※本公司耐久实验的结果。并非实际使用条件下的寿命保证。</small></p>
							</DIV>
							<DIV class="bass-table-B01">
								<IMG alt="" src="{{ asset('i/client/product/product-late/grs/new_grs_img03.jpg') }}">
							</DIV>
						</div>
					</div>
				</DIV>
				<!-- /bass-frame-content -->
			</DIV>
			<!-- /bass-content-area -->
		</DIV>
	</SECTION>
</div>



@endsection

@section('script')
<script type="text/javascript" src="{{ asset('js/client/product-late.js') }}"></script>
@stop