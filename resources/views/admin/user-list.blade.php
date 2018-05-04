@section('style')
<style>
	
</style>
@stop

@extends('master/admin')

@section('content')
	<div class="main-container">
		<div class="panel panel-primary">
			<div class="panel-heading">会员列表</div>
		 	<div class="panel-body">
		 		<input type="hidden" id="url-del" value="{{ url('admin/user/del') }}" />
		 		<!--筛选条件-->
				<form id="condition-form" action="" method="get">
		 			<input type="hidden" id="url-search" value="{{ url('admin/user/list') }}" />
		 			<input type="hidden" id="url-download" value="{{ url('admin/user/excel') }}" />
					<div class="form-group clearfix bg-search">
						<div class="col-sm-2">
		 					<input type="text" value="{{ $data->condition_email }}" name="email" class="form-control" placeholder="邮箱"  />
		 				</div>
		 				<div class="col-sm-2">
		 					<input type="text" value="{{ $data->condition_name }}" name="name" class="form-control" placeholder="姓名"  />
		 				</div>
		 				<div class="col-sm-2">
		 					<input type="text" value="{{ $data->condition_tel }}" name="tel" class="form-control" placeholder="电话" />
		 				</div>
		 				<div class="col-sm-2">
		 					<select name="status" class="form-control">
		 						<option value="">全部状态</option>
		 						<option @if($data->condition_status === USER_INFO_NOT_COMPLETED) selected @endif value="{{ USER_INFO_NOT_COMPLETED }}">{{ USER_INFO_NOT_COMPLETED_STRING }}</option>
		 						<option @if($data->condition_status === USER_INFO_HAS_COMPLETED) selected @endif value="{{ USER_INFO_HAS_COMPLETED }}">{{ USER_INFO_HAS_COMPLETED_STRING }}</option>
		 						<option @if($data->condition_status === USER_IS_DELETED) selected @endif value="{{ USER_IS_DELETED }}">{{ USER_IS_DELETED_STRING }}</option>
		 					</select>
		 				</div>
		 				<div class="col-sm-2 text-left">
		 					<div class="btn btn-primary search">查询</div>
		 				</div>
		 				<div class="col-sm-2 text-right">
		 					<div class="btn btn-primary download">Excel下载</div>
		 				</div>
		 			</div>
				</form>
				<h4 class="mb20 mt20">搜索结果：{{ $data->count }}条</h4>
				<table class="table table-bordered text-center">
				    <tr>
				    	<td>ID</td>
				    	<td>会员ID（E-mail）</td>
				    	<td>姓名</td>
				    	<td>公司名</td>
				    	<td>部门</td>
				    	<td>电话</td>
				    	<td>状态</td>
				    	<td>操作</td>
				    </tr>
				    @foreach ($data as $d)
				    <tr>
				    	<td><span class="form-span">{{ $d->id }}</span></td>
				    	<td><span class="form-span">{{ $d->email }}</span></td>
				    	<td><span class="form-span">{{ $d->name }}</span></td>
				    	<td><span class="form-span">{{ $d->company }}</span></td>
				    	<td><span class="form-span">{{ $d->department }}</span></td>
				    	<td><span class="form-span">{{ $d->tel }}</span></td>
				    	<td><span class="form-span @if($d->status === USER_INFO_NOT_COMPLETED) font-danger @elseif($d->status === USER_INFO_HAS_COMPLETED) font-success @elseif($d->status === USER_IS_DELETED) font-warning @endif ">{{ $d->status_string }}</span>
				    	</td>
				    	<td>
				    		<a class="btn btn-info edit" href="{{ url('admin/user/single?id=' . $d->id) }}">编辑</a>
				    		<div class="btn btn-danger del" data-id="{{ $d->id }}">删除</div>
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
<script type="text/javascript" src="{{ asset('js/admin/user.js') }}"></script>
@stop
