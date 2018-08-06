@section('style')

@stop

@extends('master/admin')
@section('content')
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">产品案例信息</div>
		 	<div class="panel-body">
		 		@if(isset($status))<div class="alert alert-success" role="alert">{{ $status }}</div> @endif
		 		@if(isset($error)) <div class="alert alert-danger" role="alert">{{ $error }}</div> @endif
				<form class="form-horizontal" id="case-form" method="post" action="{{ url('admin/case/save') }}" role="form">
					<input type="hidden" name="_token" value="{{ csrf_token() }}" />
					<input type="hidden" id="url_file_upload" value="{{ url('admin/case/upload') }}" />
					<input type="hidden" name="id" value="{{ $case->id or '' }}" />
					<input type="hidden" id="upload_success_url" value="{{ asset('i/admin/success.png') }}" />
					<div class="form-group">
						<label for="lname" class="col-sm-3 control-label">标题：</label>
						<div class="col-sm-6">
							<input type="text" class="form-control" id="title" name="title" required maxlength="255" value="{{ $case->title or '' }}">
						</div>
					</div>

					<!-- <div class="form-group">
						<label for="" class="col-sm-3 control-label">分类：</label>
						<div class="col-sm-6">
							<select class="form-control" name="category" id="category">
								@foreach ( $category as $c )
								<option value="{{ $c->id }}" @if(isset($case->category) && $case->category == $c->id) selected="selected" @endif>{{ $c->title }}</option>
								@endforeach
							</select>
						</div>
					</div> -->
					<div class="form-group">
						<label for="" class="col-sm-3 control-label">简介：</label>
						<div class="col-sm-6">
							<textarea class="form-control" rows="6" id="description" name="description" required>@if(isset($case->description)){{ Helper::brEscape($case->description) }}@endif</textarea>
						</div>
					</div>
					
					<div class="form-group">
						<label for="" class="col-sm-3 control-label">标签：</label>
						<div class="col-sm-3">
							<div class="multiple-select">
		                        <div class="select-input">{{ $selected_tag['str_titles'] }}</div>
		                        <ul class="select-list">
		                        	@foreach ( $tag as $t )
	                        		<li>
                        				<input name="tag_select" @if(in_array($t->id, $selected_tag['arr_ids'])) checked @endif data-str="{{ $t->title }}" type="checkbox" value="{{ $t->id }}">
                        				<span>{{ $t->title }}</span>
	                        		</li>
	                        		@endforeach
	                        		<li>
	                        			<div data-input-name="tag_select" class="btn btn-success">确定</div>
	                        			<input type="hidden" name="tag_ids" value="{{ $case->tag_ids or '' }}" />
	                        		</li>
	                        	</ul>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-sm-3 control-label">列表页缩略图：</label>
						<div class="col-sm-3 ">
							<input type="file" class="upload-file" />
							<input type="hidden" class="file-name" id="cover_image_name" name="cover_image_name" value="{{ $case->cover_image_name or '' }}" />
							<img class="img-preview mt20" src="@if(isset($case->cover_image_name)) {{ CASE_IMG_PATH . $case->cover_image_name }} @endif" alt="" />
						</div>
					</div>
					<!-- <div class="form-group">
						<label for="" class="col-sm-3 control-label">logo：</label>
						<div class="col-sm-3 ">
							<select class="form-control" name="logo" id="logo">
								@foreach ($logo as $l)
								<option value="{{ $l->id }}">{{ $l->title }}</option>
								@endforeach
							</select>
						</div>
					</div> -->
					<div class="form-group">
						<label for="" class="col-sm-3 control-label">子标题：</label>
						<div class="col-sm-6">
							<textarea class="form-control" rows="6" id="sub_title" name="sub_title" required>@if(isset($case->sub_title)){{ Helper::brEscape($case->sub_title) }}@endif</textarea>
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-sm-3 control-label">视频：</label>
						<div class="col-sm-3 ">
							<input type="file" class="upload-file" data-action="{{ url('admin/case/video-upload') }}" />
							<img class="file-upload-success" src="{{ asset('i/admin/uploading.gif') }}" alt="" />
							<input type="hidden" class="file-name" id="video_name" name="video_name" value="{{ $case->video_name or '' }}" />
						</div>
						@if(isset($case->video_name))
						<div class="col-sm-12 ">
							<div class="col-sm-offset-3">
								<video class="col-sm-6" src="{{ CASE_VIDEO_PATH . $case->video_name }}" controls="controls"></video>
							</div>
						</div>
						@endif
					</div>
					<div class="form-group">
						<label for="" class="col-sm-3 control-label">图标：</label>
						<div class="col-sm-3">
							<div class="multiple-select">
		                        <div class="select-input">{{ $selected_icon['str_titles'] }}</div>
		                        <ul class="select-list">
		                        	@foreach ( $icon as $i )
	                        		<li>
                        				<input name="icon_select" @if(in_array($i->id, $selected_icon['arr_ids'])) checked @endif data-str="{{ $i->title }}" type="checkbox" value="{{ $i->id }}">
                        				<span>{{ $i->title }}</span>
	                        		</li>
	                        		@endforeach
	                        		<li>
	                        			<div data-input-name="icon_select" class="btn btn-success">确定</div>
	                        			<input type="hidden" name="icon_ids" value="{{ $case->icon_ids or '' }}" />
	                        		</li>
	                        	</ul>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-sm-3 control-label">详细内容：</label>
						<div class="col-sm-9">
							 <script id="editor" name="content" type="text/plain">{!! $case->content or '' !!}</script>
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
<script type="text/javascript" src="{{ asset('js/admin/case.js') }}"></script>
@stop