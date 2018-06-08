@section('style')
<style>
	
</style>
@stop

@extends('master/admin')

@section('content')
	<div class="main-container">
		<div class="panel panel-primary">
			<div class="panel-heading">纸质目录申请</div>
		 	<div class="panel-body">
		 		<!--筛选条件-->
				<form id="condition-form" action="" method="get">
		 			<input type="hidden" id="url-download" value="{{ url('admin/user/paper-apply-excel') }}" />
					<div class="form-group clearfix bg-search">
		 				<div class="col-sm-2">
		 					<div class="btn btn-primary download">Excel下载</div>
		 				</div>
		 			</div>
				</form>
				<h4 class="mb20 mt20">结果：{{ $data->count }}条</h4>
				<table class="table table-bordered text-center">
				    <tr>
				    	<td>公司</td>
				    	<td>部门</td>
				    	<td>姓名</td>
				    	<td>地址</td>
				    	<td>电话</td>
				    	<td>申请日期</td>
				    </tr>
				    @foreach ($data as $d)
				    <tr>
				    	<td><span class="form-span">{{ $d->company }}</span></td>
				    	<td><span class="form-span">{{ $d->department }}</span></td>
				    	<td><span class="form-span">{{ $d->name }}</span></td>
				    	<td><span class="form-span">{{ $d->address }}</span></td>
				    	<td><span class="form-span">{{ $d->tel }}</span></td>
				    	<td><span class="form-span">{{ $d->created_at }}</span></td>
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
