@section('style')
<style>
	
</style>
@stop

@extends('master/admin')

@section('content')
	<div class="">
		<div class="panel panel-primary">
			<div class="panel-heading">产品案例列表</div>
		 	<div class="panel-body">
		 		<input type="hidden" id="url-del" value="{{ url('admin/case/del') }}" />
				<table class="table table-bordered text-center">
				    <tr>
				    	<td>标题</td>
				    	<td>列表缩略图</td>
				    	<td>标签</td>
				    	<td>操作</td>
				    </tr>
				    @foreach ($data as $d)
				    <tr>
				    	<td><span class="form-span">{{ $d->title }}</span></td>
				    	<td><img src="{{ CASE_IMG_PATH . $d->cover_image_name }}" alt="" /></td>
				    	<td><span class="form-span"></span></td>
				    	<td>
				    		<a class="btn btn-info edit" href="{{ url('admin/case/single?id=' . $d->id) }}">编辑</a>
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
<script type="text/javascript">
	
</script>
@stop
