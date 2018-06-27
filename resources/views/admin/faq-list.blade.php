@section('style')
<style>
	
</style>
@stop

@extends('master/admin')

@section('content')
	<div class="main-container">
		<div class="panel panel-primary">
			<div class="panel-heading">FAQ列表</div>
		 	<div class="panel-body">
		 		<input type="hidden" id="url-publish" value="{{ url('admin/faq/publish') }}" />
		 		<!--筛选条件-->
				<form id="condition-form" action="" method="get" class="form-horizontal">
		 			<input type="hidden" id="url-search" value="{{ url('admin/user/list') }}" />
					<div class="bg-search">
						<div class="form-group">
							<label class="col-sm-1" for="">
								<span class="form-span">阶段：</span>
							</label>
							<div class="col-sm-6">
								<label class="col-sm-2" for="stage1">
									<span class="form-span">选型阶段</span>
									<input type="radio" @if($data->condition_stage == "选型阶段") checked="checked" @endif name="stage" id="stage1" value="选型阶段"/>								
								</label>
								<label class="col-sm-2" for="stage2">
									<span class="form-span">设计阶段</span>
									<input type="radio" @if($data->condition_stage == "设计阶段") checked="checked" @endif name="stage" id="stage2" value="设计阶段"/>
								</label>
								<label class="col-sm-2" for="stage3">
									<span class="form-span">下单阶段</span>
									<input type="radio" @if($data->condition_stage == "下单阶段") checked="checked" @endif name="stage" id="stage3" value="下单阶段"/>
								</label>
								<label class="col-sm-2" for="stage4">
									<span class="form-span">调试阶段</span>
									<input type="radio" @if($data->condition_stage == "调试阶段") checked="checked" @endif name="stage" id="stage4" value="调试阶段"/>
								</label>
								<label class="col-sm-2" for="stage5">
									<span class="form-span">使用阶段</span>
									<input type="radio" @if($data->condition_stage == "使用阶段") checked="checked" @endif name="stage" id="stage5" value="使用阶段"/> 
								</label>
							</div>
		 				</div>
		 				<div class="form-group">
		 					<label class="col-sm-1" for="">
								<span class="form-span">分类：</span>
							</label>
							<div class="col-sm-2">
								<select class="form-control col-sm-2" name="c1" id="c1">
									
								</select>
							</div>
							<div class="col-sm-2">
								<select class="form-control col-sm-2" name="c2" id="c2">
									
								</select>
							</div>
							<div class="col-sm-2">
								<select class="form-control col-sm-2" name="c3" id="c3">
									
								</select>
							</div>
		 				</div>
		 				<div class="form-group">
		 					<label class="col-sm-1" for="">
								<span class="form-span">咨询内容：</span>
							</label>
							<div class="col-sm-3">
								<select class="form-control" name="content" id="content">
									<option value="">---</option>
									<option @if($data->condition_content == "规格") selected="selected" @endif value="规格">规格</option>
									<option @if($data->condition_content == "操作") selected="selected" @endif value="操作">操作</option>
									<option @if($data->condition_content == "程序") selected="selected" @endif value="程序">程序</option>
									<option @if($data->condition_content == "故障") selected="selected" @endif value="故障">故障</option>
									<option @if($data->condition_content == "参数") selected="selected" @endif value="参数">参数</option>
									<option @if($data->condition_content == "型号") selected="selected" @endif value="型号">型号</option>
									<option @if($data->condition_content == "机型选择") selected="selected" @endif value="机型选择">机型选择</option>
									<option @if($data->condition_content == "接线") selected="selected" @endif value="接线">接线</option>
									<option @if($data->condition_content == "串行通信") selected="selected" @endif value="串行通信">串行通信</option>
									<option @if($data->condition_content == "外观・尺寸・结构・材质") selected="selected" @endif value="外观・尺寸・结构・材质">外观・尺寸・结构・材质</option>
									<option @if($data->condition_content == "维护") selected="selected" @endif value="维护">维护</option>
									<option @if($data->condition_content == "安装方法") selected="selected" @endif value="安装方法">安装方法</option>
									<option @if($data->condition_content == "其他") selected="selected" @endif value="其他">其他</option>
								</select>
							</div>
							<label class="col-sm-1" for="">
								<span class="form-span">管理ID：</span>
							</label>
							<div class="col-sm-2">
								<input type="text" name="mid" id="mid" value="{{ $data->condition_mid }}" class="form-control" />
							</div>
		 				</div>
		 				<div class="form-group">
		 					<label class="col-sm-1" for="">
								<span class="form-span">关键词：</span>
							</label>
							<div class="col-sm-3">
								<input type="text" name="keyword" id="keyword" value="{{ $data->condition_keyword }}" class="form-control" />
							</div>
							<label class="col-sm-1" for="">
								<span class="form-span">错误代码：</span>
							</label>
							<div class="col-sm-2">
								<input type="text" name="errcode" id="errcode" value="{{ $data->condition_errcode }}" class="form-control" />
							</div>
		 				</div>
		 				<div class="form-group">
		 					<div class="col-sm-1 col-sm-offset-6">
		 						<div class="btn btn-primary search pull-right">查询</div>
		 					</div>
		 				</div>
		 			</div>
				</form>
				<h4 class="mb20 mt20">搜索结果：{{ $data->count }}条</h4>
				<table class="table table-bordered text-center">
				    <tr>
				    	<td>ID</td>
				    	<td>管理ID</td>
				    	<td>问题</td>
				    	<td>分类1</td>
				    	<td>分类2</td>
				    	<td>错误代码</td>
				    	<td>状态</td>
				    	<td>操作</td>
				    </tr>
				    @foreach ($data as $d)
				    <tr>
				    	<td><span class="form-span">{{ $d->id }}</span></td>
				    	<td><span class="form-span">{{ $d->mid }}</span></td>
				    	<td><span class="form-span">{{ $d->question }}</span></td>
				    	<td><span class="form-span">{{ $d->c1 }}</span></td>
				    	<td><span class="form-span">{{ $d->c2 }}</span></td>
				    	<td><span class="form-span">{{ $d->errcode }}</span></td>
				    	<td>
				    		@if($d->state === IS_NOT_PUBLISH)
				    		<span class="form-span font-danger">{{ IS_NOT_PUBLISH_STRING }}</span>
				    		@else
				    		<span class="form-span font-success">{{ IS_PUBLISH_STRING }}</span>
				    		@endif
				    	</td>
				    	<td>
				    		<a class="btn btn-info edit" href="{{ url('admin/faq/single?id=' . $d->id) }}">编辑</a>
				    	</td>
				    </tr>
				    @endforeach
				</table>
				<div class="text-center">
					{!! str_replace('/?', '?', $data->render()) !!}
			    </div>
		 	</div>
		</div>
	</div>
@endsection

@section('script')
<script type="text/javascript" src="{{ asset('js/admin/list.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/admin/faq.js') }}"></script>
@stop
