@section('style')
<style>
	
</style>
@stop

@extends('master/admin')
@section('content')
	<div class="main-container">
		<div class="panel panel-success">
			<div class="panel-body">
		 		
		 		<form id="condition-form" action="" method="get">
		 			<input type="hidden" id="url-search" value="{{ url('admin/product/list') }}" />
					<div class="form-group clearfix bg-search">
						<div class="col-sm-2">
								<select class="form-control" name="category">
									<option value=""> 请选择分类 </option>
									@foreach ($category as $c)
									<option value="{{ $c->id }}" {{$c->id == $cid ? 'selected' : ''}}> {{ $c->title }} </option>
									@endForeach
								</select>
							</div>
						<div class="col-sm-2">
		 					<input type="text" value="" name="title" placeholder="请填写标题关键字" class="form-control"/>
		 				</div>
		 				<div class="col-sm-2 text-left">
		 					<div class="btn btn-primary search">查询</div>
		 				</div>
		 				
		 			</div>
				</form>
			</div>
			<div class="panel-heading">产品使用说明添加</div>
				
		 	<div class="panel-body">

		 		

		 		<form action="{{ url('admin/manual/save') }}" method="post" class="form-horizontal">
					<input type="hidden" name="_token" value="{{ csrf_token() }}" />
		 			<input type="hidden" id="url_file_upload" value="{{ url('admin/manual/upload') }}" />
		 			<input type="hidden" id="upload_success_url" value="{{ asset('i/admin/success.png') }}" />
		 			<div class="form-group ">
						<div class="col-sm-6">
							<label for="" class="col-sm-3 control-label">标题：</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" {{$title}} name="title" required placeholder="产品使用说明名称" maxlength="255">
							</div>
						</div>
						<div class="col-sm-6">
							<label for="" class="col-sm-3 control-label">分类：</label>
							<div class="col-sm-6">
								<select class="form-control" name="category">
									@foreach ($category as $c)
									<option value="{{ $c->id }}">{{ $c->title }}</option>
									@endforeach
								</select>
							</div>
						</div>
					</div>
					<div class="form-group mt20">
						<div class="col-sm-4">
							<label for="cn" class="col-sm-3 control-label">CN文档：</label>
							<div class="col-sm-9">
								<input type="file" id="cn" class="upload-file" />
								<img class="file-upload-success" src="{{ asset('i/admin/uploading.gif') }}" alt="" />
								<input type="hidden" class="file-name" name="cn_pdf_name" value="" />
							</div>
						</div>
						<div class="col-sm-4">
							<label for="en" class="col-sm-3 control-label">EN文档：</label>
							<div class="col-sm-9">
								<input type="file" id="en" class="upload-file" />
								<img class="file-upload-success" src="{{ asset('i/admin/uploading.gif') }}" alt="" />
								<input type="hidden" class="file-name" name="en_pdf_name" value="" />

							</div>
						</div>
						<div class="col-sm-4">
							<label for="ja" class="col-sm-3 control-label">JA文档：</label>
							<div class="col-sm-9">
								<input type="file" id="ja" class="upload-file" />
								<img class="file-upload-success" src="{{ asset('i/admin/uploading.gif') }}" alt="" />
								<input type="hidden" class="file-name" name="ja_pdf_name" value="" />
							</div>
						</div>
						
						<div class="col-sm-2 pull-right mt30">
							<input type="submit" class="btn btn-success btn-block" value="提交" />
						</div>
						<div class="col-sm-4 pull-right mt30" style="color:red;">
							注意：请务必等待文件上传成功（即显示<img src="{{ asset('i/admin/success.png') }}" alt="" />），方可进行提交！
						</div>
					</div>
		 		</form>
		 	</div>
		</div>
		
		
		<div class="panel panel-primary">
			<div class="panel-heading">产品使用说明列表 <span style="color:red;">【注意：在编辑信息时，请务必等待文件上传成功（即显示<img src="{{ asset('i/admin/success.png') }}" alt="" />），方可确认提交！】</span></div>
		 	<div class="panel-body">
		 		<input type="hidden" id="url_edit" value="{{ url('admin/manual/ajax-save') }}" />
		 		<input type="hidden" id="url_del" value="{{ url('admin/manual/del') }}" />
				<table class="table table-bordered text-center ajax-table">
				    <tr>
				    	<td>名称</td>
				    	<td>分类</td>
				    	<td>PDF( CN )</td>
				    	<td>PDF( EN )</td>
				    	<td>PDF( JA )</td>
				    	<td>操作</td>
				    </tr>
				    @foreach ($data as $d)
				    <form id="ajax_table_form{{ $d->id }}">
				    	<input type="hidden" name="id" value="{{ $d->id }}" />
				    	<tr>
					    	<td>
					    		<input type="text" class="form-control table-input" required name="title" value="{{ $d->title }}" />
					    		<span class="title-span table-span">{{ $d->title }}</span>
					    	</td>
					    	<td>
					    		<select class="form-control table-select" disabled="disabled" name="category">
					    			@foreach ($category as $c)
									<option value="{{ $c->id }}" @if($d->category == $c->id) selected="selected" @endif>{{ $c->title }}</option>
									@endforeach
					    		</select>
					    	</td>
					    	<td>
					    		<input type="file" class="table-input upload-file" />
								<img class="file-upload-success" src="{{ asset('i/admin/uploading.gif') }}" alt="" />
								<input type="hidden" class="file-name" name="cn_pdf_name" value="{{ $d->cn_pdf_name }}" />
					    		<span class="table-span">{{ $d->cn_pdf_name }}</span>
					    	</td>
					    	<td>
					    		<input type="file" class="table-input upload-file" />
								<img class="file-upload-success" src="{{ asset('i/admin/uploading.gif') }}" alt="" />
								<input type="hidden" class="file-name" name="en_pdf_name" value="{{ $d->en_pdf_name }}" />
					    		<span class="table-span">{{ $d->en_pdf_name }}</span>
					    	</td>
					    	<td>
					    		<input type="file" class="table-input upload-file" />
								<img class="file-upload-success" src="{{ asset('i/admin/uploading.gif') }}" alt="" />
								<input type="hidden" class="file-name" name="ja_pdf_name" value="{{ $d->ja_pdf_name }}" />
					    		<span class="table-span">{{ $d->ja_pdf_name }}</span>
					    	</td>
					    	<td>
					    		<div class="btn btn-info confirm" data-id="{{ $d->id }}">确认</div>
					    		<div class="btn btn-warning cancel">取消</div>
					    		<div class="btn btn-info edit">编辑</div>
					    		<div class="btn btn-danger del" data-id="{{ $d->id }}">删除</div>
					    	</td>
					    </tr>
				    </form>
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
<script type="text/javascript" src="{{ asset('js/admin/upload.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/admin/ajax-table.js') }}"></script>
<script type="text/javascript">
	$(function(){
		$(".search").on("click", function() {
			$("#condition-form").submit();
		});
	})
	
</script>
@stop
