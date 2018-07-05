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
						<IMG alt="简单且功能强大的网络专用综合型控制器RCON登场" style="width: 100%;" src="{{ asset('i/client/product/product-late/new_rcon_title.jpg') }}">
						<!-- /bass-figure-A01 -->
					</DIV>
					<DIV class="bass-conversion-A01">
						<DIV class="bass-conversion-download">
							<H2 class="download-title">RCON产品信息</H2>
							<UL class="download-list">
								<LI class="download-catalog">
									<A href="{{ url('/service/catalog') }}" target="_blank">纸质产品目录申请</A>
								</LI>
								<LI class="download-manual">
									<A href="{{ asset('pdf/client/product/RCON样本.pdf') }}" target="_blank">产品目录下载</A>
								</LI>
								<LI class="download-cad2">
									<A href="https://linkable.partcommunity.com/3d-cad-models/iai/?info=iai" target="_blank">3D CAD图纸</A>
									<!--<A href="{{ asset('pdf/client/Linkable_PARTcommunity2.0使用者手册.pdf') }}" target="_blank">3D CAD图纸</A>-->
								</LI>
								<!-- /download-list -->
							</UL>
							<!-- /bass-conversion-download -->
						</DIV>
						<!-- /bass-conversion-A01 -->
					</DIV>
					<DIV class="bass-heading-A01">
						<H2><SPAN class="download-title">RCON的优点</SPAN></H2>
						<!-- /bass-heading-A01 -->
					</DIV>
					<div class="advantage-table">
						<div class="table-left">
							<DIV class="bass-feature-heading-A01">
								<H3><SPAN class="bass-feature-text">优点1</SPAN>占用空间仅为以往的约1/5。</H3>
							</DIV>
							<DIV class="bass-table-B01">
								<IMG alt="" src="{{ asset('i/client/product/product-late/new_rcon_img44.jpg') }}">
							</DIV>
						</div>
						<div class="table-right">
							<DIV class="bass-feature-heading-A01">
								<H3><SPAN class="bass-feature-text">优点2</SPAN>有助于降低成本</H3>
							</DIV>
							<DIV class="bass-table-B01">
								<IMG alt="" src="{{ asset('i/client/product/product-late/new_rcon_img45.jpg') }}">
							</DIV>
						</div>
					</div>
					<div class="advantage-table">
						<div class="table-left">
							<DIV class="bass-feature-heading-A01">
								<H3><SPAN class="bass-feature-text">优点3</SPAN>扩展性优异的单元连接方式。</H3>
							</DIV>
							<DIV class="bass-table-B01">
								<IMG alt="" src="{{ asset('i/client/product/product-late/new_rcon_img46.jpg') }}">
							</DIV>
						</div>
						<div class="table-right">
							<DIV class="bass-feature-heading-A01">
								<H3><SPAN class="bass-feature-text">优点4</SPAN>适用所有24V系列驱动轴。</H3>
							</DIV>
							<DIV class="bass-table-B01">
								<IMG alt="" src="{{ asset('i/client/product/product-late/new_rcon_img47.jpg') }}">
							</DIV>
						</div>
					</div>
	
					<DIV class="bass-tabnavigation-A01">
						<UL class="tab pc-only">
							<LI class="select">
								<SPAN>功能/型号/<BR>单元构成</SPAN>
								<BR>
								<BR>
							</LI>
							<LI>
								<SPAN>规格/注意事项/<BR>系统构成示例/<BR>周边单元</SPAN>
							</LI>
							<LI>
								<SPAN>外形尺寸图/<BR>安装方法/<BR>驱动轴连接相关</SPAN>
							</LI>
							<LI>
								<SPAN>现场网络控制动作模式/<BR>各动作模式的功能一览</SPAN>
								<BR>
								<BR>
							</LI>
							<LI>
								<SPAN>订购方法</SPAN>
								<BR>
								<BR>
								<BR>
							</LI>
						</UL>
						<select name="" class="sp-only tab-select">
							<option value="0">功能/型号/单元构成</option>
							<option value="1">规格/注意事项/系统构成示例/周边单元</option>
							<option value="2">外形尺寸图/安装方法/驱动轴连接相关</option>
							<option value="3">现场网络控制动作模式/各动作模式的功能一览</option>
							<option value="4">订购方法/包装形态·包装外形</option>
						</select>
					</DIV>
					<UL class="content">
						<!--tab-->
						<LI>
							<H3 class="new-product-title new-product-title-first">机型一览</H3>
							<DIV class="new-sub-title">■ 网关单元</DIV>
							<DIV class="bass-table-B02 no-margin-top">
								<TABLE width="100%" style="text-align: center;" border="0">
									<TBODY>
										<TR>
											<TH width="70">型号</TH>
											<TD colspan="7">RCON－GW／GWG</TD>
										</TR>
										<TR>
											<TH>外观</TH>
											<TD colspan="7">
												<IMG alt="" src="{{ asset('i/client/product/product-late/new_rcon_img01.jpg') }}">
											</TD>
										</TR>
										<TR>
											<TH rowspan="3">通信类型</TH>
											<TD>
												<IMG alt="" src="{{ asset('i/client/product/product-late/new_rcon_img02.jpg') }}">
											</TD>
											<TD>
												<IMG src="{{ asset('i/client/product/product-late/new_rcon_img03.jpg') }}">
											</TD>
											<TD>
												<IMG src="{{ asset('i/client/product/product-late/new_rcon_img04.jpg') }}">
											</TD>
											<TD>
												<IMG src="{{ asset('i/client/product/product-late/new_rcon_img05.jpg') }}">
											</TD>
											<TD>
												<IMG src="{{ asset('i/client/product/product-late/new_rcon_img06.jpg') }}">
											</TD>
											<TD>
												<IMG src="{{ asset('i/client/product/product-late/new_rcon_img07.jpg') }}">
											</TD>
											<TD>
												<IMG src="{{ asset('i/client/product/product-late/new_rcon_img08.jpg') }}">
											</TD>
										</TR>
										<TR>
											<TD>CCLink规格</TD>
											<TD>CCLink IE规格</TD>
											<TD>DeviceNet规格</TD>
											<TD>EtherNet/IP规格</TD>
											<TD>EtherCAT规格</TD>
											<TD>PROFIBUS-DP规格</TD>
											<TD>PROFINET-I/O规格</TD>
										</TR>
										<TR>
											<TD>ＣＣ</TD>
											<TD>ＣＩＥ</TD>
											<TD>ＤＶ</TD>
											<TD>ＥＰ</TD>
											<TD>ＥＣ</TD>
											<TD>ＰＲ</TD>
											<TD>ＰＲＴ</TD>
										</TR>
									</TBODY>
								</TABLE>
							</DIV>
							<DIV class="new-sub-title">■ 驱动单元</DIV>
							<DIV class="bass-table-B02 no-margin-top">
								<TABLE width="100%" style="text-align: center;" border="0">
									<TBODY>
										<TR>
											<TH width="70">型号</TH>
											<TD>RCON-PC-1
												<BR>RCON-PC-2</TD>
											<TD>RCON-PCF-1</TD>
											<TD>RCON-AC-1
												<BR>RCON-AC-2</TD>
											<TD>RCON-DC-1
												<BR>RCON-DC-2</TD>
										</TR>
										<TR>
											<TH>外观</TH>
											<TD>
												<IMG alt="" src="{{ asset('i/client/product/product-late/new_rcon_img09.jpg') }}">
											</TD>
											<TD>
												<IMG alt="" src="{{ asset('i/client/product/product-late/new_rcon_img10.jpg') }}">
											</TD>
											<TD>
												<IMG alt="" src="{{ asset('i/client/product/product-late/new_rcon_img11.jpg') }}">
											</TD>
											<TD>
												<IMG src="{{ asset('i/client/product/product-late/new_rcon_img12.jpg') }}">
											</TD>
										</TR>
									</TBODY>
								</TABLE>
							</DIV>
							<H3 class="new-product-title">型号项目</H3>
							<DIV class="new-sub-title">■ 网关单元</DIV>
							<DIV class="bass-table-B02 no-margin-top">
								<IMG alt="" src="{{ asset('i/client/product/product-late/new_rcon_img13.jpg') }}">
							</DIV>
							<DIV style="margin: 30px 0px 5px; font-size: 120%;">■ 驱动单元</DIV>
							<DIV class="bass-table-B02 no-margin-top">
								<IMG alt="" src="{{ asset('i/client/product/product-late/new_rcon_img14.jpg') }}">
							</DIV>
							<H3 class="new-product-title">单元构成</H3>
							<P>
								RCON系统以单品方式订购，可以自由组合使用。
								<BR>最多可连接16台驱动轴。
							</P>
							<DIV class="bass-table-B02 no-margin-top">
								<IMG alt="" src="{{ asset('i/client/product/product-late/new_rcon_img15.jpg') }}">
							</DIV>
						</LI>
						<!--规格/注意点-->
						<LI class="hide">
							<H3 class="new-product-title new-product-title-first">规格</H3>
							<DIV class="new-sub-title">■ 一般规格</DIV>
							<DIV class="bass-table-B02 no-margin-top">
								<TABLE style="text-align: center;width: 100%;" cellspacing="0" cellpadding="0">
									<COLGROUP>
										<TBODY>
											<TR>
												<TH colspan="10">项　目</TH>
												<TH colspan="5">规　格</TH>
											</TR>
											<TR>
												<TD colspan="10">控制轴数</TD>
												<TD colspan="5">1～16轴</TD>
											</TR>
											<TR>
												<TD colspan="10">电源电压</TD>
												<TD colspan="5">DC24V±10%</TD>
											</TR>
											<TR>
												<TD rowspan="6" colspan="2">控制电源容量
													<BR>(每台单元）</TD>
												<TD colspan="8">网关单元
													<BR>（含终端单元）</TD>
												<TD colspan="5">0.8A （EtherNet选项：无）</TD>
											</TR>
											<TR>
												<TD rowspan="3" colspan="4">驱动单元
													<BR>（所有型号通用）</TD>
												<TD colspan="4">刹车：无/TD>
													<TD colspan="5">0.2A</TD>
											</TR>
											<TR>
												<TD colspan="4">刹车：有（1轴规格）</TD>
												<TD colspan="5">0.4A</TD>
											</TR>
											<TR>
												<TD colspan="4">刹车：有（2轴规格）</TD>
												<TD colspan="5">0.6A</TD>
											</TR>
											<TR>
												<TD colspan="8">扩展单元</TD>
												<TD colspan="5">0.1A</TD>
											</TR>
											<TR>
												<TD colspan="8">简易绝对单元（全机型通用）</TD>
												<TD colspan="5">0.2A</TD>
											</TR>
											<TR>
												<TD rowspan="16" colspan="2">马达电源容量
													<BR>（每台驱动轴）</TD>
												<TD rowspan="2" colspan="8">驱动轴/驱动单元</TD>
												<TD rowspan="2" colspan="2">额定电流</TD>
												<TD colspan="3">最大电流</TD>
											</TR>
											<TR>
												<TD>省电
													<BR>设定时</TD>
												<TD colspan="2">　</TD>
											</TR>
											<TR>
												<TD rowspan="3" colspan="3">脉冲马达
													<BR>/RCON-PC</TD>
												<TD colspan="3">20P/28P</TD>
												<TD colspan="2">高输出：无</TD>
												<TD colspan="2">0.8A</TD>
												<TD>－</TD>
												<TD colspan="2">－</TD>
											</TR>
											<TR>
												<TD rowspan="2" colspan="3">28P/35P/42P/56P</TD>
												<TD colspan="2">高输出：无</TD>
												<TD colspan="2">1.9A</TD>
												<TD>－</TD>
												<TD colspan="2">－</TD>
											</TR>
											<TR>
												<TD colspan="2">高输出：有</TD>
												<TD colspan="2">2.3A</TD>
												<TD>－</TD>
												<TD colspan="2">3.9A</TD>
											</TR>
											<TR>
												<TD colspan="3">脉冲马达</TD>
												<TD colspan="3">56P/56SP/60P/86P</TD>
												<TD colspan="2">高输出：无</TD>
												<TD colspan="2">5.7A</TD>
												<TD>－</TD>
												<TD colspan="2">－</TD>
											</TR>
											<TR>
												<TD rowspan="8" colspan="3">AC伺服马达
													<BR>/RCON-AC</TD>
												<TD rowspan="5" colspan="2">RCA</TD>
												<TD>5W</TD>
												<TD colspan="2">标准/高加减速</TD>
												<TD colspan="2">1.0A</TD>
												<TD>－</TD>
												<TD colspan="2">3.3A</TD>
											</TR>
											<TR>
												<TD>10W</TD>
												<TD rowspan="4" colspan="2">标准/高加减速/
													<BR>省电力</TD>
												<TD colspan="2">1.3A</TD>
												<TD>2.5A</TD>
												<TD colspan="2">4.4A</TD>
											</TR>
											<TR>
												<TD>20W</TD>
												<TD colspan="2">1.3A</TD>
												<TD>2.5A</TD>
												<TD colspan="2">4.4A</TD>
											</TR>
											<TR>
												<TD>20W（20Ｓ）</TD>
												<TD colspan="2">1.7A</TD>
												<TD>3.4A</TD>
												<TD colspan="2">5.1A</TD>
											</TR>
											<TR>
												<TD>30W</TD>
												<TD colspan="2">1.3A</TD>
												<TD>2.2A</TD>
												<TD colspan="2">4.0A</TD>
											</TR>
											<TR>
												<TD rowspan="3" colspan="2">RCL</TD>
												<TD>2W</TD>
												<TD rowspan="3" colspan="2">标准/高加减速/
													<BR>省电力</TD>
												<TD colspan="2">0.8A</TD>
												<TD>－</TD>
												<TD colspan="2">4.6A</TD>
											</TR>
											<TR>
												<TD>5W</TD>
												<TD colspan="2">1.0A</TD>
												<TD>－</TD>
												<TD colspan="2">6.4A</TD>
											</TR>
											<TR>
												<TD>10W</TD>
												<TD colspan="2">1.3A</TD>
												<TD>－</TD>
												<TD colspan="2">6.4A</TD>
											</TR>
											<TR>
												<TD rowspan="2" colspan="3">DC无刷马达
													<BR>/RCON-DC</TD>
												<TD colspan="3">3W</TD>
												<TD rowspan="2" colspan="2">标准</TD>
												<TD colspan="2">0.7A</TD>
												<TD>－</TD>
												<TD colspan="2">1.5A</TD>
											</TR>
											<TR>
												<TD colspan="3">10W</TD>
												<TD colspan="2">1.3A</TD>
												<TD>－</TD>
												<TD colspan="2">6.4A</TD>
											</TR>
											<TR>
												<TD rowspan="4" colspan="2">冲击电流(约5ms)</TD>
												<TD colspan="8">RCON-PC</TD>
												<TD colspan="5">8.3A</TD>
											</TR>
											<TR>
												<TD colspan="8">RCON-PCF</TD>
												<TD colspan="5">10.0A</TD>
											</TR>
											<TR>
												<TD colspan="8">RCON-AC</TD>
												<TD colspan="5">10.0A</TD>
											</TR>
											<TR>
												<TD colspan="8">RCON-DC</TD>
												<TD colspan="5">10.0A</TD>
											</TR>
											<TR>
												<TD rowspan="5" colspan="2">发热量
													<BR>(每台单元）</TD>
												<TD rowspan="2" colspan="6">RCON-PC</TD>
												<TD colspan="2">高输出：无</TD>
												<TD colspan="5">5.0W</TD>
											</TR>
											<TR>
												<TD colspan="2">高输出：有</TD>
												<TD colspan="5">8.0W</TD>
											</TR>
											<TR>
												<TD colspan="6">RCON-PCF</TD>
												<TD colspan="2">高输出：无</TD>
												<TD colspan="5">19.2W</TD>
											</TR>
											<TR>
												<TD colspan="6">RCON-AC</TD>
												<TD colspan="2">标准/高加减速</TD>
												<TD colspan="5">4.5W</TD>
											</TR>
											<TR>
												<TD colspan="6">RCON-DC</TD>
												<TD colspan="2">标准</TD>
												<TD colspan="5">3.0W</TD>
											</TR>
											<TR>
												<TD rowspan="4" colspan="2">SIO
													<BR>交互接口</TD>
												<TD rowspan="2" colspan="6">示教端口</TD>
												<TD colspan="2">通信方式</TD>
												<TD colspan="5">RS485</TD>
											</TR>
											<TR>
												<TD colspan="2">通信速度</TD>
												<TD colspan="5">9.6/19.2/38.4/57.6/115.2/230.4 kbps</TD>
											</TR>
											<TR>
												<TD rowspan="2" colspan="6">USB接口</TD>
												<TD colspan="2">通信方式</TD>
												<TD colspan="5">USB</TD>
											</TR>
											<TR>
												<TD colspan="2">通信速度</TD>
												<TD colspan="5">12Mbps</TD>
											</TR>
											<TR>
												<TD colspan="10">预防、预兆保全功能</TD>
												<TD colspan="5">电解电容器容量过低、风扇转速过低</TD>
											</TR>
											<TR>
												<TD colspan="10">保护等级</TD>
												<TD colspan="5">IP20</TD>
											</TR>
											<TR>
												<TD colspan="10">触电保护机构</TD>
												<TD colspan="5">ClassⅢ</TD>
											</TR>
											<TR>
												<TD colspan="10">法令・规格</TD>
												<TD colspan="5">CE认证（已完成）
													<BR>UL认证（认证中）</TD>
											</TR>
										</TBODY>
								</TABLE>
							</DIV>
							<DIV style="margin: 30px 0px 5px; font-size: 120%;">■ 环境规格</DIV>
							<DIV class="bass-table-B02 no-margin-top">
								<TABLE style="text-align: center;" cellspacing="0" cellpadding="0">
									<COLGROUP>
										<TBODY>
											<TR>
												<TH colspan="2">项　目</TH>
												<TH colspan="10">规　格</TH>
											</TR>
											<TR>
												<TD colspan="2">使用环境温度</TD>
												<TD colspan="10">0～55℃（有温度降额）、
													<BR>简易绝对型单元为0～40℃</TD>
											</TR>
											<TR>
												<TD colspan="2">使用环境湿度</TD>
												<TD colspan="10">85%RH以下、无结露</TD>
											</TR>
											<TR>
												<TD colspan="2">保存环境温度</TD>
												<TD colspan="10">-20～70℃、简易绝对型单元为0～40℃</TD>
											</TR>
											<TR>
												<TD colspan="2">使用环境</TD>
												<TD colspan="10">无腐蚀性气体，无严重尘埃</TD>
											</TR>
											<TR>
												<TD colspan="2">标高</TD>
												<TD colspan="10">1,000m</TD>
											</TR>
											<TR>
												<TD colspan="2">耐振</TD>
												<TD colspan="10">频率10～57Hz　/　振幅：0.075mm、　频率57～150Hz　/　加速度9.8m/s2
													<BR> XYZ各方向　测试时间：10分钟　测试次数：10次
												</TD>
											</TR>
											<TR>
												<TD colspan="2">抗冲击</TD>
												<TD colspan="10">掉落高度800mm　1角3棱6面</TD>
											</TR>
											<TR>
												<TD colspan="2">过电压类别</TD>
												<TD colspan="10">Ⅰ</TD>
											</TR>
											<TR>
												<TD colspan="2">污染度</TD>
												<TD colspan="10">Ⅱ</TD>
											</TR>
										</TBODY>
								</TABLE>
							</DIV>
							<H3 class="new-product-title">注意事项</H3>
							<DIV class="sub-title-no-margin">■ 电源容量计算</DIV>
							<P class="no-margin-top">
								电源容量按控制电源容量与马达电源容量分开讨论。
								<BR> 需要的电源容量按「使用单元的控制电源容量总和」＋「连接驱动轴的马达电源容量总和」计算。
								<BR> 供电的DC24V电源的额定电流值需大于马达电源容量的额定电流合计值；峰值电流值需大于马达电源容量的最大电流合计值。
								<BR> 但是，连接多个驱动轴时，只要不是所有驱动轴的动作时机完全一样，是不会同时达到最大电流需求的。
								<BR> 所以正确的电源容量并不是单纯计算总和值。
								<BR> 新开发的「Calculator软件」可根据设定的驱动轴动作条件与动作模式，自动计算需要的电源容量。
								<BR> 关于该软件的操作方法等详细资料，请参考「Calculator使用说明书（MJ0381）」。
							</P>
							<DIV class="sub-title-no-margin">■ 连接单元的合计电流值</DIV>
							<P class="no-margin-top">
								根据RCON系统的构成，计算各种单元的控制电源与马达电源。
								<BR> 请确认计算结果是否超过以下选型计算用电流限制值。
								<BR> 网关单元的电流值非常小，因此不在计算对象范围内。
							</P>
							<DIV class="bass-table-B02 no-margin-top">
								<TABLE class="new-table" cellspacing="0" cellpadding="0">
									<COLGROUP>
										<COL span="10">
										<TBODY>
											<TR>
												<TH colspan="5">项目</TH>
												<TD colspan="5">选型计算用电流限制值</TD>
											</TR>
											<TR>
												<TH colspan="5">控制电源（CP）</TH>
												<TD colspan="5">&nbsp;9.0A以下</TD>
											</TR>
											<TR>
												<TH colspan="5">马达电源（MP）</TH>
												<TD colspan="5">37.5A以下</TD>
											</TR>
										</TBODY>
								</TABLE>
							</DIV>
							<P>具体的计算示例如下。</P>
							<DIV class="bass-table-B02 no-margin-top">
								<IMG alt="" src="{{ asset('i/client/product/product-late/new_rcon_img16.jpg') }}">
							</DIV>
							<DIV class="bass-table-B02">
								<IMG alt="" src="{{ asset('i/client/product/product-late/new_rcon_img17.jpg') }}">
							</DIV>
							<DIV style="margin: 30px 0px 0px; padding: 20px; border: 1px solid rgb(204, 204, 204); border-image: none; ">
								<P style='background: url("{{ asset('i/client/product/product-late/new_rcon_img18.gif') }}") no-repeat; margin: 0px; padding: 0px 0px 0px 60px; height: 50px; font-size: 240%; font-weight: bold;'>注意</P>
								<P>●如果所有轴都处于仅执行加减速动作的动作模式，且动作稼动率为100％，则需以最大电流值计算马达电源。</P>
								<P>
									●如需更精确地计算马达电源，请使用“计算器软件”。
									<BR> 设定驱动轴的动作条件和动作模式后，可自动计算所需的电源容量。
									<BR> 操作方法等详情，请参照“计算器使用说明书（MJ0381）”。
								</P>
							</DIV>
							<DIV class="new-sub-title">■ 适用温度</DIV>
							<P class="no-margin-top">
								网关单元・驱动单元的适用温度范围为0～55℃。
								<BR>但是，根据有无风扇单元会因温度不同引起性能下降。
							</P>
							<DIV class="bass-table-B02 no-margin-top">
								<IMG alt="" src="{{ asset('i/client/product/product-late/new_rcon_img19.jpg') }}">
							</DIV>
							<P>
								没有风扇单元时，0～40℃范围内没有温度引起的性能下降可正常动作，40～55℃内每上升5℃会使动作稼动率下降20％。 <br>有风扇单元时，0～55℃内都可100%动作。
							</P>
							<DIV class="bass-table-B02 no-margin-top">
								<IMG alt="" src="{{ asset('i/client/product/product-late/new_rcon_img20.jpg') }}">
							</DIV>
							<H3 class="new-product-title">系统构成示例</H3>
							<DIV class="bass-table-B02 no-margin-top">
								<IMG alt="" src="{{ asset('i/client/product/product-late/new_rcon_img21.jpg') }}">
							</DIV>
							<H3 class="new-product-title">周边单元</H3>
							<DIV class="new-sub-title">■ 简易绝对单元</DIV>
							<DIV class="clearfix">
								<DIV class="left-cell">
									<IMG alt="" src="{{ asset('i/client/product/product-late/new_rcon_img22.jpg') }}">
								</DIV>
								<DIV class="right-cell">
									<P class="mar-bot5">型号
										<SPAN style="font-size: 120%; font-weight: bold;">RCON－ABU－①</SPAN>
									</P>
									<DIV class="bass-table-B02 no-margin-top">
										<TABLE class="new-table" cellspacing="0" cellpadding="0">
											<COLGROUP>
												<COL>
												<TBODY>
													<TR>
														<TH colspan="2">型号</TH>
														<TH colspan="2">①记入项目</TH>
														<TH colspan="3">用途</TH>
													</TR>
													<TR>
														<TD colspan="2">RCON-ABU-P</TD>
														<TD colspan="2">P</TD>
														<TD colspan="3">RCP系列</TD>
													</TR>
													<TR>
														<TD colspan="2">RCON-ABU-A</TD>
														<TD colspan="2">A</TD>
														<TD colspan="3">RCA系列</TD>
													</TR>
												</TBODY>
										</TABLE>
									</DIV>
									<P class="mar-5">规格</P>
									<DIV class="bass-table-B02 no-margin-top">
										<TABLE class="new-table" cellspacing="0" cellpadding="0">
											<COLGROUP>
												<COL>
												<TBODY>
													<TR>
														<TH colspan="4">项　目</TH>
														<TH colspan="5">规　格</TH>
													</TR>
													<TR>
														<TD colspan="4">质量</TD>
														<TD colspan="5">约270g（内置电池质量183g）</TD>
													</TR>
													<TR>
														<TD colspan="4">使用环境温度</TD>
														<TD colspan="5">0～40℃</TD>
													</TR>
													<TR>
														<TD colspan="4">使用电池</TD>
														<TD colspan="5">AB-7（圆柱密封型镍氢蓄电池）</TD>
													</TR>
													<TR>
														<TD colspan="4">电池平均寿命</TD>
														<TD colspan="5">约3年(根据使用条件不同变化很大)</TD>
													</TR>
													<TR>
														<TD colspan="4">附属品</TD>
														<TD colspan="5">连接电缆（CB-ADPC-MPA005）</TD>
													</TR>
												</TBODY>
										</TABLE>
									</DIV>
									<P class="mar-5">配线方法</P>
									<DIV class="bass-table-B02 no-margin-top">
										<IMG alt="" src="{{ asset('i/client/product/product-late/new_rcon_img23.jpg') }}">
									</DIV>
								</DIV>
							</DIV>
							<DIV style="margin: 30px 0px 5px; clear: both; font-size: 120%;">■ 扩展单元</DIV>
							<DIV class="clearfix">
								<DIV class="left-cell">
									<IMG alt="" src="{{ asset('i/client/product/product-late/new_rcon_img24.jpg') }}">
								</DIV>
								<DIV class="right-cell">
									<P class="mar-bot5">型号
										<SPAN style="font-size: 120%; font-weight: bold;">RCON－EXT</SPAN>
									</P>
									<P class="mar-bot5">规格</P>
									<DIV class="bass-table-B02 no-margin-top">
										<TABLE class="new-table" cellspacing="0" cellpadding="0">
											<COLGROUP>
												<TBODY>
													<TR>
														<TH colspan="4">型　号</TH>
														<TH colspan="5">规　格</TH>
													</TR>
													<TR>
														<TD colspan="4">质量</TD>
														<TD colspan="5">约99g</TD>
													</TR>
													<TR>
														<TD colspan="4">附属品</TD>
														<TD colspan="5">终端接头</TD>
													</TR>
												</TBODY>
										</TABLE>
										<P style="margin: 10px 0px 0px; font-size: 80%;">
											※SCON控制器：RCON连接规格附带一根0.2m（CB-RE-CTL002）长的连接电缆。
											<BR> 需0.2m以上长度的连接电缆时，需另外订购。
										</P>
									</DIV>
									<P class="mar-5">配线方法</P>
									<DIV class="bass-table-B02 no-margin-top">
										<IMG alt="" src="{{ asset('i/client/product/product-late/new_rcon_img25.jpg') }}">
									</DIV>
									<P class="mar-5">连接RCON时的SCON型号</P>
									<DIV class="bass-table-B02 no-margin-top">
										<IMG alt="" src="{{ asset('i/client/product/product-late/new_rcon_img26.jpg') }}">
									</DIV>
								</DIV>
							</DIV>
							<DIV style="margin: 30px 0px 5px; clear: both; font-size: 120%;">■ 电源单元</DIV>
							<DIV class="clearfix">
								<DIV class="left-cell">
									<IMG alt="" src="{{ asset('i/client/product/product-late/new_rcon_img27.jpg') }}">
								</DIV>
								<DIV class="right-cell">
									<P class="mar-bot5">型号
										<SPAN style="font-size: 120%; font-weight: bold;">PSA-24①</SPAN>
										<BR>
									</P>
									<DIV class="bass-table-B02 no-margin-top">
										<TABLE class="new-table" cellspacing="0" cellpadding="0">
											<COLGROUP>
												<TBODY>
													<TR>
														<TH colspan="2">型号</TH>
														<TH colspan="2">①记入项目</TH>
														<TH colspan="2">冷却风扇</TH>
														<TH colspan="2">电源容量</TH>
													</TR>
													<TR>
														<TD colspan="2">PSA-24</TD>
														<TD colspan="2">无记入</TD>
														<TD colspan="2">无</TD>
														<TD colspan="2">204W</TD>
													</TR>
													<TR>
														<TD colspan="2">PSA-24L</TD>
														<TD colspan="2">L</TD>
														<TD colspan="2">有</TD>
														<TD colspan="2">300W</TD>
													</TR>
												</TBODY>
										</TABLE>
									</DIV>
									<P style="margin-bottom: 0;margin-top:10px;">规格</P>
									<DIV class="bass-table-B02 no-margin-top">
										<p class="small-title">● 一般规格</p>
										<TABLE style="text-align: center;" cellspacing="0" cellpadding="0">
											<COLGROUP>
												<COL span="7">
												<COL>
												<COL span="2">
												<TBODY>
													<TR>
														<TH rowspan="2" colspan="3">项目</TH>
														<TH colspan="5">规格</TH>
														<TH rowspan="2" colspan="2">条件等</TH>
													</TR>
													<TR>
														<TH colspan="3">PSA-24</TH>
														<TH colspan="2">PSA-24L</TH>
													</TR>
													<TR>
														<TD colspan="3">电源输入电压范围</TD>
														<TD colspan="5">AC100V~AC230V±10%</TD>
														<TD colspan="2">　</TD>
													</TR>
													<TR>
														<TD rowspan="2" colspan="2">电源电流</TD>
														<TD>AC100V</TD>
														<TD colspan="3">###以下</TD>
														<TD colspan="2">###以下</TD>
														<TD colspan="2">连续额定输出204W</TD>
													</TR>
													<TR>
														<TD>AC200V</TD>
														<TD colspan="3">###以下</TD>
														<TD colspan="2">###以下</TD>
														<TD colspan="2">连续额定输出204W</TD>
													</TR>
													<TR>
														<TD colspan="3">电源频率范围</TD>
														<TD colspan="5">50/60Hz±5%</TD>
														<TD colspan="2">　</TD>
													</TR>
													<TR>
														<TD rowspan="2" colspan="2">电源容量</TD>
														<TD>AC100V</TD>
														<TD colspan="3">250VA</TD>
														<TD colspan="2">390VA</TD>
														<TD colspan="2">连续额定输出力204W</TD>
													</TR>
													<TR>
														<TD>AC200V</TD>
														<TD colspan="3">280VA</TD>
														<TD colspan="2">380VA</TD>
														<TD colspan="2">连续额定输出204W</TD>
													</TR>
													<TR>
														<TD rowspan="2" colspan="2">冲击电流　＊1</TD>
														<TD>AC100V</TD>
														<TD colspan="5">27.4A (typ)</TD>
														<TD rowspan="2" colspan="2">冷启动时(40℃)</TD>
													</TR>
													<TR>
														<TD>AC200V</TD>
														<TD colspan="5">54.8A (typ)</TD>
													</TR>
													<TR>
														<TD rowspan="2" colspan="2">瞬间断电耐性</TD>
														<TD>50Hz</TD>
														<TD colspan="5">20ms</TD>
														<TD rowspan="2" colspan="2">　</TD>
													</TR>
													<TR>
														<TD>60Hz</TD>
														<TD colspan="5">16ms</TD>
													</TR>
													<TR>
														<TD colspan="3">触电保护机构</TD>
														<TD colspan="5">ClassⅠ</TD>
														<TD colspan="2">　</TD>
													</TR>
													<TR>
														<TD rowspan="2" colspan="2">功率</TD>
														<TD>AC100V</TD>
														<TD colspan="5">86%以上</TD>
														<TD rowspan="2" colspan="2">连续额定输出204W</TD>
													</TR>
													<TR>
														<TD>AC200V</TD>
														<TD colspan="5">90%以上</TD>
													</TR>
													<TR>
														<TD colspan="3">输出电压范围　＊2</TD>
														<TD colspan="5">24V±10%</TD>
														<TD colspan="2">　</TD>
													</TR>
													<TR>
														<TD colspan="3">连续额定输出</TD>
														<TD colspan="3">8.5A (204W)</TD>
														<TD colspan="2">13.8A (330W)</TD>
														<TD colspan="2">　</TD>
													</TR>
													<TR>
														<TD colspan="3">峰值输出</TD>
														<TD colspan="5">17A (408W)</TD>
														<TD colspan="2">　</TD>
													</TR>
													<TR>
														<TD colspan="3">保护功能</TD>
														<TD colspan="5">
															过电流保护、过热保护、过载保护
															<BR>过电压保护、输入低电压保护、风扇旋转检测</TD>
														<TD colspan="2">　</TD>
													</TR>
													<TR>
														<TD colspan="3">保护等级</TD>
														<TD colspan="5">不适用</TD>
														<TD colspan="2">　</TD>
													</TR>
													<TR>
														<TD rowspan="2" colspan="2">发热量</TD>
														<TD>AC100V</TD>
														<TD colspan="5">28.6W</TD>
														<TD colspan="2">204W连续额定时</TD>
													</TR>
													<TR>
														<TD>AC200V</TD>
														<TD colspan="5">20.4W</TD>
														<TD colspan="2">204W连续额定时</TD>
													</TR>
													<TR>
														<TD colspan="3">冷却方式</TD>
														<TD colspan="3">自然空冷</TD>
														<TD colspan="2">自然空冷</TD>
														<TD colspan="2">　</TD>
													</TR>
													<TR>
														<TD rowspan="3" colspan="2">绝缘耐压</TD>
														<TD>AC输入-DC输出</TD>
														<TD colspan="5">漏电流10mA</TD>
														<TD colspan="2">AC3000V 1分钟</TD>
													</TR>
													<TR>
														<TD>AC输入-FG</TD>
														<TD colspan="5">漏电流10mA</TD>
														<TD colspan="2">AC2000V 1分钟</TD>
													</TR>
													<TR>
														<TD>DC输出-FG</TD>
														<TD colspan="5">漏电流25mA</TD>
														<TD colspan="2">AC500V 1分钟</TD>
													</TR>
													<TR>
														<TD rowspan="3" colspan="2">绝缘电阻</TD>
														<TD>AC输入-DC输出</TD>
														<TD colspan="5">DC500V 50MΩ以上</TD>
														<TD colspan="2">　</TD>
													</TR>
													<TR>
														<TD>AC输入-FG</TD>
														<TD colspan="5">DC500V 50MΩ以上</TD>
														<TD colspan="2">　</TD>
													</TR>
													<TR>
														<TD>DC输出-FG</TD>
														<TD colspan="5">DC500V 50MΩ以上</TD>
														<TD colspan="2">　</TD>
													</TR>
													<TR>
														<TD rowspan="2" colspan="2">漏电流　＊3</TD>
														<TD>AC100V</TD>
														<TD colspan="5">0.40mA　typ</TD>
														<TD colspan="2">　</TD>
													</TR>
													<TR>
														<TD>AC200V</TD>
														<TD colspan="5">0.75mA　typ</TD>
														<TD colspan="2">　</TD>
													</TR>
													<TR>
														<TD colspan="3">安全规格</TD>
														<TD colspan="5">UL61010、EN61010-1
															<BR>KC(EMC)、EN55011</TD>
														<TD colspan="2">　</TD>
													</TR>
												</TBODY>
										</TABLE>
										<P class="small-size">
											＊1　冲击电流的脉宽为5ms以下。另外并联运行时，冲击电流需按并联台数计算。
											<BR> 　　　断路器选型时，需注意选择不会因冲击电流导致动作的类型或特性。
											<BR> ＊2　本电源为满足并联运行的要求，已设计有因负荷变化而变动输出电压的特性。
											<BR> 　　　因此，本电源为IAI控制器专用。因负荷变化输出电压的特性请参考使用说明书。
											<BR> ＊3　单个电源的漏电流规格。
										</P>
										<p class="small-title">● 环境规格</p>
										<TABLE style="text-align: center;width: 100%;" cellspacing="0" cellpadding="0">
											<COLGROUP>
												<COL span="7">
												<COL>
												<COL span="2">
												<TBODY>
													<TR>
														<TH colspan="3">项目</TH>
														<TH colspan="5">规格</TH>
														<TH colspan="2">条件等</TH>
													</TR>
													<TR>
														<TD colspan="3">使用环境温度</TD>
														<TD colspan="5">0℃~+55℃
															<BR>(存在温度下降)</TD>
														<TD colspan="2">　</TD>
													</TR>
													<TR>
														<TD colspan="3">使用环境湿度</TD>
														<TD colspan="5">85%RH以下</TD>
														<TD colspan="2">无结露</TD>
													</TR>
													<TR>
														<TD colspan="3">保存环境温度</TD>
														<TD colspan="5">-20℃~+70℃</TD>
														<TD colspan="2">　</TD>
													</TR>
													<TR>
														<TD colspan="3">环境</TD>
														<TD colspan="5">无腐蚀性气体，无严重尘埃</TD>
														<TD colspan="2">　</TD>
													</TR>
													<TR>
														<TD colspan="3">标高</TD>
														<TD colspan="5">2,000m</TD>
														<TD colspan="2">　</TD>
													</TR>
													<TR>
														<TD rowspan="4" colspan="3">耐振动</TD>
														<TD colspan="5">频率10～57Hz　/　振幅：0.075mm</TD>
														<TD colspan="2">　</TD>
													</TR>
													<TR>
														<TD colspan="5">频率57～150Hz / 加速度9.8m/s2</TD>
														<TD rowspan="3" colspan="2">　</TD>
													</TR>
													<TR>
														<TD colspan="5">XYZ各方向　测试时间：10分钟　</TD>
													</TR>
													<TR>
														<TD colspan="5">测试次数：10次</TD>
													</TR>
													<TR>
														<TD colspan="3">捆包落下</TD>
														<TD colspan="5">落下高度800mm・1角3棱6面</TD>
														<TD colspan="2">　</TD>
													</TR>
													<TR>
														<TD colspan="3">过电压等级</TD>
														<TD colspan="5">Ⅱ</TD>
														<TD colspan="2">　</TD>
													</TR>
													<TR>
														<TD colspan="3">污染度</TD>
														<TD colspan="5">2</TD>
														<TD colspan="2">　</TD>
													</TR>
													<TR>
														<TD colspan="3">安装场所</TD>
														<TD colspan="5">室内</TD>
														<TD colspan="2">　</TD>
													</TR>
												</TBODY>
										</TABLE>
									</DIV>
								</DIV>
							</DIV>
						</LI>
						<!--外形尺寸图-->
						<LI class="hide">
							<H3 class="new-product-title new-product-title-first">外形尺寸图</H3>
							<DIV class="new-sub-title">■ 网关单元</DIV>
							<DIV class="bass-table-B02 no-margin-top">
								<IMG alt="" src="{{ asset('i/client/product/product-late/new_rcon_img28.jpg') }}">
							</DIV>
							<DIV style="margin: 30px 0px 5px; font-size: 120%;">■ 终端单元</DIV>
							<DIV class="bass-table-B02 no-margin-top">
								<IMG alt="" src="{{ asset('i/client/product/product-late/new_rcon_img29.jpg') }}">
							</DIV>
							<DIV style="margin: 30px 0px 5px; font-size: 120%;">■ 驱动单元</DIV>
							<DIV class="bass-table-B02 no-margin-top">
								<IMG alt="" src="{{ asset('i/client/product/product-late/new_rcon_img30.jpg') }}">
							</DIV>
							<DIV style="margin: 30px 0px 5px; font-size: 120%;">■ SCON扩展单元</DIV>
							<DIV class="bass-table-B02 no-margin-top">
								<IMG alt="" src="{{ asset('i/client/product/product-late/new_rcon_img31.jpg') }}">
							</DIV>
							<DIV style="margin: 30px 0px 5px; font-size: 120%;">■ 简易绝对单元</DIV>
							<DIV class="bass-table-B02 no-margin-top">
								<IMG alt="" src="{{ asset('i/client/product/product-late/new_rcon_img32.jpg') }}">
							</DIV>
							<DIV style="margin: 30px 0px 5px; font-size: 120%;">■ 风扇单元</DIV>
							<DIV class="bass-table-B02 no-margin-top">
								<IMG alt="" src="{{ asset('i/client/product/product-late/new_rcon_img33.jpg') }}">
							</DIV>
							<DIV style="margin: 30px 0px 5px; font-size: 120%;">■ 电源单元</DIV>
							<DIV class="bass-table-B02 no-margin-top"> 无风扇
								<BR>
								<IMG alt="" src="{{ asset('i/client/product/product-late/new_rcon_img34.jpg') }}">
							</DIV>
							<DIV class="bass-table-B02 no-margin-top"> 带风扇
								<BR>
								<IMG alt="" src="{{ asset('i/client/product/product-late/new_rcon_img35.jpg') }}">
							</DIV>
							<H3 class="new-product-title">安装方法</H3>
							<DIV class="new-sub-title">■ RCON系统</DIV>
							<P>
								RCON的安装条件如下所示。无论有无风扇，需满足下图条件。
								<BR>简易绝对单元也适用下图。</P>
							<DIV class="bass-table-B02 no-margin-top">
								<TABLE class="new-table" cellspacing="0" cellpadding="0">
									<COLGROUP>
										<TBODY>
											<TR>
												<TH colspan="3">项目</TH>
												<TH colspan="3">规格</TH>
											</TR>
											<TR>
												<TD rowspan="3">安装</TD>
												<TD colspan="2">安装方向</TD>
												<TD colspan="3">垂直安装(排气侧为上方)</TD>
											</TR>
											<TR>
												<TD colspan="2">安装方法</TD>
												<TD colspan="3">DIN规安装</TD>
											</TR>
											<TR>
												<TD colspan="2">安装条件</TD>
												<TD colspan="3">参考图</TD>
											</TR>
											<TR>
												<TD colspan="3">接地&nbsp;</TD>
												<TD colspan="3">D种安装</TD>
											</TR>
										</TBODY>
								</TABLE>
							</DIV>
							<DIV class="bass-table-B02 no-margin-top">
								<IMG alt="" src="{{ asset('i/client/product/product-late/new_rcon_img36.jpg') }}">
							</DIV>
							<DIV style="margin: 30px 0px 5px; font-size: 120%;">■ 电源单元</DIV>
							<P>电源单元的安装条件如下所示。</P>
							<DIV class="bass-table-B02 no-margin-top">
								<TABLE class="new-table" cellspacing="0" cellpadding="0">
									<COLGROUP>
										<COL span="6">
										<TBODY>
											<TR>
												<TH colspan="3">项目</TH>
												<TH colspan="3">规格</TH>
											</TR>
											<TR>
												<TD rowspan="3">安装</TD>
												<TD colspan="2">安装方向 ※1</TD>
												<TD colspan="3">水平安装</TD>
											</TR>
											<TR>
												<TD colspan="2">安装方法</TD>
												<TD colspan="3">螺丝固定或DIN规固定</TD>
											</TR>
											<TR>
												<TD colspan="2">安装条件</TD>
												<TD colspan="3">参考图</TD>
											</TR>
											<TR>
												<TD colspan="3">接地&nbsp;</TD>
												<TD colspan="3">D种接地的单独接地</TD>
											</TR>
										</TBODY>
								</TABLE>
								<P class="small-size">＊1　安装方向仅限垂直。</P>
								<DIV class="bass-table-B02 no-margin-top">
									<IMG alt="" src="{{ asset('i/client/product/product-late/new_rcon_img37.jpg') }}">
								</DIV>
								<H3 class="new-product-title">驱动轴连接</H3>
								<P>RCON驱动单元与驱动轴的连接因驱动轴的类型而异。
									<BR> 以下对连接类型、所需电缆型号、所需项目进行了归纳。
								</P>
								<DIV class="bass-table-B02" style="margin-top: 30px;">
									<IMG alt="" src="{{ asset('i/client/product/product-late/new_rcon_img38.jpg') }}">
								</DIV>
								<DIV class="bass-table-B02" style="margin-top: 30px;">
									<IMG alt="" src="{{ asset('i/client/product/product-late/new_rcon_img39.jpg') }}">
								</DIV>
							</DIV>
						</LI>
						<!---->
						<LI class="hide">
							<H3 class="new-product-title new-product-title-first">现场网络控制动作模式</H3>
							<DIV class="bass-table-B02" style="margin-top: 30px;">
								<IMG alt="" src="{{ asset('i/client/product/product-late/new_rcon_img40.jpg') }}">
							</DIV>
							<H3 class="new-product-title">各动作模式的功能一览</H3>
							<DIV class="bass-table-B02" style="margin-top: 30px;">
								<IMG alt="" src="{{ asset('i/client/product/product-late/new_rcon_img41.jpg') }}">
							</DIV>
						</LI>
						<!---->
						<LI class="hide">
							<H3 class="new-product-title">订购方法</H3>
							<P>
								对于RCON系统，客户可单独订购所需单元并自行组装使用。
								<BR> 因此，可轻松对应购买后的追加、变更。
								<BR> 但是，虽然最大连接台数为16轴，但是因连接单元的合计电流值不同会有不可使用的情况，请注意。
							</P>
							<P>＜订单示例＞使用下述驱动轴3台通过CC-Link动作时的订单型号如下所示。</P>
							<DIV class="bass-table-B02">
								<IMG alt="" src="{{ asset('i/client/product/product-late/new_rcon_img42.jpg') }}">
							</DIV>
							<DIV class="bass-table-B02">
								<p class="small-title">● 订单型号</p>
								<TABLE class="new-table product-table" cellspacing="0" cellpadding="0">
									<COLGROUP>
										<TBODY>
											<TR>
												<TH colspan="5">品名</TH>
												<TH colspan="5">型号</TH>
												<TH>数量</TH>
											</TR>
											<TR>
												<TD colspan="5">RCP6高推力型驱动轴</TD>
												<TD colspan="5">RCP6-SA8C-WA-56SP-20-500-P5-R05</TD>
												<TD>1</TD>
											</TR>
											<TR>
												<TD colspan="5">RCON驱动单元</TD>
												<TD colspan="5">RCON-PCF-1</TD>
												<TD>1</TD>
											</TR>
											<TR>
												<TD colspan="5">RCA2系列驱动轴</TD>
												<TD colspan="5">RCA2-TCA4NA-I-20-6-30-A6-R05</TD>
												<TD>2</TD>
											</TR>
											<TR>
												<TD colspan="5">RCON驱动单元</TD>
												<TD colspan="5">RCON-AC-2</TD>
												<TD>1</TD>
											</TR>
											<TR>
												<TD colspan="5">RCON网关单元</TD>
												<TD colspan="5">RCON-GW-CC</TD>
												<TD>1</TD>
											</TR>
										</TBODY>
								</TABLE>
							</DIV>
							<DIV class="bass-table-B02">
								<p class="small-title">● 根据需要可补充订购：</p>
								<TABLE class="new-table product-table" cellspacing="0" cellpadding="0">
									<COLGROUP>
										<TBODY>
											<TR>
												<TH colspan="5">品名</TH>
												<TH colspan="5">型号</TH>
												<TH>数量</TH>
											</TR>
											<TR>
												<TD colspan="5">联机软件</TD>
												<TD colspan="5">RCM-101-USB</TD>
												<TD>1</TD>
											</TR>
											<TR>
												<TD colspan="5">示教器</TD>
												<TD colspan="5">TB-02</TD>
												<TD>1</TD>
											</TR>
										</TBODY>
								</TABLE>
							</DIV>
							<DIV class="bass-table-B02">
								<p class="small-title">● 可在主页下载的：</p>
								<TABLE class="new-table product-table" cellspacing="0" cellpadding="0">
									<COLGROUP>
										<TBODY>
											<TR>
												<TH colspan="5">品名</TH>
												<TH colspan="5">型号</TH>
												<TH>数量</TH>
											</TR>
											<TR>
												<TD colspan="5">网关参数设定工具</TD>
												<TD colspan="5">－</TD>
												<TD>1</TD>
											</TR>
										</TBODY>
								</TABLE>
							</DIV>
						</LI>
					</UL>
					<!-- /bass-content-body -->
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