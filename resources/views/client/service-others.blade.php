@section('title') IAI－艾卫艾商贸(上海)有限公司－ ｜ 和其他公司产品连接•通信的相关信息 @stop

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
				<li>和其他公司产品连接•通信的相关信息</li>
			</ul>
		</div>
	</div>
	<div class="container">
		<h2>和其他公司产品连接•通信的相关信息</h2>
		<hr>
		<p>
			<big>您可以在这里找到IAI产品和其他公司设备连接•通信的相关信息。<br>
				人机界面 (<a href="#proface">普洛菲斯</a>／<a href="#omron">欧姆龙</a>)<br>
					PLC(<a href="#omron">欧姆龙</a>／<a href="#panasonnic">松下电工</a>)
			</big>
		</p>
		<div class="pad-top-30">
			<h3 class="anchors" id="omron">欧姆龙</h3>
			<hr>
			<p>
				<big>● 对应欧姆龙PLC(CS1/CJ1系列)  ROBONET系列控制器　Modbus通信功能模块<br>
				● 对应欧姆龙可编程终端NS系列  PCON、ACON、SCON系列控制器接续界面模板</big>
			</p>
			<p>1.ROBONET控制器和欧姆龙PLC(CS1/CJ1系列)连接时可用的简便通信用功能模块可以在这里下载。(免费) </p>
			<p>
				<a href="http://www.iai-robot.co.jp/download/tashakiki/01.html" target="_blank" class="btn btn-red btn-xs">点击这里下载</a>
			</p>
			<p>2.欧姆龙可编程终端NS系列接续模板画面PCON/ACON/SCON系列控制器可以通过Modbus RTU和欧姆龙可编程终端NS系列直接连接。界面模板可以在这里下载。(免费) </p>
			<p>
				<a href="http://www.fa.omron.co.jp/guide/solution/hmi/download/ns/artifice.html" target="_blank" class="btn btn-red btn-xs">点击这里下载</a>
			</p>
			<p>(※连接至欧姆龙日本(オムロン株式会社)的主页相关页面。)</p>
		</div>
		<div class="pad-top-30">
			<h3 class="anchors" id="proface">普洛菲斯</h3>
			<hr>
			<p>
				<big>● 对应欧姆龙PLC(CS1/CJ1系列)  ROBONET系列控制器　Modbus通信功能模块<br>
				● 对应欧姆龙可编程终端NS系列  PCON、ACON、SCON系列控制器接续界面模板</big>
			</p>
			<p>1.电缸控制器系列(ACON・PCON・SCON)和普洛菲斯人机界面触摸屏(GP3000)连接、使用时的操作/设定用软件的下载。(免费) </p>
			<p>
				<a href="http://www.proface.co.jp/otasuke/sample/detail/common/s_rob.html" target="_blank" class="btn btn-red btn-xs">点击这里下载</a>
			</p>
			<p>(※连接至普洛菲斯公司(株式会社デジタル)的主页相关页面。)</p>
			<p>
				2.XSEL、SSEL、ASEL、PSEL、TT系列控制器和普洛菲斯人机界面触摸屏(GP3000)，通过串行通信连接的应用案例程序下载。(免费)<br>
					 ※本程序对应的机种为GP3000系列。
				<br> ※本程序对应的画图软件要求GP-Pro EX Ver.2.50.100及以上。</p>
			<p>
				<a href="http://www.proface.co.jp/otasuke/sample/detail/common/s_controller.html" target="_blank" class="btn btn-red btn-xs">点击这里下载</a>
			</p>
			<p>(※连接至普洛菲斯公司(株式会社デジタル)的主页相关页面。)</p>
		</div>
		<div class="pad-top-30">
			<h3 class="anchors" id="panasonnic">松下电工</h3>
			<hr>
			<p><big>● 对应松下电工PLC(FP-X/FP-Σ)ROBONET系列控制器通信软件</big></p>
			<p>ROBONET系列控制器和松下电工PLC(FP-X/FP-Σ系列)连接使用时的控制软件在这里下载。(免费)</p>
			<p>1.通过通用串行通信驱动ROBONET伺服电机。</p>
			<p>
				<a href="http://www.proface.co.jp/otasuke/sample/detail/common/s_rob.html" target="_blank" class="btn btn-red btn-xs">点击这里下载</a>
			</p>
			<p><small>(※连接至松下电工(パナソニック電工株式会社) 的主页相关页面。)</small></p>
			<p>2.通过通用串行通信读入ROBONET状态数据。</p>
			<p>
				<a href="http://www.proface.co.jp/otasuke/sample/detail/common/s_rob.html" target="_blank" class="btn btn-red btn-xs">点击这里下载</a>
			</p>
			<p><small>(※连接至松下电工(パナソニック電工株式会社) 的主页相关页面。)</small></p>
			<p>3.通过ModBUS通信控制ROBONET。</p>
			<p>
				<a href="http://www.proface.co.jp/otasuke/sample/detail/common/s_rob.html" target="_blank" class="btn btn-red btn-xs">点击这里下载</a>
			</p>
			<p><small>(※连接至松下电工(パナソニック電工株式会社) 的主页相关页面。)</small></p>
		</div>
	</div>
</div>



@endsection

@section('script')
<script type="text/javascript" src="{{ asset('js/client/service.js') }}"></script>
@stop