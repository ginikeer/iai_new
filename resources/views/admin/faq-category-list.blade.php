@section('style')
<style>
	
</style>
@stop

@extends('master/admin')

@section('content')
	<div class="">
		<div class="panel panel-primary">
			<div class="panel-heading">FAQ分类列表</div>
		 	<div class="panel-body">
		 		<input type="hidden" id="url-del" value="{{ url('admin/faq/cate-del') }}" />
				<table class="table table-bordered text-center">
				    <tr>
				    	<td>分类1</td>
				    	<td>分类2</td>
				    	<td>分类3</td>
				    </tr>
				    @foreach ($datalist as $d)
				    <tr>
				    	<td><a href="{{ url('admin/faq/category-single?id=' . $d->third_level_id) }}" class="form-span">{{ $d->third_level_name }}</a></td>
				    	<td><a href="{{ url('admin/faq/category-single?id=' . $d->second_level_id) }}" class="form-span">{{ $d->second_level_name }}</a></td>
				    	<td><a href="{{ url('admin/faq/category-single?id=' . $d->id) }}" class="form-span">{{ $d->name }}</a></td>
				    </tr>
				    @endforeach
				</table>
				<div class="text-center">
					{!! str_replace('/?', '?', $paginator->render()) !!}
			    </div>
		 	</div>
		</div>
	</div>
@endsection

@section('script')
<script type="text/javascript" src="{{ asset('js/admin/list.js') }}"></script>
@stop
