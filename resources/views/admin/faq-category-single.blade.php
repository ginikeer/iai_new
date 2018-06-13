@section('style')

@stop

@extends('master/admin')
@section('content')
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">FAQ分类信息</div>
		 	<div class="panel-body">
				<form class="form-horizontal" id="faq_category_form" method="post" action="{{ url('admin/faq/category-save') }}" role="form">
					<input type="hidden" name="_token" value="{{ csrf_token() }}" />
					<input type="hidden" name="id" value="{{ $data->id or '' }}" />
					<input type="hidden" id="url_get_second" value="{{ url('admin/faq/category-second-level') }}" />
					<div class="form-group">
						<label for="" class="col-sm-3 control-label">分类：</label>
						<div class="col-sm-3">
							<select id="third_level" name="third_level" class="form-control">
								<option value="">---分类1---</option>
								@foreach ($third_level as $third)
								<option value="{{ $third->id }}" 
									@if((isset($data->third_level_id) && $data->third_level_id == $third->id) || 
										(isset($data->third_level_id) && $data->third_level_id === 0 && $data->second_level_id == $third->id)) 
											selected="selected" @endif>
									{{ $third->name }}
								</option>
								@endforeach
							</select>
						</div>
						<div class="col-sm-3">
							<select id="second_level" name="second_level" class="form-control">
								<option value="">---分类2---</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-sm-3 control-label">分类3名称：</label>
						<div class="col-sm-6">
							<input type="text" class="form-control required" id="name" name="name"  maxlength="32" value="{{ $data->name or '' }}">
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-sm-3 control-label">（分类）：</label>
						<div class="col-sm-6">
							<input type="text" class="form-control" id="nameCtgry" name="nameCtgry" maxlength="64" value="{{ $data->nameCtgry or '' }}">
						</div>
					</div>
					<div class="form-group">
						<span class="col-sm-9 col-sm-offset-3">备注：如果不选择分类，默认追加为分类1；如追加分类3请先选择分类1再选择分类2。<br />（分类）：如果要追加的分类名称既输入分类A又属于分类B，需要分别追加两次，（分类）可填写对应分类，以便于区分。</span>
					</div>
					<div class="col-sm-12 text-right">
						<input type="submit" class="btn btn-primary submit" value="提交" />
					</div>
				</form>
			</div>
		</div>
	</div>
	
@endsection

@section('script')
<script type="text/javascript" src="{{ asset('js/admin/single.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/admin/faq.js') }}"></script>
<script>
	@if(isset($data->third_level_id) && $data->third_level_id != 0)
		setSecondLevel({{ $data->third_level_id }}, {{ $data->second_level_id }});	//分类3
	@elseif(isset($data->third_level_id) && $data->third_level_id === 0)
		setSecondLevel({{ $data->second_level_id }}, -1);	//分类2
	@endif
</script>
@stop