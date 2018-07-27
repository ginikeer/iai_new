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
		<form action="{{url('service/manual')}}" method="GET">
		<input type="hidden" value="1" name="is_search"/>
        <ul class="nav-blocks" id="nav-cases">
        	@for($i = 0; $i < count($category); $i++)
        	<li @if($i == 0 && empty($is_search)) class="active" @endif><a href="javascript:void(0);">{{ $category[$i]->title }}</a></li>
        	@endfor
        	<li class="_search" style="padding-left:20px;width:30%;">
        		<input type="text" name="keywords" value="{{!empty($keywords) ? $keywords : ''}}" placeholder="请填写搜索关键字"/>
        	</li>
        	<li class="_search">
        		<input type="submit" style="width:60px;height:40px;" value="搜索"/>
        	</li>
        </ul>
        
        </form>
      	<div class="manual-item @if(!empty($is_search)) show @endif search_result">
	        	<h3 class="anchors">搜索结果</h3>
	        	<div class="service-list">
	        		@forelse ($manual_search as $m)
					<div class="service-list-item">
						<div class="row row-no-offset">
							<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>{{ $m->title }}</big></div>
							<div class="col-lg-4 text-right">
								@if(!empty($m->cn_pdf_name)) <a href="{{ url('service/manual-download?l=CN&t=manual&n=' . substr($m->cn_pdf_name, 0, -4)) }}&e=pdf" target="_blank" class="btn btn-red btn-xs">下载(CN)</a> @else <div class="btn btn-gray btn-xs">下载(CN)</div> @endif
								@if(!empty($m->en_pdf_name)) <a href="{{ url('service/manual-download?l=EN&t=manual&n=' . substr($m->en_pdf_name, 0, -4)) }}&e=pdf" target="_blank" class="btn btn-red btn-xs">下载(EN)</a> @else <div class="btn btn-gray btn-xs">下载(EN)</div> @endif
								@if(!empty($m->ja_pdf_name)) <a href="{{ url('service/manual-download?l=JA&t=manual&n=' . substr($m->ja_pdf_name, 0, -4)) }}&e=pdf" target="_blank" class="btn btn-red btn-xs">下载(JA)</a> @else <div class="btn btn-gray btn-xs">下载(JA)</div> @endif
							</div>
						</div>
					</div>
					@empty
					<div class="service-list-item">
						<div class="row row-no-offset">
							<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>没有数据</big></div>
							<div class="col-lg-4 text-right">
								
							</div>
						</div>
					</div>
					@endforelse 
				</div>
	        </div>
      
        	

     
	        @for($i = 0; $i < count($category); $i++)
	        <div class="manual-item @if($i == 0 && empty($is_search)) show @endif">
	        	<h3 class="anchors">{{ $category[$i]->title }}</h3>
	        	<div class="service-list">
	        		@foreach ($manual[$category[$i]->id] as $m)
					<div class="service-list-item">
						<div class="row row-no-offset">
							<div class="col-lg-8"><span class="icon-20 icon-20-file"></span><big>{{ $m->title }}</big></div>
							<div class="col-lg-4 text-right">
								@if(!empty($m->cn_pdf_name)) <a href="{{ url('service/manual-download?l=CN&t=manual&n=' . substr($m->cn_pdf_name, 0, -4)) }}&e=pdf" target="_blank" class="btn btn-red btn-xs">下载(CN)</a> @else <div class="btn btn-gray btn-xs">下载(CN)</div> @endif
								@if(!empty($m->en_pdf_name)) <a href="{{ url('service/manual-download?l=EN&t=manual&n=' . substr($m->en_pdf_name, 0, -4)) }}&e=pdf" target="_blank" class="btn btn-red btn-xs">下载(EN)</a> @else <div class="btn btn-gray btn-xs">下载(EN)</div> @endif
								@if(!empty($m->ja_pdf_name)) <a href="{{ url('service/manual-download?l=JA&t=manual&n=' . substr($m->ja_pdf_name, 0, -4)) }}&e=pdf" target="_blank" class="btn btn-red btn-xs">下载(JA)</a> @else <div class="btn btn-gray btn-xs">下载(JA)</div> @endif
							</div>
						</div>
					</div>
					@endforeach
				</div>
	        </div>
	        @endfor
       
	</div>
</div>



@endsection

@section('script')
<script type="text/javascript" src="{{ asset('js/client/service.js') }}"></script>
@stop