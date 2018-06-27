@section('style')

@stop

@extends('master/admin')
@section('content')
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">FAQ信息</div>
		 	<div class="panel-body">
				<form class="form-horizontal" id="faq-form" method="post" action="{{ url('admin/faq/save') }}" role="form">
					<input type="hidden" name="_token" value="{{ csrf_token() }}" />
					<input type="hidden" name="id" value="{{ $data->id or '' }}" />
					<div class="form-group">
						<label for="" class="col-sm-3 control-label">管理ID：</label>
						<div class="col-sm-6">
							<input type="text" class="form-control" name="mid" value="{{ $data->mid or '' }}">
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-sm-3 control-label">分类1：</label>
						<div class="col-sm-6">
							<input type="text" class="form-control" name="c1" value="{{ $data->c1 or '' }}">
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-sm-3 control-label">分类2：</label>
						<div class="col-sm-6">
							<input type="text" class="form-control" name="c2" value="{{ $data->c2 or '' }}">
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-sm-3 control-label">分类3：</label>
						<div class="col-sm-6">
							<input type="text" class="form-control" name="c3" value="{{ $data->c3 or '' }}">
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-sm-3 control-label">阶段：</label>
						<div class="col-sm-6">
							<input type="text" class="form-control" name="stage" value="{{ $data->stage or '' }}">
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-sm-3 control-label">咨询内容：</label>
						<div class="col-sm-6">
							<input type="text" class="form-control" name="content" value="{{ $data->content or '' }}">
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-sm-3 control-label">错误代码：</label>
						<div class="col-sm-6">
							<input type="text" class="form-control" name="errcode" value="{{ $data->errcode or '' }}">
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-sm-3 control-label">Q：</label>
						<div class="col-sm-6">
							<input type="text" class="form-control" name="question" value="{{ $data->question or '' }}">
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-sm-3 control-label">A：</label>
						<div class="col-sm-6">
							<textarea class="form-control" name="answer" rows="5">{{ $data->answer or '' }}</textarea>
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-sm-3 control-label">备注：</label>
						<div class="col-sm-6">
							<textarea class="form-control" name="memo" rows="5">{{ $data->memo or '' }}</textarea>
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-sm-3 control-label">状态：</label>
						<div class="col-sm-6">
							<select name="state" class="form-control">
								<option @if(isset($data->state) && $data->state == IS_NOT_PUBLISH) selected="selected" @endif value="{{ IS_NOT_PUBLISH }}">{{ IS_NOT_PUBLISH_STRING }}</option>
								<option @if(isset($data->state) && $data->state == IS_PUBLISH) selected="selected" @endif value="{{ IS_PUBLISH }}">{{ IS_PUBLISH_STRING }}</option>
							</select>
						</div>
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
@stop