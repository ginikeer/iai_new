@section('title') IAI－艾卫艾商贸(上海)有限公司－ ｜ 产品目录 @stop

@section('style')
<link rel="stylesheet" href="{{ asset('css/client/service.css') }}"/>
@stop

@extends('master/client')
@section('content')
	

<div class="wrap service_warp" id="service_main">
	<div class="row crumb">
		<div class="container">
			<ul class="breadcrumb">
				<li>
					<a href="{{ url('/') }}">首页</a>
				</li>
				<li>
					<a href="{{ url('/service') }}">服务</a>
				</li>
				<li>产品目录</li>
			</ul>
		</div>
	</div>
	<div class="container">
		<h2>产品目录</h2>
		<hr />
		<p>
			<a href="{{ url('/product') }}" class="btn btn-red btn-xs" target="_blank">新产品目录下载(中文)</a>
			<a href="http://www.iai-robot.co.jp/download/catalog/index.html" class="btn btn-red btn-xs" target="_blank">新产品目录下载(日文)</a>
		</p>
		<div class="service-list">
			<div class="service-list-item">
				<div class="media">
					<div class="media-left">
						<a class="idtab" href="##"><img src="{{ asset('i/client/service/catalog-1.jpg') }}"></a>
					</div>
					<div class="media-body">
						<h4><strong>综合目录</strong></h4>
						<h2>2017</h2>
						<p>各种商品按系列、类型分开放置，请选择所需要的PDF文件夹。</p>
						<a class="catalog2017-btn" href="{{url('/service/apply')}}">纸质目录申请</a>
					</div>
				</div>
				<div class="tab-content" id="catalog-3">
					<!-- loop start -->
					<h3>第一卷：选型资料/技术资料</h3>
					<div class="list-lined">
						<div class="list-item">
							<div class="row row-no-offset">
								<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>选型资料/技术资料</big></div>
								<div class="col-lg-4 text-right">
									<a href="download.php?l=CN&amp;f=catalog&amp;fb=2017&amp;n=catalogue01" target="_blank" class="btn btn-red btn-xs">点击下载</a>
								</div>
							</div>
						</div>
					</div>
					<h3>第二卷：单轴机械手</h3>
					<div class="list-lined">
						<div class="list-item">
							<div class="row row-no-offset">
								<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>单轴机械手</big></div>
								<div class="col-lg-4 text-right">
									<a href="download.php?l=CN&amp;f=catalog&amp;fb=2017&amp;n=catalogue02" target="_blank" class="btn btn-red btn-xs">点击下载</a>
								</div>
							</div>
						</div>
					</div>
					<h3>第三卷：直交/水平多关节/桌上型</h3>
					<div class="list-lined">
						<div class="list-item">
							<div class="row row-no-offset">
								<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>直交/水平多关节/桌上型</big></div>
								<div class="col-lg-4 text-right">
									<a href="download.php?l=CN&amp;f=catalog&amp;fb=2017&amp;n=catalogue03" target="_blank" class="btn btn-red btn-xs">点击下载</a>
								</div>
							</div>
						</div>
					</div>
					<h3>第四卷：伺服压力机/夹爪/旋转/其他</h3>
					<div class="list-lined">
						<div class="list-item">
							<div class="row row-no-offset">
								<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>伺服压力机/夹爪/旋转/其他</big></div>
								<div class="col-lg-4 text-right">
									<a href="download.php?l=CN&amp;f=catalog&amp;fb=2017&amp;n=catalogue04" target="_blank" class="btn btn-red btn-xs">点击下载</a>
								</div>
							</div>
						</div>
					</div>
					<h3>第五卷：无尘/防尘防滴</h3>
					<div class="list-lined">
						<div class="list-item">
							<div class="row row-no-offset">
								<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>无尘/防尘防滴</big></div>
								<div class="col-lg-4 text-right">
									<a href="download.php?l=CN&amp;f=catalog&amp;fb=2017&amp;n=catalogue05" target="_blank" class="btn btn-red btn-xs">点击下载</a>
								</div>
							</div>
						</div>
					</div>
					<h3>第六卷：控制器</h3>
					<div class="list-lined">
						<div class="list-item">
							<div class="row row-no-offset">
								<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>控制器</big></div>
								<div class="col-lg-4 text-right">
									<a href="download.php?l=CN&amp;f=catalog&amp;fb=2017&amp;n=catalogue06" target="_blank" class="btn btn-red btn-xs">点击下载</a>
								</div>
							</div>
						</div>
					</div>

					<!-- loop end -->
				</div>
			</div>
			<div class="service-list-item">
				<div class="media">
					<div class="media-left">
						<a href="#catalog-1" class="idtab"><img src="{{ asset('i/client/service/catalog-2.jpg') }}"></a>
					</div>
					<div class="media-body">
						<h5><strong>电缸综合产品目录</strong></h5>
						<h2>2013</h2>
						<p>各种商品按系列、类型分开放置，请选择所需要的PDF文件夹。</p>
					</div>
				</div>
				<div class="tab-content" id="catalog-1">
					<!-- loop start -->
					<h3>产品概要</h3>
					<div class="list-lined">
						<div class="list-item">
							<div class="row row-no-offset">
								<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>产品概要</big></div>
								<div class="col-lg-4 text-right">
									<a href="download.php?l=CN&amp;f=catalog&amp;fb=2013&amp;n=CC0203-2A_RC2013_01_index" target="_blank" class="btn btn-red btn-xs">点击下载</a>
								</div>
							</div>
						</div>
					</div>
					<h3>滑块型</h3>
					<div class="list-lined">
						<div class="list-item">
							<div class="row row-no-offset">
								<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>滑块型</big></div>
								<div class="col-lg-4 text-right">
									<a href="download.php?l=CN&amp;f=catalog&amp;fb=2013&amp;n=CC0203-2A_RC2013_02_slider" target="_blank" class="btn btn-red btn-xs">点击下载</a>
								</div>
							</div>
						</div>
					</div>
					<h3>拉杆型</h3>
					<div class="list-lined">
						<div class="list-item">
							<div class="row row-no-offset">
								<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>拉杆型</big></div>
								<div class="col-lg-4 text-right">
									<a href="download.php?l=CN&amp;f=catalog&amp;fb=2013&amp;n=CC0203-2A_RC2013_03_rod" target="_blank" class="btn btn-red btn-xs">点击下载</a>
								</div>
							</div>
						</div>
					</div>
					<h3>平台型</h3>
					<div class="list-lined">
						<div class="list-item">
							<div class="row row-no-offset">
								<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>平台型</big></div>
								<div class="col-lg-4 text-right">
									<a href="download.php?l=CN&amp;f=catalog&amp;fb=2013&amp;n=CC0203-2A_RC2013_04_table" target="_blank" class="btn btn-red btn-xs">点击下载</a>
								</div>
							</div>
						</div>
					</div>
					<h3>夹爪型旋转型</h3>
					<div class="list-lined">
						<div class="list-item">
							<div class="row row-no-offset">
								<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>夹爪型旋转型</big></div>
								<div class="col-lg-4 text-right">
									<a href="download.php?l=CN&amp;f=catalog&amp;fb=2013&amp;n=CC0203-2A_RC2013_05_gripper_rotary" target="_blank" class="btn btn-red btn-xs">点击下载</a>
								</div>
							</div>
						</div>
					</div>
					<h3>线性伺服型</h3>
					<div class="list-lined">
						<div class="list-item">
							<div class="row row-no-offset">
								<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>线性伺服型</big></div>
								<div class="col-lg-4 text-right">
									<a href="download.php?l=CN&amp;f=catalog&amp;fb=2013&amp;n=CC0203-2A_RC2013_06_linear" target="_blank" class="btn btn-red btn-xs">点击下载</a>
								</div>
							</div>
						</div>
					</div>
					<h3>无尘室型</h3>
					<div class="list-lined">
						<div class="list-item">
							<div class="row row-no-offset">
								<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>无尘室型</big></div>
								<div class="col-lg-4 text-right">
									<a href="download.php?l=CN&amp;f=catalog&amp;fb=2013&amp;n=CC0203-2A_RC2013_07_cleanroom" target="_blank" class="btn btn-red btn-xs">点击下载</a>
								</div>
							</div>
						</div>
					</div>
					<h3>防滴防尘型</h3>
					<div class="list-lined">
						<div class="list-item">
							<div class="row row-no-offset">
								<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>防滴防尘型</big></div>
								<div class="col-lg-4 text-right">
									<a href="download.php?l=CN&amp;f=catalog&amp;fb=2013&amp;n=CC0203-2A_RC2013_08_waterproof" target="_blank" class="btn btn-red btn-xs">点击下载</a>
								</div>
							</div>
						</div>
					</div>
					<h3>控制器</h3>
					<div class="list-lined">
						<div class="list-item">
							<div class="row row-no-offset">
								<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>控制器</big></div>
								<div class="col-lg-4 text-right">
									<a href="download.php?l=CN&amp;f=catalog&amp;fb=2013&amp;n=CC0203-2A_RC2013_09_controller" target="_blank" class="btn btn-red btn-xs">点击下载</a>
								</div>
							</div>
						</div>
					</div>
					<h3>技术资料</h3>
					<div class="list-lined">
						<div class="list-item">
							<div class="row row-no-offset">
								<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>技术资料</big></div>
								<div class="col-lg-4 text-right">
									<a href="download.php?l=CN&amp;f=catalog&amp;fb=2013&amp;n=CC0203-2A_RC2013_10_reference" target="_blank" class="btn btn-red btn-xs">点击下载</a>
								</div>
							</div>
						</div>
					</div>
			
					<!-- loop end -->
				</div>
			</div>
			<div class="service-list-item">
				<div class="media">
					<div class="media-left">
						<a href="#catalog-2" class="idtab"><img src="{{ asset('i/client/service/catalog-3.jpg') }}"></a>
					</div>
					<div class="media-body">
						<h2>细小型电缸</h2>
						<p>各种商品按系列、类型分开放置，请选择所需要的PDF文件夹。</p>
						<p>
							<a href="download.php?l=CN&amp;f=catalog&amp;fb=micro&amp;n=xixiaoxing" target="_blank" class="btn btn-red btn-xs">点击下载</a>
						</p>
					</div>
				</div>
				<div class="tab-content" id="catalog-2">
					<!-- loop start -->
					<h3>产品概要</h3>
					<div class="list-lined">
						<div class="list-item">
							<div class="row row-no-offset">
								<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>产品概要</big></div>
								<div class="col-lg-4 text-right">
									<a href="download.php?l=CN&amp;f=catalog&amp;fb=micro&amp;n=all" target="_blank" class="btn btn-red btn-xs">点击下载</a>
								</div>
							</div>
						</div>
					</div>
					<h3>细小型滑块型</h3>
					<div class="list-lined">
						<div class="list-item">
							<div class="row row-no-offset">
								<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>细小型滑块型</big></div>
								<div class="col-lg-4 text-right">
									<a href="download.php?l=CN&amp;f=catalog&amp;fb=micro&amp;n=slider" target="_blank" class="btn btn-red btn-xs">点击下载</a>
								</div>
							</div>
						</div>
					</div>
					<h3>细小型拉杆型</h3>
					<div class="list-lined">
						<div class="list-item">
							<div class="row row-no-offset">
								<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>细小型拉杆型</big></div>
								<div class="col-lg-4 text-right">
									<a href="download.php?l=CN&amp;f=catalog&amp;fb=micro&amp;n=rod" target="_blank" class="btn btn-red btn-xs">点击下载</a>
								</div>
							</div>
						</div>
					</div>
					<h3>细小型滑台型</h3>
					<div class="list-lined">
						<div class="list-item">
							<div class="row row-no-offset">
								<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>细小型滑台型</big></div>
								<div class="col-lg-4 text-right">
									<a href="download.php?l=CN&amp;f=catalog&amp;fb=micro&amp;n=slip" target="_blank" class="btn btn-red btn-xs">点击下载</a>
								</div>
							</div>
						</div>
					</div>
					<h3>细小型线性伺服型</h3>
					<div class="list-lined">
						<div class="list-item">
							<div class="row row-no-offset">
								<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>细小型线性伺服型</big></div>
								<div class="col-lg-4 text-right">
									<a href="download.php?l=CN&amp;f=catalog&amp;fb=micro&amp;n=line" target="_blank" class="btn btn-red btn-xs">点击下载</a>
								</div>
							</div>
						</div>
					</div>
					<h3>选型参考&amp;控制器</h3>
					<div class="list-lined">
						<div class="list-item">
							<div class="row row-no-offset">
								<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>选型参考&amp;控制器</big></div>
								<div class="col-lg-4 text-right">
									<a href="download.php?l=CN&amp;f=catalog&amp;fb=micro&amp;n=control" target="_blank" class="btn btn-red btn-xs">点击下载</a>
								</div>
							</div>
						</div>
					</div>
			
					<!-- loop end -->
				</div>
			</div>
		</div>
	</div>
</div>



@endsection

@section('script')
<script type="text/javascript" src="{{ asset('js/client/service.js') }}"></script>
@stop