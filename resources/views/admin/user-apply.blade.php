@section('style')
<style>
	
</style>
@stop

@extends('master/admin')

@section('content')
	<div class="main-container">
		<div class="panel panel-primary">
			<div class="panel-heading">会员目录申请</div>
		 	<div class="panel-body">
		 		<!--筛选条件-->
				<form id="condition-form" action="" method="get">
		 			<input type="hidden" id="url-search" value="{{ url('admin/user/apply') }}" />
		 			<input type="hidden" id="url-download" value="{{ url('admin/user/apply-excel') }}" />
					<div class="form-group clearfix bg-search">
		 				<div class="col-sm-2">
		 					<select name="state" class="form-control">
		 						<option value="">全部状态</option>
		 						<option @if($data->condition_state === USER_APPLY_SENT) selected @endif value="{{ USER_APPLY_SENT }}">{{ USER_APPLY_SENT_STRING }}</option>
		 						<option @if($data->condition_state === USER_APPLY_NOT_SENT) selected @endif value="{{ USER_APPLY_NOT_SENT }}">{{ USER_APPLY_NOT_SENT_STRING }}</option>
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
				    	<td>日期</td>
				    	<td>会员ID（E-mail）</td>
				    	<td>姓名</td>
				    	<td>申请目录</td>
				    	<td>状态</td>
				    </tr>
				    @foreach ($data as $d)
				    <tr>
				    	<td><span class="form-span">{{ $d->id }}</span></td>
				    	<td><span class="form-span">{{ $d->created_at }}</span></td>
				    	<td><span class="form-span">{{ $d->email }}</span></td>
				    	<td>
				    		<a class="form-span" href="{{ url('admin/user/single?id=' . $d->uid) }}" target="_blank">{{ $d->name }}</a>
				    	</td>
				    	<td><span class="form-span">{{ $d->content }}</span></td>
				    	<td>
				    		@if($d->state === USER_APPLY_NOT_SENT)
				    		<a class="form-span font-danger" href="{{ url('admin/user/apply-state?id=' . $d->id) }}">{{ $d->state_string }}</a>
				    		@elseif($d->state === USER_APPLY_SENT)
				    		<a class="form-span font-success" href="{{ url('admin/user/apply-state?id=' . $d->id) }}">{{ $d->state_string }}</a>
				    		@endif
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
