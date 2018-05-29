@section('style')

@stop

@extends('master/admin')
@section('content')
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">新闻信息</div>
		 	<div class="panel-body">
		 		@if(isset($status))<div class="alert alert-success" role="alert">{{ $status }}</div> @endif
		 		@if(isset($error)) <div class="alert alert-danger" role="alert">{{ $error }}</div> @endif
				<form class="form-horizontal" id="news-form" method="post" action="{{ url('admin/news/save') }}" role="form">
					<input type="hidden" name="_token" value="{{ csrf_token() }}" />
					<input type="hidden" id="url_file_upload" value="{{ url('admin/news/upload') }}" />
					<input type="hidden" name="id" value="{{ $news->id or '' }}" />
					<div class="form-group">
						<label for="title" class="col-sm-3 control-label">标题：</label>
						<div class="col-sm-6">
							<input type="text" class="form-control" id="title" name="title" required maxlength="255" value="{{ $news->title or '' }}">
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-sm-3 control-label">列表页缩略图：</label>
						<div class="col-sm-3 ">
							<input type="file" class="upload-file" />
							<input type="hidden" class="file-name" id="cover_image_name" name="cover_image_name" value="{{ $news->cover_image_name or '' }}" />
							<img class="img-preview mt20" src="@if(isset($news->cover_image_name)) {{ NEWS_IMG_PATH . $news->cover_image_name }} @endif" alt="" />
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-sm-3 control-label">摘要：</label>
						<div class="col-sm-6">
							<textarea class="form-control" name="abstract" >{{ $news->abstract or '' }}</textarea>
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-sm-3 control-label">分类：</label>
						<div class="col-sm-6">
							<select class="form-control" name="category" id="category">
								@foreach ( $category as $c )
								<option value="{{ $c->id }}" @if(isset($news->category) && $news->category == $c->id) selected="selected" @endif>{{ $c->title }}</option>
								@endforeach
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-sm-3 control-label">内容：</label>
						<div class="col-sm-9">
							 <script id="editor" name="content" type="text/plain">{!! $news->content or '' !!}</script>
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
<script type="text/javascript" src="{{ asset('js/admin/upload.js') }}"></script>
<script type="text/javascript" src="{{ asset('ueditor/ueditor.config.js') }}"></script>
<script type="text/javascript" src="{{ asset('ueditor/ueditor.all.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/admin/news.js') }}"></script>
@stop