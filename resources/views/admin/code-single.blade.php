@section('style')

@stop

@extends('master/admin')
@section('content')
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">新增报警代码</div>
		 	<div class="panel-body">
		 		@if(isset($status))<div class="alert alert-success" role="alert">{{ $status }}</div> @endif
		 		@if(isset($error)) <div class="alert alert-danger" role="alert">{{ $error }}</div> @endif
				<form class="form-horizontal" id="case-form" method="post" action="{{ url('admin/code/save') }}" role="form" enctype="multipart/form-data">
					<input type="hidden" name="_token" value="{{ csrf_token() }}" />
					<input type="hidden" id="url_file_upload" value="{{ url('admin/code/upload') }}" />
					<input type="hidden" id="upload_success_url" value="{{ asset('i/admin/success.png') }}" />

					@if(!empty($id)) <input type="hidden" name="id" value="{{$id}}" /> @endif
					<div class="form-group">
						<label for="lname" class="col-sm-3 control-label">报警代码：</label>
						<div class="col-sm-6">
							<input type="text" class="form-control" name="code" required maxlength="255" value="@if(!empty($codeInfo->code)) {{$codeInfo->code}} @endif">
						</div>
					</div>

					<div class="form-group">
						<label for="lname" class="col-sm-3 control-label">报警名称：</label>
						<div class="col-sm-6">
							<input type="text" class="form-control" name="name" required maxlength="255" value="@if(!empty($codeInfo->name)) {{$codeInfo->name}} @endif">
						</div>
					</div>

					<div class="form-group">
						<label for="" class="col-sm-3 control-label">原因对策：</label>
						<div class="col-sm-6">
							<textarea class="form-control" rows="6" name="reason" required>@if(!empty($codeInfo->reason)) {{\App\Services\Helper::brEscape($codeInfo->reason)}} @endif</textarea>
						</div>
					</div>

					<div class="form-group">
						<label for="" class="col-sm-3 control-label">图片：</label>
						<div class="col-sm-3 ">
							<input type="file" class="upload-file" />
							<input type="hidden" class="file-name" name="pic" value="@if(!empty($codeInfo->pic)){{$codeInfo->pic}} @endif" />
							<img class="img-preview mt20" src="@if(!empty($codeInfo->pic)){{ CASE_CODE_PATH . $codeInfo->pic }}@endif" alt="" />
						</div>
					</div>

					<!-- <div class="form-group">
						<label for="" class="col-sm-3 control-label">图片：</label>
						<div class="col-sm-3 ">
							<input type="file" class="upload-file" />
							<input type="hidden" class="file-name" id="cover_image_name" name="pic" value="@if(!empty($codeInfo->pic)) {{$codeInfo->pic}} @endif" />
							<img class="img-preview mt20" src="@if(!empty($codeInfo->pic)) {{ CASE_CODE_PATH . $codeInfo->pic }} @endif" alt="" />
						</div>
					</div> -->

					<!-- <div class="form-group">
						<label for="" class="col-sm-3 control-label">图片附件：</label>
						<div class="col-sm-3 ">
							<input type="file" class="upload-file" name="pic"/>
							<img class="img-preview mt20" src="@if(isset($case->cover_image_name)) {{ CASE_IMG_PATH . $case->cover_image_name }} @endif" alt="" />
						</div>
						
						<div class="col-sm-12 ">
							<div class="col-sm-offset-3">
								<img class="col-sm-6" src="" />
							</div>
						</div>
					</div> -->

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
<script type="text/javascript" src="{{ asset('js/admin/upload.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/admin/related-product.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/admin/related-case.js') }}"></script>
@stop