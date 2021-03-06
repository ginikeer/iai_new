@section('title') IAI－艾卫艾商贸(上海)有限公司－ ｜ 现场网络设置用数据 @stop

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
				<li>现场网络设置用数据</li>
			</ul>
		</div>
	</div>
	<div class="container">
		<h2>现场网络设置用数据</h2>
		<hr>
		<p>
			1.请从下面列表中下载需要的文件。<br>
			2.请右键列表中的文件名(链接)，从下拉菜单中选择『目标另存为』并根据提示下载文件。<br>
			3.如果遇到无法正常下载的情况(例如扩展名无法正常显示)，请下载另一列的『zip压缩文件』。
		</p>
		<p>①现场网络设定用文件</p>
		<table class="table-bordered">
		
			<tbody>
				<tr>
					<th width="16%" rowspan="2">Network<br> 種類
					</th>
					<th width="18%" rowspan="2">控制器、其他分类</th>
					<th colspan="2" nowrap="nowrap">文件名</th>
					<th rowspan="2">内容</th>
					<th width="17%" rowspan="2">使用ポート数(I／O点数)<br>
						<br> ※其他注意点
					</th>
				</tr>
				<tr>
					<th>非圧縮文件</th>
					<th>ZIP圧縮文件</th>
				</tr>
				<tr>
					<td>ロボネット<br> (ROBONET)
						<br> ／MSEP
						<br> ／MSCON／
						<br> ERC3网关
					</td>
					<td>
						RGW-＊＊网关<br> 
						MSEP-C<br> 
						MSCON<br> 
						ERC3网关<br> 
						MCON<br> 
						RCP6S网关<br> 
						RCON
					</td>
					<td>
						<a href="http://www.iai-robot.co.jp/download/network/nw_file/robonet/gateway_r-para/setup.exe" class="bass-link-A01">setup.exe</a>
					</td>
					<td>
						<a href="http://www.iai-robot.co.jp/download/network/nw_file/robonet/gateway_r-para/setup_exe.zip" class="bass-link-A01">setup_exe.zip</a>
					</td>
					<td>网关参数设定工具</td>
					<td align="center">―</td>
				</tr>
				<tr>
					<td rowspan="11">DeviceNet</td>
					<td rowspan="3">
						RCM-GW-DV网关<br>
						(PCON-SE)<br>
						(ACON-SE)<br>
						(ERC2-SE)
					</td>
					<td colspan="2">使用说明书上标注的「EDS_ABS_DEV_V_*_**」实际为以下EDS文件，请根据需求使用。</td>
					<td rowspan="11">DeviceNet用 EDS文件</td>
					<td rowspan="8">请参照使用说明书</td>
				</tr>
				<tr>
					<td>
						<a href="http://www.iai-robot.co.jp/download/network/nw_file/devicenet/rcm-gw-dv/rcm-gw-dv.eds" class="bass-link-A01">rcm-gw-dv.eds</a>
					</td>
					<td>
						<a href="http://www.iai-robot.co.jp/download/network/nw_file/devicenet/rcm-gw-dv/rcm-gw-dv_eds.zip" class="bass-link-A01">rcm-gw-dv_eds.zip</a>
					</td>
				</tr>
				<tr>
					<td colspan="2"></td>
				</tr>
				<tr>
					<td>
						PCON<br>
						ACON<br>
						PSEL-C<br>
						ASEL-C<br>
						SSEL-C<br>
						SCON-CA<br>
						PCON-CA
					</td>
					<td>
						<a href="http://www.iai-robot.co.jp/download/network/nw_file/devicenet/pcon_acon_psel_asel_ssel/IAI_DEV_MUL_V_1_1.eds" class="bass-link-A01">IAI_DEV_MUL_V_1_1.eds</a>
					</td>
					<td>
						<a href="http://www.iai-robot.co.jp/download/network/nw_file/devicenet/pcon_acon_psel_asel_ssel/IAI_DEV_MUL_V_1_1_eds.zip" class="bass-link-A01">IAI_DEV_MUL_V_1_1_eds.zip</a>
					</td>
				</tr>
				<tr>
					<td>SCON-C</td>
					<td>
						<a href="http://www.iai-robot.co.jp/download/network/nw_file/devicenet/scon/iai_scon.eds" class="bass-link-A01">iai_scon.eds</a>
					</td>
					<td>
						<a href="http://www.iai-robot.co.jp/download/network/nw_file/devicenet/scon/iai_scon_eds.zip" class="bass-link-A01">iai_scon_eds.zip</a>
					</td>
				</tr>
				<tr>
					<td>
						ROBONET<br> 
						MSEP-C<br> 
						MSCON<br> 
						ERC3网关
					</td>
					<td>
						<a href="http://www.iai-robot.co.jp/download/network/nw_file/devicenet/robonet/robonet_2_1.eds" class="bass-link-A01">robonet_2_1.eds</a>
					</td>
					<td>
						<a href="http://www.iai-robot.co.jp/download/network/nw_file/devicenet/robonet/robonet_2_1_eds.zip" class="bass-link-A01">robonet_eds_2_1.zip</a>
					</td>
				</tr>
				<tr>
					<td>XSEL-J／K／P／Q</td>
					<td>
						<a href="http://www.iai-robot.co.jp/download/network/nw_file/devicenet/x-sel/abs.eds" class="bass-link-A01">abs.eds</a>
					</td>
					<td>
						<a href="http://www.iai-robot.co.jp/download/network/nw_file/devicenet/x-sel/abs_eds.zip" class="bass-link-A01">abs_eds.zip</a>
					</td>
				</tr>
				<tr>
					<td rowspan="2">
						MSEP-LC<br>
						MSEL<br>
						XSEL-R／S<br>
						XSEL-RA／SA<br>
						TTA<br>
						SCON-CAL<br>
						ACON-CA<br>
						DCON-CA<br>
						PSEL-CS<br>
						ASEL-CS<br>
						SSEL-CS<br>
						ACON-CB<br>
						SCON-CB<br>
						DCON-CB<br>
						MCON-C<br>
						PCON-CB<br>
						RCP6GW<br>
						RCON
					</td>
					<td rowspan="2">
						<a href="http://www.iai-robot.co.jp/download/network/nw_file/devicenet/x-sel/EDS_IANP3801_DN0_V_2_3.eds" class="bass-link-A01">EDS_IANP3801_DN0_V_2_3.eds</a>
					</td>
					<td rowspan="2">
						<a href="http://www.iai-robot.co.jp/download/network/nw_file/devicenet/x-sel/EDS_IANP3801_DN0_V_2_3.zip" class="bass-link-A01">EDS_IANP3801_DN0_V_2_3.zip</a>
					</td>
				</tr>
				<tr>
					<td rowspan="3" align="center">―</td>
				</tr>
				<tr>
					<td>E-Con</td>
					<td>
						<a href="http://www.iai-robot.co.jp/download/network/nw_file/devicenet/e-con/iai_econ.eds" class="bass-link-A01">iai_econ.eds</a>
					</td>
					<td>
						<a href="http://www.iai-robot.co.jp/download/network/nw_file/devicenet/e-con/iai_econ_eds.zip" class="bass-link-A01">iai_econ_eds.zip</a>
					</td>
				</tr>
				<tr>
					<td>RCS-C</td>
					<td>
						<a href="http://www.iai-robot.co.jp/download/network/nw_file/devicenet/rcs/iai_rcs.eds" class="bass-link-A01">iai_rcs.eds</a>
					</td>
					<td>
						<a href="http://www.iai-robot.co.jp/download/network/nw_file/devicenet/rcs/iai_rcs_eds.zip" class="bass-link-A01">iai_rcs_eds.zip</a>
					</td>
				</tr>
				<tr>
					<td rowspan="2">CompoNet</td>
					<td>
						PCON<br>
						ACON<br>
						SCON-CA<br>
						MSEP-C<br>
						PCON-CA<br>
						MSCON<br>
						ERC3网关
					</td>
					<td>
						<a href="http://www.iai-robot.co.jp/download/network/nw_file/componet/acon_pcon/IAI_CompoNet_V_1_1.eds" class="bass-link-A01">IAI_CompoNet_V_1_1.eds</a>
					</td>
					<td>
						<a href="http://www.iai-robot.co.jp/download/network/nw_file/componet/acon_pcon/IAI_CompoNet_V_1_1_eds.zip" class="bass-link-A01">IAI_CompoNet_V_1_1_eds.zip</a>
					</td>
					<td>CompoNet用EDS文件</td>
					<td>请参照使用说明书</td>
				</tr>
				<tr>
					<td>MSEP-LC<br> SCON-CAL
						<br> ACON-CA
						<br> DCON-CA
						<br> ACON-CB
						<br> SCON-CB
						<br> DCON-CB
						<br> MCON-C
						<br> PCON-CB
					</td>
					<td>
						<a href="http://www.iai-robot.co.jp/download/network/nw_file/componet/acon_dcon/EDS_IACN3802_V_1_0.eds">EDS_IACN3802_V_1_0.eds</a>
					</td>
					<td>
						<a href="http://www.iai-robot.co.jp/download/network/nw_file/componet/acon_dcon/EDS_IACN3802_V_1_0.zip">EDS_IACN3802_V_1_0.eds.zip</a>
					</td>
					<td align="center">―</td>
					<td align="center">―</td>
				</tr>
				<tr>
					<td rowspan="14">CC-Link</td>
					<td>MSEL</td>
					<td>－</td>
					<td>
						<a href="http://www.iai-robot.co.jp/download/network/nw_file/cc-link/msel/0x0226_MSEL-P_A_ja.zip">0x0226_MSEL-P_A_ja.zip</a>
					</td>
					<td>CC-Link用CSPP文件</td>
					<td>请参照使用说明书</td>
				</tr>
				<tr>
					<td rowspan="3">XSEL-J／K／P／Q</td>
					<td>
						<a href="http://www.iai-robot.co.jp/download/network/nw_file/cc-link/x-sel/HMS-ABS-CCL_1.csp" class="bass-link-A01"> HMS-ABS-CCL_1.csp</a>
					</td>
					<td>
						<a href="http://www.iai-robot.co.jp/download/network/nw_file/cc-link/x-sel/HMS-ABS-CCL_1_csp.zip" class="bass-link-A01"> HMS-ABS-CCL_1_csp.zip</a>
					</td>
					<td>远程设备站（1站）用CSP文件</td>
					<td>各96点以下</td>
				</tr>
				<tr>
					<td>
						<a href="http://www.iai-robot.co.jp/download/network/nw_file/cc-link/x-sel/HMS-ABS-CCL_2.csp" class="bass-link-A01">HMS-ABS-CCL_2.csp</a>
					</td>
					<td>
						<a href="http://www.iai-robot.co.jp/download/network/nw_file/cc-link/x-sel/HMS-ABS-CCL_2_csp.zip" class="bass-link-A01">HMS-ABS-CCL_2_csp.zip</a>
					</td>
					<td>远程设备站（2站）用CSP文件 </td>
					<td>各112点以上192点以下</td>
				</tr>
				<tr>
					<td>
						<a href="http://www.iai-robot.co.jp/download/network/nw_file/cc-link/x-sel/HMS-ABS-CCL_3.csp" class="bass-link-A01">HMS-ABS-CCL_3.csp</a>
					</td>
					<td>
						<a href="http://www.iai-robot.co.jp/download/network/nw_file/cc-link/x-sel/HMS-ABS-CCL_3_csp.zip" class="bass-link-A01">HMS-ABS-CCL_3_csp.zip</a>
					</td>
					<td>远程设备站（3站）用CSP文件 </td>
					<td>各208点以上256点以下</td>
				</tr>
				<tr>
					<td>TTA</td>
					<td>－</td>
					<td>
						<a href="http://www.iai-robot.co.jp/download/network/nw_file/cc-link/tta/0x0226_TTA_A_ja.zip" class="bass-link-A01">0x0226_TTA_A_ja.zip</a>
					</td>
					<td>CC-Link用CSPP文件</td>
					<td>请参照使用说明书</td>
				</tr>
				<tr>
					<td>Gateway</td>
					<td colspan="4">占用站数、扩展Cyclelink设定请参照使用说明书，在GX Developor的网络参数设定工具(CC-Link)进行。</td>
				</tr>
				<tr>
					<td>ACON-CA<br></td>
					<td align="center">―</td>
					<td>
						<a href="http://www.iai-robot.co.jp/download/network/nw_file/cc-link/acon/0x0226_ACON-CA_A_ja.zip">0x0226_ACON-CA_A_ja.zip</a>
					</td>
					<td>―</td>
					<td>―</td>
				</tr>
				<tr>
					<td>DCON-CA</td>
					<td align="center">―</td>
					<td>
						<a href="http://www.iai-robot.co.jp/download/network/nw_file/cc-link/dcon/0x0226_DCON-CA_A_ja.zip">0x0226_DCON-CA_A_ja.zip</a>
					</td>
					<td>―</td>
					<td>―</td>
				</tr>
				<tr>
					<td>SCON-CAL</td>
					<td align="center">―</td>
					<td>
						<a href="http://www.iai-robot.co.jp/download/network/nw_file/cc-link/scon/0x0226_SCON-CAL_A_ja.zip">0x0226_SCON-CAL_A_ja.zip</a>
					</td>
					<td>―</td>
					<td>―</td>
				</tr>
				<tr>
					<td>
						PCON-C<br />
						PCON-CA<br />
						PCON-CB<br />
						ACON-C<br />
						ACON-CA<br />
						ACON-CB<br />
						DCON-CA<br />
						DCON-CB<br />
						SCON-CA<br />
						SCON-CAL<br />
						SCON-CB
					</td>
					<td align="center">―</td>
					<td>
						<a href="http://www.iai-robot.co.jp/download/network/nw_file/cc-link/con_/0x0226_RCController(PositionMode)_A_ja.zip">0x0226_RCController(PositionMode)_A_ja.zip</a>
					</td>
					<td>―</td>
					<td rowspan="5">关于有专用CSPP的机种，各文件都可使用。</td>
				</tr>
				<tr>
					<td>SCON-CB-F</td>
					<td align="center">―</td>
					<td>
						<a href="http://www.iai-robot.co.jp/download/network/nw_file/cc-link/con_/0x0226_RCController(ServoPressMode)_A_ja.zip">0x0226_RCController(ServoPressMode)_A_ja.zip</a>
					</td>
					<td>―</td>
				</tr>
				<tr>
					<td>SCON-LC</td>
					<td align="center">―</td>
					<td>
						<a href="http://www.iai-robot.co.jp/download/network/nw_file/cc-link/con_/0x0226_RCController(PLCMode)_A_ja.zip">0x0226_RCController(PLCMode)_A_ja.zip</a>
					</td>
					<td>―</td>
				</tr>
				<tr>
					<td>
						MSEP-C<br />
						MCON-C<br />
						MSCON-C<br />
						ERC3 GW<br />
						RCON
					</td>
					<td align="center">―</td>
					<td>
						<a href="http://www.iai-robot.co.jp/download/network/nw_file/cc-link/gw_/0x0226_GatewayController_A_ja.zip">0x0226_GatewayController_A_ja.zip</a>
					</td>
					<td>―</td>
				</tr>
				<tr>
					<td>
						ASEL-C<br />
						ASEL-CS<br />
						PSEL-C<br />
						PSEL-CS<br />
						SSEL-C<br />
						SSEL-CS<br />
						XSEL-R/S<br />
						XSEL-RA/SA<br />
						TTA<br />
						MSEL-PC
					</td>
					<td align="center">―</td>
					<td>
						<a href="http://www.iai-robot.co.jp/download/network/nw_file/cc-link/sel_/0x0226_SELController_A_ja.zip">0x0226_SELController_A_ja.zip</a>
					</td>
					<td>―</td>
				</tr>
				<tr>
					<td rowspan="7">CC-Link<br> IE Field</td>
					<td>ACON-CB／CGB</td>
					<td>-</td>
					<td>
						<a href="http://www.iai-robot.co.jp/download/network/nw_file/cc-link_IE/0x0226_ACON-CB-CIE_1.0.0_ja.zip" class="bass-link-A01">0x0226_ACON-CB-CIE_1.0.0_ja.zip</a>
					</td>
					<td>-</td>
					<td>―</td>
				</tr>
				<tr>
					<td>DCON-CB／CGB</td>
					<td>-</td>
					<td>
						<a href="http://www.iai-robot.co.jp/download/network/nw_file/cc-link_IE/0x0226_DCON-CB-CIE_1.0.0_ja.zip" class="bass-link-A01">0x0226_DCON-CB-CIE_1.0.0_ja.zip</a>
					</td>
					<td>-</td>
					<td>―</td>
				</tr>
				<tr>
					<td>PCON-CB／CGB</td>
					<td>-</td>
					<td>
						<a href="http://www.iai-robot.co.jp/download/network/nw_file/cc-link_IE/0x0226_PCON-CB-CIE_1.0.0_ja.zip" class="bass-link-A01">0x0226_PCON-CB-CIE_1.0.0_ja.zip</a>
					</td>
					<td>-</td>
					<td>―</td>
				</tr>
				<tr>
					<td>PCON-CFB／CGFB</td>
					<td>-</td>
					<td>
						<a href="http://www.iai-robot.co.jp/download/network/nw_file/cc-link_IE/0x0226_PCON-CFB-CIE_1.0.0_ja.zip" class="bass-link-A01">0x0226_PCON-CFB-CIE_1.0.0_ja.zip</a>
					</td>
					<td>-</td>
					<td>―</td>
				</tr>
				<tr>
					<td>SCON-CB／CGB</td>
					<td>-</td>
					<td>
						<a href="http://www.iai-robot.co.jp/download/network/nw_file/cc-link_IE/0x0226_SCON-CB-CIE_1.0.0_ja.zip" class="bass-link-A01">0x0226_SCON-CB-CIE_1.0.0_ja.zip</a>
					</td>
					<td>-</td>
					<td>―</td>
				</tr>
				<tr>
					<td>SCON-CB-F／CGB-F</td>
					<td>-</td>
					<td>
						<a href="http://www.iai-robot.co.jp/download/network/nw_file/cc-link_IE/0x0226_SCON-CB-F-CIE_1.0.0_ja.zip" class="bass-link-A01">0x0226_SCON-CB-F-CIE_1.0.0_ja.zip</a>
					</td>
					<td>-</td>
					<td>―</td>
				</tr>
				<tr>
					<td>RCON</td>
					<td>-</td>
					<td>
						<a href="http://www.iai-robot.co.jp/download/network/nw_file/cc-link_IE/0x0226_RCON-GW-CIE_1.0.0_ja.zip" class="bass-link-A01">0x0226_RCON-GW-CIE_1.0.0_ja.zip</a>
					</td>
					<td>-</td>
					<td>―</td>
				</tr>
				<tr>
					<td rowspan="5">ProfiBus</td>
					<td>
						ROBONET
						<br> MSEP-C
						<br> MSCON
						<br> ERC3网关
					</td>
					<td>
						<a href="http://www.iai-robot.co.jp/download/network/nw_file/profibus/robonet/IAI0B2F.gsd" class="bass-link-A01">IAI0B2F.gsd</a>
					</td>
					<td>
						<a href="http://www.iai-robot.co.jp/download/network/nw_file/profibus/robonet/IAI0B2F_gsd.zip" class="bass-link-A01">IAI0B2F_gsd.zip</a>
					</td>
					<td rowspan="5">ProfiBus用GSD文件</td>
					<td rowspan="3" align="center">―</td>
				</tr>
				<tr>
					<td>
						MSEP-LC
						<br> MSEL
						<br> XSEL-R／S
						<br> XSEL-RA／SA 
						<br> TTA
						<br> SCON-CAL
						<br> ACON-CA
						<br> DCON-CA
						<br> ACON-CB
						<br> SCON-CB
						<br> DCON-CB
						<br> MCON-C
						<br> PCON-CB
						<br> RCP6GW
						<br> RCON
					</td>
					<td>
						<a href="http://www.iai-robot.co.jp/download/network/nw_file/profibus/x-sel/IAI_0CEF.gsd" class="bass-link-A01">IAI_0CEF.gsd</a>
					</td>
					<td>
						<a href="http://www.iai-robot.co.jp/download/network/nw_file/profibus/x-sel/IAI_0CEF.zip" class="bass-link-A01">IAI_0CEF.zip</a>
					</td>
				</tr>
				<tr>
					<td>
						PCON
						<br> ACON
						<br> SCON-CA
						<br> SSEL-C／CS
						<br> PSEL-C／CS
						<br> ASEL-C／CS
						<br> PCON-CA
					</td>
					<td>
						<a href="http://www.iai-robot.co.jp/download/network/nw_file/profibus/acon_pcon/HMS_1811.gsd" class="bass-link-A01">HMS_1811.gsd</a>
					</td>
					<td>
						<a href="http://www.iai-robot.co.jp/download/network/nw_file/profibus/acon_pcon/HMS_1811_gsd.zip" class="bass-link-A01">HMS_1811_gsd.zip</a>
					</td>
				</tr>
				<tr>
					<td>
						RCM-GW-PR网关<br />
						XSEL-J／K／P／Q
					</td>
					<td>
						<a href="http://www.iai-robot.co.jp/download/network/nw_file/profibus/x-sel/hms_1003.gsd" class="bass-link-A01">hms_1003.gsd</a>
					</td>
					<td>
						<a href="http://www.iai-robot.co.jp/download/network/nw_file/profibus/x-sel/hms_1003_gsd.zip" class="bass-link-A01">hms_1003_gsd.zip</a>
					</td>
					<td>最大各256点</td>
				</tr>
				<tr>
					<td>
						SCON-C
						<br> E-Con
						<br> RCS-C
					</td>
					<td>
						<a href="http://www.iai-robot.co.jp/download/network/nw_file/profibus/e-con_rcs-c/hms_1000.gsd" class="bass-link-A01">hms_1000.gsd</a>
					</td>
					<td>
						<a href="http://www.iai-robot.co.jp/download/network/nw_file/profibus/e-con_rcs-c/hms_1000_gsd.zip" class="bass-link-A01">hms_1000_gsd.zip</a>
					</td>
					<td align="center">―</td>
				</tr>
				<tr>
					<td rowspan="2">PROFINET<br> IO
					</td>
					<td rowspan="2">
						MSEL
						<br> MSEP-LC
						<br> MSEP-C
						<br> SCON-CAL
						<br> ACON-CA
						<br> DCON-CA
						<br> PCON-CA
						<br> SCON-CA
						<br> ACON-CB
						<br> SCON-CB
						<br> DCON-CB
						<br> MCON-C
						<br> PCON-CB
						<br> RCP6GW
						<br> RCON
					</td>
					<td>
						<a href="http://www.iai-robot.co.jp/download/network/nw_file/profinet/GSDML-V2.3-IAI-IAI-PRT-20130807.xml" class="bass-link-A01">GSDML-V2.3-IAI-IAI-PRT-20130807.xml</a>
					</td>
					<td>
						<a href="http://www.iai-robot.co.jp/download/network/nw_file/profinet/GSDML-V2.3-IAI-IAI-PRT-20130807.zip" class="bass-link-A01">GSDML-V2.3-IAI-IAI-PRT-20130807.zip</a>
					</td>
					<td rowspan="2">PROFINET IO用GSDML文件</td>
					<td rowspan="2">请参照使用说明书</td>
				</tr>
				<tr>
					<td>【注意事项】<br> 使用上方文件无法连接时，请使用下方文件。
						<br>
						<a href="http://www.iai-robot.co.jp/download/network/nw_file/profinet/GSDML-V2.3-IAI-IAI-PRT-20131103.xml" class="bass-link-A01">GSDML-V2.3-IAI-IAI-PRT-2002.xml</a>
					</td>
					<td>【注意事项】<br> 使用上方文件无法连接时，请使用下方文件。
						<br>
						<a href="http://www.iai-robot.co.jp/download/network/nw_file/profinet/GSDML-V2.3-IAI-IAI-PRT-20131103.zip" class="bass-link-A01">GSDML-V2.3-IAI-IAI-PRT-20131092.zip</a>
					</td>
				</tr>
				<tr>
					<td rowspan="3">EtherNet/IP</td>
					<td>PCON<br> ACON
						<br> SCON-CA
						<br> MSEP-C
						<br> PCON-CA
						<br> MSCON
						<br> XSEL-R／S
						<br> ERC3网关
					</td>
					<td>
						<a href="http://www.iai-robot.co.jp/download/network/nw_file/EtherNetIP/acon_pcon/368-9523-EDS_ABCC_EIP_V_2_2.eds" class="bass-link-A01">368-952-EDS_ABCC_EIP_V_2_2.eds</a>
					</td>
					<td>
						<a href="http://www.iai-robot.co.jp/download/network/nw_file/EtherNetIP/ACON_PCON/368-9523-EDS_ABCC_EIP_V_2_2.zip" class="bass-link-A01">368-9523-EDS_ABCC_EIP_V_2_2.zip</a>
					</td>
					<td rowspan="3">EtherNet/IP用EDS文件</td>
					<td rowspan="3">请参照使用说明书</td>
				</tr>
				<tr>
					<td>XSEL-P／Q</td>
					<td>
						<a href="http://www.iai-robot.co.jp/download/network/nw_file/EtherNetIP/acon_pcon/005A000C000E0200.eds" class="bass-link-A01">005A000C000E0200.eds</a>
					</td>
					<td>
						<a href="http://www.iai-robot.co.jp/download/network/nw_file/EtherNetIP/acon_pcon/005A000C000E0200.zip" class="bass-link-A01">005A000C000E0200.zip</a>
					</td>
				</tr>
				<tr>
					<td>
						XSEL-RA／SA
						<br> MSEP-LC
						<br> MSEL
						<br> TTA
						<br> SCON-CAL
						<br> ACON-CA
						<br> DCON-CA
						<br> SSEL-CS
						<br> PSEL-CS
						<br> ASEL-CS
						<br> ACON-CB
						<br> SCON-CB
						<br> DCON-CB
						<br> MCON-C
						<br> PCON-CB
						<br> RCP6GW
						<br> RCON
					</td>
					<td>
						<a href="http://www.iai-robot.co.jp/download/network/nw_file/EtherNetIP/acon_pcon/IANP3802-EP0_V_2_1.eds" class="bass-link-A01">IANP3802-EP0_V_2_1.eds</a>
					</td>
					<td>
						<a href="http://www.iai-robot.co.jp/download/network/nw_file/EtherNetIP/acon_pcon/IANP3802-EP0_V_2_1.zip" class="bass-link-A01">IANP3802-EP0_V_2_1.zip</a>
					</td>
				</tr>
				<tr>
					<td rowspan="14">EtherCAT</td>
					<td>PCON</td>
					<td>
						<a href="http://www.iai-robot.co.jp/download/network/nw_file/EtherCAT/ESI_IAI_CON_ECT_V_1_04_Rev_4.xml" class="bass-link-A01">ESI_IAI_CON</a>
					</td>
					<td>
						<a href="http://www.iai-robot.co.jp/download/network/nw_file/EtherCAT/ESI_IAI_CON_ECT_V_1_04_Rev_4.zip" class="bass-link-A01">ESI_IAI_CON_</a>
					</td>
					<td rowspan="14">EtherCAT用<br> ESI文件
					</td>
					<td rowspan="14">请参照使用说明书<br>
						<br>
						<br> ※因我司产品的EtherCAT模块使用的是复数Ver，所以提供的是复数Ver的ESI文件。
						<br> 关于上位控制器，例如欧姆龙制NJ系列、Beckhoff制TwinCAT2时，请下载各自Ver的ESI文件。
						<br> Configuration时由上位控制器软件自动识别。
						<br> 使用欧姆龙制CJ系列时，因使用欧姆龙的软件的种类不同，可能需要手动选择，详情请咨询。
					</td>
				</tr>
				<tr>
					<td>ACON</td>
					<td>
						<a href="http://www.iai-robot.co.jp/download/network/nw_file/EtherCAT/ESI_IAI_CON_ECT_V_1_04_Rev_4.xml" class="bass-link-A01">ECT_V_1_04_Rev_4.xml</a>
					</td>
					<td>
						<a href="http://www.iai-robot.co.jp/download/network/nw_file/EtherCAT/ESI_IAI_CON_ECT_V_1_04_Rev_4.zip" class="bass-link-A01">ECT_V_1_04_Rev_4.zip</a>
					</td>
				</tr>
				<tr>
					<td>PCON-CA</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>SCON-CA</td>
					<td>
						<a href="http://www.iai-robot.co.jp/download/network/nw_file/EtherCAT/ESI_IAI_CON_ECT_V_1_07_Rev_0.xml">ESI_IAI_CON_ECT_V_1_07_Rev_0.xml</a>
					</td>
					<td>
						<a href="http://www.iai-robot.co.jp/download/network/nw_file/EtherCAT/ESI_IAI_CON_ECT_V_1_07_Rev_0.zip">ESI_IAI_CON_ECT_V_1_07_Rev_0.zip</a>
					</td>
				</tr>
				<tr>
					<td>
						SCON-CAL 
						<br> ACON-CA
						<br> DCON-CA
					</td>
					<td>
						<a href="http://www.iai-robot.co.jp/download/network/nw_file/EtherCAT/ESI_IAI_CON_ECT_V_1_07_Rev_0.xml">ESI_IAI_CON_ECT_V_1_07_Rev_0.xml</a>
					</td>
					<td>
						<a href="http://www.iai-robot.co.jp/download/network/nw_file/EtherCAT/ESI_IAI_CON_ECT_V_1_07_Rev_0.zip">ESI_IAI_CON_ECT_V_1_07_Rev_0.zip</a>
					</td>
				</tr>
				<tr>
					<td>
						ACON-CB
						<br> SCON-CB
						<br> DCON-CB
						<br> PCON-CB
					</td>
					<td>
						<a href="http://www.iai-robot.co.jp/download/network/nw_file/EtherCAT/ESI_IAI_CON_ECT_V_1_07_Rev_1.xml">ESI_IAI_CON_ECT_V_1_07_Rev_1.xml</a>
					</td>
					<td>
						<a href="http://www.iai-robot.co.jp/download/network/nw_file/EtherCAT/ESI_IAI_CON_ECT_V_1_07_Rev_1.zip">ESI_IAI_CON_ECT_V_1_07_Rev_1.zip</a>
					</td>
				</tr>
				<tr>
					<td>SCON-CB</td>
					<td>
						<a href="http://www.iai-robot.co.jp/download/network/nw_file/EtherCAT/ESI_IAI_CON_ECT_V_1_07_Rev_2.xml">ESI_IAI_CON_ECT_V_1_07_Rev_2.xml</a>
					</td>
					<td>
						<a href="http://www.iai-robot.co.jp/download/network/nw_file/EtherCAT/ESI_IAI_CON_ECT_V_1_07_Rev_2.zip">ESI_IAI_CON_ECT_V_1_07_Rev_2.zip</a>
					</td>
				</tr>
				<tr>
					<td>
						<p>
							PCON-C
							<br> ACON-C
							<br> PCON-CA
							<br> SCON-CA
							<br> SCON-CAL
							<br> ACON-CA
							<br> DCON-CA
							<br> ACON-CB
							<br> SCON-CB
							<br> DCON-CB
							<br> PCON-CB
							<br>
						</p>
					</td>
					<td>
						<a href="http://www.iai-robot.co.jp/download/network/nw_file/EtherCAT/ESI_IAI_CON_ECT_V_1_08_Rev_0.xml">ESI_IAI_CON_ECT_V_1_08_Rev_0.xml</a>
					</td>
					<td>
						<a href="http://www.iai-robot.co.jp/download/network/nw_file/EtherCAT/ESI_IAI_CON_ECT_V_1_08_Rev_0.zip">ESI_IAI_CON_ECT_V_1_08_Rev_0.zip</a>
					</td>
				</tr>
				<tr>
					<td rowspan="2">XSEL-R/S</td>
					<td>
						<a href="http://www.iai-robot.co.jp/download/network/nw_file/EtherCAT/ESI_IAI_SEL_ECT_V_1_06_Rev_0.xml" class="bass-link-A01">ESI_IAI_SEL_<br> ECT_V_1_06_Rev_0.xml
						</a>
					</td>
					<td>
						<a href="http://www.iai-robot.co.jp/download/network/nw_file/EtherCAT/ESI_IAI_SEL_ECT_V_1_06_Rev_0.zip" class="bass-link-A01">ESI_IAI_SEL<br> ECT_V_1_06_Rev_0.zip
						</a>
					</td>
				</tr>
				<tr>
					<td>
						<a href="http://www.iai-robot.co.jp/download/network/nw_file/EtherCAT/ESI_IAI_SEL_ECT_V_1_07_Rev_1.xml" class="bass-link-A01">ESI_IAI_SEL_ECT_V_1_07_Rev_1.xml</a>
					</td>
					<td>
						<a href="http://www.iai-robot.co.jp/download/network/nw_file/EtherCAT/ESI_IAI_SEL_ECT_V_1_07_Rev_1.zip" class="bass-link-A01">ESI_IAI_SEL_ECT_V_1_07_Rev_1.zip</a>
					</td>
				</tr>
				<tr>
					<td>XSEL-RA/SA</td>
					<td>
						<a href="http://www.iai-robot.co.jp/download/network/nw_file/EtherCAT/ESI_IAI_SEL_ECT_V_1_07_Rev_1.xml" class="bass-link-A01">ESI_IAI_SEL_ECT_V_1_07_Rev_1.xml</a>
					</td>
					<td>
						<a href="http://www.iai-robot.co.jp/download/network/nw_file/EtherCAT/ESI_IAI_SEL_ECT_V_1_07_Rev_1.zip" class="bass-link-A01">ESI_IAI_SEL_ECT_V_1_07_Rev_1.zip</a>
					</td>
				</tr>
				<tr>
					<td>
						XSEL-R/S
						<br> XSEL-RA/SA
						<br> TTA
						<br> MSEL-PC
					</td>
					<td>
						<a href="http://www.iai-robot.co.jp/download/network/nw_file/EtherCAT/ESI_IAI_SEL_ECT_V_1_08_Rev_0.xml" class="bass-link-A01">ESI_IAI_SEL_ECT_V_1_08_Rev_0.xml</a>
					</td>
					<td>
						<a href="http://www.iai-robot.co.jp/download/network/nw_file/EtherCAT/ESI_IAI_SEL_ECT_V_1_08_Rev_0.zip" class="bass-link-A01">ESI_IAI_SEL_ECT_V_1_08_Rev_0.zip</a>
					</td>
				</tr>
				<tr>
					<td>
						MSEP-LC
						<br> MSEP-C
						<br> MSCON
						<br> ERC3网关
						<br> MCON-C
						<br> RCP6GW
					</td>
					<td>
						<a href="http://www.iai-robot.co.jp/download/network/nw_file/EtherCAT/ESI_IAI_Gateway_ECT_V_1_07_Rev_0.xml">ESI_IAI_Gateway_ECT_V_1_07_Rev_0.xml</a>
					</td>
					<td>
						<a href="http://www.iai-robot.co.jp/download/network/nw_file/EtherCAT-Motion/ESI_IAI_MCON_ECM_V_2_01_Rev_0.zip">ESI_IAI_Gateway_ECT_V_1_07_Rev_0.zip</a>
					</td>
				</tr>
				<tr>
					<td>
						MSEP-LC
						<br> MSEP-C
						<br> MSCON
						<br> ERC3网关
						<br> MCON-C
						<br> RCP6GW
						<br> RCON
					</td>
					<td>
						<a href="http://www.iai-robot.co.jp/download/network/nw_file/EtherCAT/ESI_IAI_Gateway_ECT_V_1_08_Rev_0.xml">ESI_IAI_Gateway_ECT_V_1_08_Rev_0.xml</a>
					</td>
					<td>
						<a href="http://www.iai-robot.co.jp/download/network/nw_file/EtherCAT/ESI_IAI_Gateway_ECT_V_1_08_Rev_0.zip">ESI_IAI_Gateway_ECT_V_1_08_Rev_0.zip</a>
					</td>
		
				</tr>
				<tr>
					<td>EtherCAT运动控制</td>
					<td>MCON-C</td>
					<td>
						<a href="http://www.iai-robot.co.jp/download/network/nw_file/EtherCAT-Motion/ESI_IAI_MCON_ECM_V_2_01_Rev_0.xml">ESI_IAI_MCON_ECM_V_2_01_Rev_0.xml</a>
					</td>
					<td>
						<a href="http://www.iai-robot.co.jp/download/network/nw_file/EtherCAT-Motion/ESI_IAI_MCON_ECM_V_2_01_Rev_0.zip">ESI_IAI_MCON_ECM_V_2_01_Rev_0.zip</a>
					</td>
				</tr>
			</tbody>
		
		</table>
		
		
		<p><br><br><br>②PLC用功能模块</p>
		<table class="table-bordered">
			<tbody>
				<tr>
					<th width="10%" rowspan="2">Network<br> 種類</th>
					<th width="12%" rowspan="2">PCL用<br> 软件</th>
					<th width="12%" rowspan="2">对应<br>控制器</th>
					<th width="18%" rowspan="2">内容</th>
					<th colspan="2" nowrap="nowrap">文件名</th>
					<th width="17%" rowspan="2">备注</th>
				</tr>
				<tr>
					<th>非圧縮文件</th>
					<th>ZIP圧縮文件</th>
				</tr>
				<tr>
					<td rowspan="2" align="center">EtherCAT<br/>（运动控制）</td>
					<td rowspan="2" align="center">欧姆龙有限公司<br/>SYSMAC STUDIO</td>
					<td rowspan="2" align="center">MCON-C/CG</td>
					<td align="center">原点复位<br/>（使用PDO分配时）</td>
					<td><a href="http://www.iai-robot.co.jp/download/network/nw_file/EtherCAT-Motion/IAI_HomeForAssignedPDO_V_1_0_0.slr">IAI_HomeForAssignedPDO_V_1_0_0.slr</a></td>
					<td><a href="http://www.iai-robot.co.jp/download/network/nw_file/EtherCAT-Motion/IAI_HomeForAssignedPDO_V_1_0_0.zip">IAI_HomeForAssignedPDO_V_1_0_0.zip</a></td>
					<td>将项目60FEh的Sub-Index01作为PDO分配</td>
				</tr>
				<tr>
					<td align="center">原点复位<br/>（使用SDO连接时）</td>
					<td><a href="http://www.iai-robot.co.jp/download/network/nw_file/EtherCAT-Motion/IAI_HomeForSDOAccess_V_1_0_0.slr">IAI_HomeForSDOAccess_V_1_0_0.slr</a></td>
					<td><a href="http://www.iai-robot.co.jp/download/network/nw_file/EtherCAT-Motion/IAI_HomeForSDOAccess_V_1_0_0.zip">IAI_HomeForSDOAccess_V_1_0_0.zip</a></td>
					<td>将项目60FEh的Sub-Index01不作为PDO分配</td>
				</tr>
				<tr>
					<td colspan="7">※详细的使用方法，请参照对应的控制器使用说明书。</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>



@endsection

@section('script')
<script type="text/javascript" src="{{ asset('js/client/service.js') }}"></script>
@stop