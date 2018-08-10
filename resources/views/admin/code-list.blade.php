@section('style')
<style>
	
</style>
@stop

@extends('master/admin')

@section('content')
	<div class="">
		<div class="panel panel-primary">
			<div class="panel-heading">报警代码列表</div>
		 	<div class="panel-body">
		 		<input type="hidden" id="url-del" value="{{ url('admin/code/del') }}" />
				<table class="table table-bordered text-center">
				    <tr>
				    	<td>报警代码</td>
				    	<td>报警名称</td>
				    	<td>原因/对策</td>
				    	<td>操作</td>
				    </tr>
				    @foreach ($codeList as $d)
				    <tr>
				    	<td><span class="form-span">{{ $d->code }}</span></td>
				    	<td><span class="form-span">{{ $d->name }}</span></td>
				    	<td><span class="form-span">{{\App\Services\Helper::truncation(\App\Services\Helper::brEscape($d->reason),20)}}</span></td>
				    	<td>
				    		<a class="btn btn-info edit" href="{{ url('admin/code/single', ['id'=>$d->id]) }}">编辑</a>
				    		<div class="btn btn-danger del" data-id="{{ $d->id }}">删除</div>
				    	</td>
				    </tr>
				    @endforeach
				</table>
				<div class="text-center">
					{!! str_replace('/?', '?', $codeList->render()) !!}
			    </div>
		 	</div>
		</div>
	</div>
@endsection

@section('script')
<script type="text/javascript" src="{{ asset('js/admin/list.js') }}"></script>
<script type="text/javascript">
	
</script>
@stop
