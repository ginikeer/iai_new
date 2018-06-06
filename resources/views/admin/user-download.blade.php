@section('style')
<style>
	
</style>
@stop

@extends('master/admin')

@section('content')
	<div class="main-container">
		<div class="panel panel-primary">
			<div class="panel-heading">会员下载记录</div>
		 	<div class="panel-body">
		 		<!--筛选条件-->
				<form id="condition-form" action="" method="get">
		 			<input type="hidden" id="url-download" value="{{ url('admin/user/download-excel') }}" />
					<div class="form-group clearfix bg-search">
		 				<div class="col-sm-2">
		 					<div class="btn btn-primary download">Excel下载</div>
		 				</div>
		 			</div>
				</form>
				<h4 class="mb20 mt20">结果：{{ $data->count }}条</h4>
				<table class="table table-bordered text-center">
				    <tr>
				    	<td>ID</td>
				    	<td>日期</td>
				    	<td>会员ID（E-mail）</td>
				    	<td>姓名</td>
				    	<td>下载内容</td>
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
