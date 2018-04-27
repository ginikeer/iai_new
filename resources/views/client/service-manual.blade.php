@section('title') IAI－艾卫艾商贸(上海)有限公司－ ｜ 使用说明书 @stop

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
				<li>使用说明书</li>
			</ul>
		</div>
	</div>
	<div class="container">
		<h2>使用说明书</h2>
		<hr>
		<ul class="nav-blocks" id="nav-cases">
        	<li><a href="#svpm">一体型</a></li>
        	<li><a href="#live">驱动轴</a></li>
        	<li><a href="#ctrl">控制器</a></li>
        	<li><a href="#soft">软件用户手册&amp;其他</a></li>
        </ul>
        <div>
        	<h3 class="anchors" id="svpm">一体型</h3>
        	<div class="service-list">
        		<div class="service-list-item">
        			<div class="row">
        				<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>ERC</big></div>
        				<div class="col-lg-4 text-right">
        					<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
        					<a href="download.php?l=EN&amp;f=manual&amp;n=ERC(ME0137-7C)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
        					<a href="download.php?l=JA&amp;f=manual&amp;n=ERC(MJ0137-7C)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
        				</div>
        			</div>
        		</div>
        		<div class="service-list-item">
        			<div class="row">
        				<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>ERC2-PIO</big></div>
        				<div class="col-lg-4 text-right">
        					<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
        					<a href="download.php?l=EN&amp;f=manual&amp;n=ERC2-PIO(ME0158-5D)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
        					<a href="download.php?l=JA&amp;f=manual&amp;n=ERC2-PIO(MJ0158-5D)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
        				</div>
        			</div>
        		</div>
        		<div class="service-list-item">
        			<div class="row">
        				<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>ERC2-SIO</big></div>
        				<div class="col-lg-4 text-right">
        					<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
        					<a href="download.php?l=EN&amp;f=manual&amp;n=ERC2-SIO(ME0159-7C)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
        					<a href="download.php?l=JA&amp;f=manual&amp;n=ERC2-SIO(MJ0159-7C)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
        				</div>
        			</div>
        		</div>
        		<div class="service-list-item">
        			<div class="row">
        				<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>ERC3</big></div>
        				<div class="col-lg-4 text-right">
        					<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
        					<a href="download.php?l=EN&amp;f=manual&amp;n=ERC3(ME0297-13B)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
        					<a href="download.php?l=JA&amp;f=manual&amp;n=ERC3(MJ0297-13B)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
        				</div>
        			</div>
        		</div>
        		<div class="service-list-item">
        			<div class="row">
        				<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>ERC3 GATEWAY</big></div>
        				<div class="col-lg-4 text-right">
        					<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
        					<a href="download.php?l=EN&amp;f=manual&amp;n=ERC3GATEWAY(ME0302-3B)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
        					<a href="download.php?l=JA&amp;f=manual&amp;n=ERC3GATEWAY(MJ0302-3B)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
        				</div>
        			</div>
        		</div>
        		<div class="service-list-item">
        			<div class="row">
        				<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>TT</big></div>
        				<div class="col-lg-4 text-right">
        					<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
        					<a href="download.php?l=EN&amp;f=manual&amp;n=TT(ME0149-10B)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
        					<a href="download.php?l=JA&amp;f=manual&amp;n=TT(MJ0149-10B)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
        				</div>
        			</div>
        		</div>
        		<div class="service-list-item">
        			<div class="row">
        				<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>TTA</big></div>
        				<div class="col-lg-4 text-right">
        					<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
        					<a href="download.php?l=EN&amp;f=manual&amp;n=TTA(ME0320-5A)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
        					<a href="download.php?l=JA&amp;f=manual&amp;n=TTA(MJ0320-5A)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
        				</div>
        			</div>
        		</div>
        	</div>
        </div>
        <div class="pad-top-30">
        	<h3 class="anchors" id="live">驱动轴</h3>
	        <div class="service-list">
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>ASSEMBLY_ICSA_ICSPA</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=ASSEMBLY_ICSA_ICSPA(ME0215-5A)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=ASSEMBLY_ICSA_ICSPA(MJ0215-5A)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>ASSEMBLY_ICSB_ICSPB</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=ASSEMBLY_ICSB_ICSPB(ME0322-1B)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=ASSEMBLY_ICSB_ICSPB(MJ0322-1B)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>ASSEMBLY_ICSPA-LSA</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=ASSEMBLY_ICSPA-LSA(ME0197-1A)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=ASSEMBLY_ICSPA-LSA(MJ0197-1A)_o" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>ASSEMBLY_ICSPA-NS</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=ASSEMBLY_ICSPA-NS(ME0196-1A)_o" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=ASSEMBLY_ICSPA-NS(MJ0196-1A)_o" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>ASSEMBLY_IK</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=ASSEMBLY_IK(ME0193-3A)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=ASSEMBLY_IK(MJ0193-3A)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>CT4</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=CT4(ME3724-6C)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=CT4(MJ3724-6C)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>DS</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=DS(MJ3623-6N)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>FS</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=FS(ME3607-7D)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=FS(MJ3607-7D)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>IF</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=IF(ME3618-12D)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=IF(MJ3618-12D)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>IS</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=IS(P)(D)(A)(CR)(ESD)(ME3682-9D)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=IS(P)(D)(A)(CR)(ESD)(MJ3682-9D)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>IS</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=IS(P)DB(CR)_SSPDACR(ME3712-10C)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=IS(P)DB(CR)_SSPDACR(MJ3712-10C)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>IS_ISP_ISA_ISPA</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=IS_ISP_ISA_ISPA(ME3681-15D)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=IS_ISP_ISA_ISPA(MJ3681-15D)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>ISB_ISPB_SSPA</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=ISB_ISPB_SSPA(ME3708-12C)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=ISB_ISPB_SSPA(MJ3708-12C)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>ISWA_ISPWA</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=ISWA_ISPWA(ME3688-8B)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=ISWA_ISPWA(MJ3688-8B)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>IX-HNN_INN50_60_70_80</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=IX-HNN_INN50_60_70_80(ME3636-5B)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=IX-HNN_INN50_60_70_80(MJ3636-5B)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>IX-HNN_INN50_60_70_80H</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=IX-HNN_INN50_60_70_80H(ME3704-9A)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=IX-HNN_INN50_60_70_80H(MJ3704-9A)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>IX-NNC25_35</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=IX-NNC25_35(ME3629-4B)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=IX-NNC25_35(MJ3629-4B)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>IX-NNC50_60_70_80</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=IX-NNC50_60_70_80(ME3628-4B)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=IX-NNC50_60_70_80(MJ3628-4B)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>IX-NNN100_120</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=IX-NNN100_120(ME3726-4C)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=IX-NNN100_120(MJ3726-4C)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>IX-NNN25_35</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=IX-NNN25_35(ME3624-7B)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=IX-NNN25_35(MJ3624-7B)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>IX-NNN50_60_70_80</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=IX-NNN50_60_70_80(ME3620-6B)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=IX-NNN50_60_70_80(MJ3620-6B)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>IX-NNN_NNC12_15_18</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=IX-NNN_NNC12_15_18(ME3693-7B)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=IX-NNN_NNC12_15_18(MJ3693-7B)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>IX-NNN_NNW_NNC25_35H</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=IX-NNN_NNW_NNC25_35H(ME3702-9A)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=IX-NNN_NNW_NNC25_35H(MJ3702-9A)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>IX-NNN_NNW_NNC50_60_70_80H_NSN50_60H</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=IX-NNN_NNW_NNC50_60_70_80H_NSN50_60H(ME3707-9A)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=IX-NNN_NNW_NNC50_60_70_80H_NSN50_60H(MJ3707-9A)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>IX-NNW25_35</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=IX-NNW25_35(ME3635-4B)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=IX-NNW25_35(MJ3635-5B)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>IX-NNW50_60_70_80</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=IX-NNW50_60_70_80(ME3632-4B)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=IX-NNW50_60_70_80(MJ3632-5B)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>IX-NSN50_60</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=IX-NSN50_60(ME3631-4B)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=IX-NSN50_60(MJ3631-4B)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>IX-TNN_UNN30_35</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=IX-TNN_UNN30_35(ME3625-5B)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=IX-TNN_UNN30_35(MJ3625-5B)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>IX-TNN_UNN30_35H</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=IX-TNN_UNN30_35H(ME3705-9A)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=IX-TNN_UNN30_35H(MJ3705-9A)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>IXP-3C_4C_3W_4W35_45</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=IXP-3C_4C_3W_4W35_45(ME3748-1A)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=IXP-3C_4C_3W_4W35_45(MJ3748-1A)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>IXP-3N_4N35_45</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=IXP-3N_4N35_45(ME3740-7B)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=IXP-3N_4N35_45(MJ3740-7B)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>LSA-H8_L15</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=LSA-H8_L15(ME3638-3B)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=LSA-H8_L15(MJ3638-3B)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>LSA-N10_N15_N19</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=LSA-N10_N15_N19(ME3661-5D)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=LSA-N10_N15_N19(MJ3661-5D)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>LSA-S6_S8_S10</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=LSA-S6_S8_S10(ME3646-4A)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=LSA-S6_S8_S10(MJ3646-4A)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>LSA-W21</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=LSA-W21(ME3645-4D)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=LSA-W21(MJ3645-4D)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>NS</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=NS(ME3663-9F)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=NS(MJ3663-9F)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>RCA-ARM_RCS2-ARM</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=RCA-ARM_RCS2-ARM(ME3655-6D)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=RCA-ARM_RCS2-ARM(MJ3655-6D)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>RCA-ROD_RCAW-ROD</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=RCA-ROD_RCAW-ROD(ME3653-8D)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=RCA-ROD_RCAW-ROD(MJ3653-8D)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>RCA-SA_SS_RCACR-SA</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=RCA-SA_SS_RCACR-SA(ME3648-15B)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=RCA-SA_SS_RCACR-SA(MJ3648-15B)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>RCA2-SLIDER</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=RCA2-SLIDER(ME3669-15C)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=RCA2-SLIDER(MJ3669-15C)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>RCA2-TABLE</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=RCA2-TABLE(ME3670-14B)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=RCA2-TABLE(MJ3670-14B)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>RCA2_MINI-ROD</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=RCA2_MINI-ROD(ME3671-18B)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=RCA2_MINI-ROD(MJ3671-18B)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>RCD-GRIPPER</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=RCD-GRIPPER(ME3732-4D)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=RCD-GRIPPER(MJ3732-4D)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>RCD-MINICYLINDER</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=RCD-MINICYLINDER(ME3721-2B)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=RCD-MINICYLINDER(MJ3721-2B)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>RCL-ROD</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=RCL-ROD(ME0192-3C)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=RCL-ROD(MJ0192-3C)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>RCL-SLIDER</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=RCL-SLIDER(ME3666-3D)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=RCL-SLIDER(MJ3666-3D)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>RCLE_MINI-GRIPPER</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=RCLE_MINI-GRIPPER(ME3710-2B)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=RCLE_MINI-GRIPPER(MJ3710-2B)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>RCP2-BA</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=RCP2-BA(ME3633-9B)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=RCP2-BA(MJ3633-9B)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>RCP2-GRIPPER</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=RCP2-GRIPPER(ME3627-11H)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=RCP2-GRIPPER(MJ3627-11H)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>RCP2-ROD_RCP2W-ROD</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=RCP2-ROD_RCP2W-ROD(ME3652-14E)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=RCP2-ROD_RCP2W-ROD(MJ3652-14E)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>RCP2-ROTARY</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=RCP2-ROTARY(ME3626-14B)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=RCP2-ROTARY(MJ3626-14B)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>RCP2_RCA-SRA</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=RCP2_RCA-SRA(ME3665-6D)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=RCP2_RCA-SRA(MJ3665-6D)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>RCP2_RCP2CR-SLIDER</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=RCP2_RCP2CR-SLIDER(ME3660-15D)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=RCP2_RCP2CR-SLIDER(MJ3660-15D)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>RCP2CR_RCP2W-GRIPPER</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=RCP2CR_RCP2W-GRIPPER(ME3739-3E)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=RCP2CR_RCP2W-GRIPPER(MJ3739-3E)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>RCP2W-SA16C</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=RCP2W-SA16C(ME3651-7C)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=RCP2W-SA16C(MJ3651-7C)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>RCP3-SLIDER</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=RCP3-SLIDER(ME3672-18D)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=RCP3-SLIDER(MJ3672-18D)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>RCP3-TABLE</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=RCP3-TABLE(ME3673-11D)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=RCP3-TABLE(MJ3673-11D)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>RCP3_MINI-ROD</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=RCP3_MINI-ROD(ME3674-6E)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=RCP3_MINI-ROD(MJ3674-6E)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>RCP4-GRIPPER</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=RCP4-GRIPPER(ME3730-3G)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=RCP4-GRIPPER(MJ3730-3G)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>RCP4-ROD</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=RCP4-ROD(ME3718-11E)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=RCP4-ROD(MJ3718-11E)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>RCP4-SLIDER</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=RCP4-SLIDER(ME3717-9F)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=RCP4-SLIDER(MJ3717-9F)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>RCP4W-ROD</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=RCP4W-ROD(ME3728-4E)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=RCP4W-ROD(MJ3728-4E)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>RCP4W-SLIDER</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=RCP4W-SLIDER(ME3722-4C)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=RCP4W-SLIDER(MJ3722-4D)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>RCP5-BA</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=RCP5-BA(ME3746-1F)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=RCP5-BA(MJ3746-1F)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>RCP5-ROD</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=RCP5-ROD(ME3738-9B)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=RCP5-ROD(MJ3738-9B)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>RCP5-SLIDER</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=RCP5-SLIDER(ME3737-7F)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=RCP5-SLIDER(MJ3737-7F)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>RCP6-RADIAL_CYLINDER</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="download.php?l=CN&amp;f=manual&amp;n=RCP6-RADIAL_CYLINDER(MC3753-1D)" target="_blank" class="btn btn-red btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=RCP6-RADIAL_CYLINDER(ME3753-1A)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=RCP6-RADIAL_CYLINDER(MJ3753-1A)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>RCP6-ROD</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="download.php?l=CN&amp;f=manual&amp;n=RCP6-ROD(MC3751-1C)" target="_blank" class="btn btn-red btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=RCP6-ROD(ME3751-1A)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=RCP6-ROD(MJ3751-1A)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>RCP6-SLIDER</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="download.php?l=CN&amp;f=manual&amp;n=RCP6-SLIDER(MC3749-1C)" target="_blank" class="btn btn-red btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=RCP6-SLIDER(ME3749-1A)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=RCP6-SLIDER(MJ3749-1A)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>RCP6-TABLE</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="download.php?l=CN&amp;f=manual&amp;n=RCP6-TABLE(MC3754-1C)" target="_blank" class="btn btn-red btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=RCP6-TABLE(ME3754-1A)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=RCP6-TABLE(MJ3754-1A)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>RCP6-WIDE_RADIAL_CYLINDER</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="download.php?l=CN&amp;f=manual&amp;n=RCP6-WIDE_RADIAL_CYLINDER(MC3752-1C)" target="_blank" class="btn btn-red btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=RCP6-WIDE_RADIAL_CYLINDER(ME3752-1A)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=RCP6-WIDE_RADIAL_CYLINDER(MJ3752-1A)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>RCP6-WIDE_SLIDER</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="download.php?l=CN&amp;f=manual&amp;n=RCP6-WIDE_SLIDER(MC3750-1C)" target="_blank" class="btn btn-red btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=RCP6-WIDE_SLIDER(ME3750-1A)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=RCP6-WIDE_SLIDER(MJ3750-1A)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>RCS2</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=RCS2(W)-ROD_FLAT(ME3656-11A)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=RCS2(W)-ROD_FLAT(MJ3656-11A)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>RCS2-GRIPPER</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=RCS2-GRIPPER(ME3659-4B)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=RCS2-GRIPPER(MJ3659-4B)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>RCS2-RA13R</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=RCS2-RA13R(ME3662-9C)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=RCS2-RA13R(MJ3662-9C)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>RCS2-ROTARY</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=RCS2-ROTARY(ME3658-5E)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=RCS2-ROTARY(MJ3658-5E)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>RCS2_MINI-ROD</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=RCS2_MINI-ROD(ME3714-6D)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=RCS2_MINI-ROD(MJ3714-6D)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>RCS2_MINI-TABLE</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=RCS2_MINI-TABLE(ME3719-4C)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=RCS2_MINI-TABLE(MJ3719-4C)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>RCS2_RCS3-SLIDER</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=RCS2_RCS3-SLIDER(ME3654-24C)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=RCS2_RCS3-SLIDER(MJ3654-24C)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>RCS3-HIGHSPEED-TYPE</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=RCS3-HIGHSPEED-TYPE(ME3735-6A)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=RCS3-HIGHSPEED-TYPE(MJ3735-6A)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>RCS3-ROD-LOADCELL-EQUIPPED</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=RCS3-ROD-LOADCELL-EQUIPPED(ME3742-2A)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=RCS3-ROD-LOADCELL-EQUIPPED(MJ3742-2A)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>RS</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=RS(ME3609-4A)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=RS(MJ3609-4A)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>SS</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=SS(ME3610-6C)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=SS(MJ3610-6C)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>STOPPERCYLINDER</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=STOPPERCYLINDER(ME0292-4A)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=STOPPERCYLINDER(MJ0292-4A)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>ZR</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=ZR(ME3668-3B)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=ZR(MJ3668-3C)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>DD</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=DIRECT_DRIVE_MOTOR(ME0310-7A)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=DIRECT_DRIVE_MOTOR(MJ0310-7A)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        </div>
        </div>
        <div class="pad-top-30">
        	<h3 class="anchors" id="ctrl">控制器</h3>
        	<div class="service-list">
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>ACON-C_CG</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=ACON-C_CG(ME0176-12D)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=ACON-C_CG(MJ0176-12D)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>ACON-CA_DCON-CA</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=ACON-CA_DCON-CA(ME0326-1F)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=ACON-CA_DCON-CA(MJ0326-1G)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>ACON-CB_DCON-CB</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=ACON-CB_DCON-CB(ME0343-1C)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=ACON-CB_DCON-CB(MJ0343-1C)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>ACON-CY</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=ACON-CY(ME0167-13C)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=ACON-CY(MJ0167-13C)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>ACON-PL_PO</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=ACON-PL_PO(ME0166-14B)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=ACON-PL_PO(MJ0166-14B)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>ACON-SE</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=ACON-SE(ME0171-13C)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=ACON-SE(MJ0171-13C)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>ACON_PCON-ABU</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=ACON_PCON-ABU(ME0179-11B)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=ACON_PCON-ABU(MJ0179-11B)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>ASEL</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=ASEL(ME0165-9B)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=ASEL(MJ0165-9B)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>ASEP_PSEP_DSEP</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=ASEP_PSEP_DSEP(ME0267-10C)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=ASEP_PSEP_DSEP(MJ0267-10C)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>CC-LINK</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=CC-LINK(ME0123-25C)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=CC-LINK(MJ0123-25C)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>CC-LINK</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=CC-LINK(ME0254-10B)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=CC-LINK(MJ0254-10B)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>COMPONET</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=COMPONET(ME0220-11B)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=COMPONET(MJ0220-11B)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>DEVICENET</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=DEVICENET(ME0124-23C)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=DEVICENET(MJ0124-23C)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>DEVICENET</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=DEVICENET(ME0256-10B)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=DEVICENET(MJ0256-10B)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>DS-S-C1</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=DS-S-C1(IAI-056D-6)-E" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=DS-S-C1(MJ0110-11D)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>E-CON</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=E-CON(ME0122-15B)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=E-CON(MJ0122-17B)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>ETHERCAT</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=ETHERCAT(ME0273-10B)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=ETHERCAT(MJ0273-10B)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>ETHERCAT</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=ETHERCAT(ME0309-4A)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=ETHERCAT(MJ0309-4A)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>ETHERNET</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=ETHERNET(ME0140-3B)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=ETHERNET(MJ0140-3B)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>ETHERNET</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=ETHERNET(ME0278-10B)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=ETHERNET(MJ0278-10B)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>ETHERNET_IP</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=ETHERNET_IP(ME0308-5C)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=ETHERNET_IP(MJ0308-5C)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>FIELDNETWORK_RCP6S</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=FIELDNETWORK_RCP6S(ME0349-1A)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=FIELDNETWORK_RCP6S(MJ0349-1A)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>MCON-C_CG</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="download.php?l=CN&amp;f=manual&amp;n=MCON-C_CG(MC0341-1C)" target="_blank" class="btn btn-red btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=MCON-C_CG(ME0341-1B)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=MCON-C_CG(MJ0341-1B)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>MEC-DIGEST</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=MEC-DIGEST(ME0268-3B)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=MEC-DIGEST(MJ0268-3A)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>MECHATROLINK</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=MECHATROLINK(ME0221-10A)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=MECHATROLINK(MJ0221-10A)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>MECHATROLINK3</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=MECHATROLINK3(ME0317-1B)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=MECHATROLINK3(MJ0317-1B)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>MSCON</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=MSCON(ME0306-1H)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=MSCON(MJ0306-1I)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>MSEL</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=MSEL(ME0336-4A)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=MSEL(MJ0336-4A)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>MSEP</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=MSEP(ME0299-7C)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=MSEP(MJ0299-7C)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>MSEP-LC_LADDER-EDITING-SOFTWARE_MANUAL</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=MSEP-LC_LADDER-EDITING-SOFTWARE_MANUAL(ME0330-1C)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=MSEP-LC_LADDER-EDITING-SOFTWARE_MANUAL(MJ0330-1C)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>MSEP-LC_PROGRAMMING_MANUAL</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=MSEP-LC_PROGRAMMING_MANUAL(ME0329-6A)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=MSEP-LC_PROGRAMMING_MANUAL(MJ0329-6A)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>P-DRIVER</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=P-DRIVER(ME0131-1C)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=P-DRIVER(MJ0131-5D)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>PCON-C_CG_CF</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=PCON-C_CG_CF(ME0170-18B)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=PCON-C_CG_CF(MJ0170-18B)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>PCON-CA</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=PCON-CA(ME0289-7H)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=PCON-CA(MJ0289-7H)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>PCON-CB</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="download.php?l=CN&amp;f=manual&amp;n=PCON-CB(MC0342-1A)" target="_blank" class="btn btn-red btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=PCON-CB(ME0342-1A)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=PCON-CB(MJ0342-1A)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>PCON-CY</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=PCON-CY(ME0156-15B)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=PCON-CY(MJ0156-15B)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>PCON-CYB_PLB_POB</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="download.php?l=CN&amp;f=manual&amp;n=PCON-CYB_PLB_POB(MC0353-1C)" target="_blank" class="btn btn-red btn-xs">下载(CN)</a>
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(EN)</a>
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>PCON-PL_PO</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=PCON-PL_PO(ME0164-17A)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=PCON-PL_PO(MJ0164-17A)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>PCON-SE</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=PCON-SE(ME0163-17B)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=PCON-SE(MJ0163-17B)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>PMEC_AMEC</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=PMEC_AMEC(ME0245-11B)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=PMEC_AMEC(MJ0245-11B)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>PROFIBUS-DP</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=PROFIBUS-DP(ME0153-14C)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=PROFIBUS-DP(MJ0153-14C)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>PROFIBUS-DP</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=PROFIBUS-DP(ME0258-9B)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=PROFIBUS-DP(MJ0258-9B)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>PROFINET_IO</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=PROFINET_IO(ME0333-5B)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=PROFINET_IO(MJ0333-5B)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>PSEL</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=PSEL(ME0172-12D)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=PSEL(MJ0172-12D)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>RCP2-C_CG_CF</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=RCP2-C_CG_CF(ME0136-19B)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=RCP2-C_CG_CF(MJ0136-19B)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>RCS-C</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=RCS-C(ME0102-19B)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=RCS-C(MJ0102-22B)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>RCS-E</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=RCS-E(ME0103-7B)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=RCS-E(MJ0103-8B)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>REMOTE-IO-UNIT</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=REMOTE-IO-UNIT(ME0339-1A)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=REMOTE-IO-UNIT(MJ0339-1A)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>ROBONET</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=ROBONET(ME0208-14B)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=ROBONET(MJ0208-14B)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>SCON</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=SCON(ME0161-14B)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=SCON(MJ0161-14B)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>SCON-CA_CAL_CGAL</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=SCON-CA_CAL_CGAL(ME0243-8F)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=SCON-CA_CAL_CGAL(MJ0243-8F)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>SCON-CB_CGB</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=SCON-CB_CGB(ME0340-1B)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=SCON-CB_CGB(MJ0340-1B)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>SCON-CB_SERVO-PRESS</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=SCON-CB_SERVO-PRESS(ME0345-1B)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=SCON-CB_SERVO-PRESS(MJ0345-1B)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>SSEL</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=SSEL(ME0157-14D)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=SSEL(MJ0157-14D)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>SUPER-SEL-E_G</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=SUPER-SEL-E_G(IAI-038C_V7)-E_l" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=SUPER-SEL-E_G(MJ0113-21K)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>XSEL-J_K</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=XSEL-J_K(ME0116-23D)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=XSEL-J_K(MJ0116-23D)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>XSEL-JX_KX</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=XSEL-JX_KX(ME0119-7D)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=XSEL-JX_KX(MJ0119-7D)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>XSEL-KT_KET</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=XSEL-KT_KET(ME0134-10B)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=XSEL-KT_KET(MJ0134-10B)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>XSEL-P_Q</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=XSEL-P_Q(ME0148-19E)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=XSEL-P_Q(MJ0148-19E)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>XSEL-P_Q_PX_QX-RC_GATEWAY</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=XSEL-P_Q_PX_QX-RC_GATEWAY(ME0188-6B)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=XSEL-P_Q_PX_QX-RC_GATEWAY(MJ0188-6B)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>XSEL-P_Q_R_S_ELECTRIC-CAM</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=XSEL-P_Q_R_S_ELECTRIC-CAM(ME0246-5C)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=XSEL-P_Q_R_S_ELECTRIC-CAM(MJ0246-5C)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>XSEL-PX_QX</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=XSEL-PX_QX(ME0152-9D)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=XSEL-PX_QX(MJ0152-9D)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>XSEL-R_S_RX_SX_RXD_SXD</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=XSEL-R_S_RX_SX_RXD_SXD(ME0313-14B)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=XSEL-R_S_RX_SX_RXD_SXD(MJ0313-14B)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        </div>
        </div>
        <div class="pad-top-30">
        	<h3 class="anchors" id="soft">软件用户手册&amp;其他</h3>
	        <div class="service-list">
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>CON-PT_PD_PG</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="download.php?l=CN&amp;f=manual&amp;n=CON-PT_PD_PG(MC0227-10A)" target="_blank" class="btn btn-red btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=CON-PT_PD_PG(ME0227-10B)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=CON-PT_PD_PG(MJ0227-10B)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>CON-PTA_PDA_PGA</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=CON-PTA_PDA_PGA(ME0295-14B)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=CON-PTA_PDA_PGA(MJ0295-14B)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>CON-T_TG</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=CON-T_TG(ME0178-9B)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=CON-T_TG(MJ0178-9B)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>CONVEYER-TRACKING_COGNEX</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="download.php?l=CN&amp;f=manual&amp;n=IA-101-X_XA-MW_USB_USBMW(MC0154-11A)" target="_blank" class="btn btn-red btn-xs">下载(CN)</a>
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=CONVEYER-TRACKING_COGNEX(MJ0239-1C)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>CONVEYER-TRACKING_KEYENCE</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=CONVEYER-TRACKING_KEYENCE(MJ0238-1C)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>CONVEYER-TRACKING_OMRON</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=CONVEYER-TRACKING_OMRON(MJ0237-1C)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>CONVEYER-TRACKING_WORK-SENSOR</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=CONVEYER-TRACKING_WORK-SENSOR(MJ0236-1C)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>DS-S-T1</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=DS-S-T1(MJ0111-3B)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>IA-101-X_XA-MW_USB_USBMW</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=IA-101-X_XA-MW_USB_USBMW(ME0154-19A)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=IA-101-X_XA-MW_USB_USBMW(MJ0154-19A)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>IA-T-X_XD</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=IA-T-X_XD(ME0118-9B)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=IA-T-X_XD(MJ0160-5B)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>IA-T-X_XD-IX</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=IA-T-X_XD-IX(ME0121-2C)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>IA-T-XA</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=IA-T-XA(ME0130-1B)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=IA-T-XA(MJ0130-3C)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>IA_NET</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=IA_NET(ME0307-2B)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=IA_NET(MJ0307-2B)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>MEC_PC-SOFTWARE</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=MEC_PC-SOFTWARE(ME0248-7A)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=MEC_PC-SOFTWARE(MJ0248-7A)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>MODBUS</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=MODBUS(ME0162-9A)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=MODBUS(MJ0162-9B)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>PS-24</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=NE-T-SS_DS-S-T1(IAI-041C)-E_l" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=PS-24(MJ0129-2C)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>RCA-E</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="download.php?l=CN&amp;f=manual&amp;n=RCM-101-MW_USB(MC0155-16C)" target="_blank" class="btn btn-red btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=PS-24(ME0129-2B)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=RCA-E(MJ0105-9K)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>RCA-P</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=RCA-E(IAI-061C)-E_l" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=RCA-P(MJ0106-5C)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>RCB-101-MW</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=RCA-P(ME0106-4B)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=RCB-101-MW(MJ0107-9B)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>RCB-ISL-SIO</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=RCB-101-MW(ME0107-9B)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=RCB-ISL-SIO(MJ0207-1A)_o_l" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>RCB-J</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="download.php?l=CN&amp;f=manual&amp;n=RCB-ISL-SIO(MC0207-1A)_o" target="_blank" class="btn btn-red btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=RCB-ISL-SIO(ME0207-1B)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=RCB-J(MJ0146-2B)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>RCM-101-MW_USB</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=RCM-101-MW_USB(ME0155-26A)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=RCM-101-MW_USB(MJ0155-26A)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>RCM-E</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=RCM-E(ME0174-2B)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=RCM-E(MJ0174-3C)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>RCM-GW-CC</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=RCM-GW-CC(ME0169-1B)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=RCM-GW-CC(MJ0169-3C)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>RCM-GW-DV</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=RCM-GW-DV(ME0168-5B)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=RCM-GW-DV(MJ0168-6C)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>RCM-GW-PR</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=RCM-GW-PR(ME0177-2B)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=RCM-GW-PR(MJ0177-3C)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>RCM-P</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=RCM-P(ME0175-2B)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=RCM-P(MJ0175-2C)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>RCM-PM-01</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=RCM-PM-01(ME0182-3B)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=RCM-PM-01(MJ0182-3B)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>SEL-T_TD_TG</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=SEL-T_TD_TG(ME0183-10B)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=SEL-T_TD_TG(MJ0183-10B)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>SEP-PT</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=SEP-PT(ME0217-7B)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=SEP-PT(MJ0217-7B)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>SUPER-SEL_SINGLE</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=SUPER-SEL(IAI-042C-5)-E" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=SUPER-SEL_SINGLE(MJ0133-2B)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>TB-01_CON</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=TB-01_CON(ME0324-3A)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=TB-01_CON(MJ0324-3A)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>TB-01_SEL</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=TB-01_SEL(ME0325-2B)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=TB-01_SEL(MJ0325-2B)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>XSEL_DIO-BORD</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=XSEL_DIO-BORD(ME0138-1B)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=XSEL_DIO-BORD(MJ0138-1C)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>XSEL_DIO-UNIT</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=XSEL_DIO-UNIT(ME0139-1B)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=XSEL_DIO-UNIT(MJ0139-1C)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>SEL-LANGUAGE</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=SEL-LANGUAGE(IAI-040C)-E_l" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=SEL-LANGUAGE(MJ0112-5AD)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>SEL_GENERATOR</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=SEL_GENERATOR(ME0351-1A)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=SEL_GENERATOR(MJ0351-1A)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>SEL_PROGRAMMING_MANUAL</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=SEL_PROGRAMMING_MANUAL(ME0224-9A)." target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=SEL_PROGRAMMING_MANUAL(MJ0224-9A)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>VISION-SYSTEM_IF</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=VISION-SYSTEM_IF(ME0269-8A)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=VISION-SYSTEM_IF(MJ0269-8A)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="service-list-item">
	        		<div class="row">
	        			<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>OVERSEAS_STANDARDS_COMPLIANCE_MANUA</big></div>
	        			<div class="col-lg-4 text-right">
	        				<a href="javascript:void(0);" class="btn btn-gray btn-xs">下载(CN)</a>
	        				<a href="download.php?l=EN&amp;f=manual&amp;n=OVERSEAS_STANDARDS_COMPLIANCE_MANUAL(ME0287-8A)" target="_blank" class="btn btn-red btn-xs">下载(EN)</a>
	        				<a href="download.php?l=JA&amp;f=manual&amp;n=OVERSEAS_STANDARDS_COMPLIANCE_MANUAL(MJ0287-8A)" target="_blank" class="btn btn-red btn-xs">下载(JA)</a>
	        			</div>
	        		</div>
	        	</div>
	        </div>
        </div>
	</div>
</div>



@endsection

@section('script')
<script type="text/javascript" src="{{ asset('js/client/service.js') }}"></script>
@stop