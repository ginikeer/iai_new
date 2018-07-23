@section('style')

@stop

@extends('master/admin')
@section('content')
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">产品信息</div>
		 	<div class="panel-body">
		 		@if(isset($status))<div class="alert alert-success" role="alert">{{ $status }}</div> @endif
		 		@if(isset($error)) <div class="alert alert-danger" role="alert">{{ $error }}</div> @endif
				<form class="form-horizontal" id="product-form" method="post" action="{{ url('admin/product/save') }}" role="form">
					<input type="hidden" name="_token" value="{{ csrf_token() }}" />
					<input type="hidden" id="url_file_upload" value="{{ url('admin/product/upload') }}" />
					<input type="hidden" name="id" value="{{ $p->id or '' }}" />
					<input type="hidden" name="manual_search" value="{{ url('admin/product/manual-list-by-ajax') }}" />
					<div class="form-group">
						<label for="lname" class="col-sm-3 control-label">标题：</label>
						<div class="col-sm-6">
							<input type="text" class="form-control" id="title" name="title" required maxlength="50" value="{{ $p->title or '' }}">
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-sm-3 control-label">简介：</label>
						<div class="col-sm-6">
							<textarea class="form-control" rows="6" id="description" name="description" required>@if(isset($p->description)){{ Helper::brEscape($p->description) }}@endif</textarea>
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-sm-3 control-label">分类：</label>
						<div class="col-sm-6">
							<select class="form-control" name="category" id="category">
								@foreach ( $category as $c )
								<option value="{{ $c->id }}" @if(isset($p->category) && $p->category == $c->id) selected="selected" @endif>{{ $c->title }}</option>
								@endforeach
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-sm-3 control-label">是否为新产品：</label>
						<div class="col-sm-2">
							<label class="radio-inline">
							    <input type="radio" name="is_new" value="0" @if(isset($p->is_new) && $p->is_new == 0) checked @elseif(!isset($p->is_new)) checked @endif>
							    <span>否</span>
							</label>
						</div>
						<div class="col-sm-2">
							<label class="radio-inline">
							    <input type="radio" name="is_new" value="1" @if(isset($p->is_new) && $p->is_new == 1) checked @endif>
							    <span>是</span>
							</label>
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-sm-3 control-label">列表页缩略图：</label>
						<div class="col-sm-3 ">
							<input type="file" class="upload-file" />
							<input type="hidden" class="file-name" id="cover_image_name" name="cover_image_name" value="{{ $p->cover_image_name or '' }}" />
							<img class="img-preview mt20" src="@if(isset($p->cover_image_name)) {{ PRODUCT_IMG_PATH . $p->cover_image_name }} @endif" alt="" />
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-sm-3 control-label">详细页图片：</label>
						<div class="col-sm-3 ">
							<input type="file" class="upload-file" />
							<input type="hidden" class="file-name" id="image_name" name="image_name" value="{{ $p->image_name or '' }}" />
							<img class="img-preview mt20" src="@if(isset($p->image_name)) {{ PRODUCT_IMG_PATH . $p->image_name }} @endif" alt="" />
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-sm-3 control-label">产品介绍：</label>
						<div class="col-sm-6">
							<textarea class="form-control" rows="6" id="content" name="content" required>@if(isset($p->content)){{ Helper::brEscape($p->content) }}@endif</textarea>
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-sm-3 control-label">产品目录：</label>
						<div class="col-sm-3 ">
							<input type="file" class="upload-file" />
							<img class="file-upload-success" src="{{ asset('i/admin/success.png') }}" alt="" />
							<input type="hidden" class="file-name" id="pdf_name" name="pdf_name" value="{{ $p->pdf_name or '' }}" />
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-sm-3 control-label">使用说明：</label>
						<div class="col-sm-6">
							<div class="multiple-select">
		                        <div class="select-input">{{ $selected_manual['titles'] }}</div>
		                        <ul class="select-list">
		                        	<li class="first"><input type="text" class="manual_search" placeholder="请输入搜索关键字"/></li>
		                        	@foreach ( $manual as $m )
	                        		<li>
                        				<input name="manual_select" @if(in_array($m->id, $selected_manual['ids'])) checked @endif data-str="{{ $m->title }}" type="checkbox" value="{{ $m->id }}">
                        				<span>{{ $m->title }}</span>
	                        		</li>
	                        		@endforeach
	                        		<li class="last">
	                        			<div data-input-name="manual_select" class="btn btn-success">确定</div>
	                        			<input type="hidden" name="manual_ids" value="{{ implode(',', $selected_manual['ids']) }}" />
	                        		</li>
	                        	</ul>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-sm-3 control-label">相关案例：</label>
						<div class="col-sm-2">
							<select class="form-control" id="case-category">
								@foreach ($category as $c)
								<option value="{{ $c->id }}">{{ $c->title }}</option>
								@endforeach
							</select>
						</div>
						<div class="col-sm-4">
							@for ($i = 0; $i < count($category); $i++)
							<div class="multiple-select related-case related-case-{{ $category[$i]->id }}" @if($i != 0) style="display: none;" @endif>
		                        <div class="select-input">{{ $related_case["cid_" . $category[$i]->id]['titles'] }}</div>
		                        <ul class="select-list">
		                        	@foreach ( $cases["cid_" . $category[$i]->id] as $r )
	                        		<li>
                        				<input name="case_select_{{ $category[$i]->id }}" data-str="{{ $r->title }}" type="checkbox" value="{{ $r->id }}"
                        					@if(in_array($r->id, $related_case["cid_" . $category[$i]->id]['ids'])) checked @endif >
                        				<span>{{ $r->title }}</span>
	                        		</li>
	                        		@endforeach
	                        		<li>
	                        			<div data-input-name="case_select_{{ $category[$i]->id }}" class="btn btn-success">确定</div>
	                        			<input type="hidden" name="case_ids[]" value="{{ implode(',', $related_case['cid_' . $category[$i]->id]['ids']) }}" />
	                        		</li>
	                        	</ul>
							</div>
							@endfor
						</div>
					</div>
					<!--<div class="form-group">
						<label for="" class="col-sm-3 control-label">相关产品：</label>
						<div class="col-sm-2">
							<select class="form-control" id="product-category">
								@foreach ($category as $c)
								<option value="{{ $c->id }}">{{ $c->title }}</option>
								@endforeach
							</select>
						</div>
						<div class="col-sm-4">
							@for ($i = 0; $i < count($category); $i++)
							<div class="multiple-select related-product related-product-{{ $category[$i]->id }}" @if($i != 0) style="display: none;" @endif>
		                        <div class="select-input">{{ $related_product["cid_" . $category[$i]->id]['titles'] }}</div>
		                        <ul class="select-list">
		                        	@foreach ( $related["cid_" . $category[$i]->id] as $r )
	                        		<li>
                        				<input name="related_select_{{ $category[$i]->id }}" data-str="{{ $r->title }}" type="checkbox" value="{{ $r->id }}"
                        					@if(in_array($r->id, $related_product["cid_" . $category[$i]->id]['ids'])) checked @endif >
                        				<span>{{ $r->title }}</span>
	                        		</li>
	                        		@endforeach
	                        		<li>
	                        			<div data-input-name="related_select_{{ $category[$i]->id }}" class="btn btn-success">确定</div>
	                        			<input type="hidden" name="related_ids[]" value="{{ implode(',', $related_product['cid_' . $category[$i]->id]['ids']) }}" />
	                        		</li>
	                        	</ul>
							</div>
							@endfor
						</div>
					</div>-->
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
