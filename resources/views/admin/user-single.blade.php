@section('style')

@stop

@extends('master/admin')
@section('content')
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">会员信息</div>
		 	<div class="panel-body">
		 		@if($errors->first('email') != '')<div class="alert alert-danger" role="alert">{{ $errors->first('email') }}</div>@endif
				<form class="form-horizontal" id="user-form" method="post" action="{{ url('admin/user/save') }}" role="form">
					<input type="hidden" name="_token" value="{{ csrf_token() }}" />
					<input type="hidden" name="id" value="{{ $user->id or '' }}" />
					<div class="form-group">
						<label for="" class="col-sm-3 control-label">会员ID（E-mail）：</label>
						<div class="col-sm-6">
							<input type="text" class="form-control" id="email" name="email" required maxlength="256" value="{{ $user->email or '' }}">
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-sm-3 control-label">密码：</label>
						<div class="col-sm-6">
							<input type="text" class="form-control" id="pwd" name="pwd" required maxlength="32" value="{{ $user->pwd or '' }}">
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-sm-3 control-label">姓名：</label>
						<div class="col-sm-6">
							<input type="text" class="form-control" id="name" name="name" required maxlength="64" value="{{ $user->name or '' }}">
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-sm-3 control-label">[ 公司名 ]：</label>
						<div class="col-sm-6">
							<input type="text" class="form-control" id="company" name="company" value="{{ $user->company or '' }}">
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-sm-3 control-label">[ 部门 ]：</label>
						<div class="col-sm-6">
							<input type="text" class="form-control" id="department" name="department" value="{{ $user->department or '' }}">
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-sm-3 control-label">[ 地址 ]：</label>
						<div class="col-sm-3">
							<select id="prov" name="prov" class="form-control">
								<option value="">所在省/市</option>
								@foreach ($prov as $p)
								<option value="{{ $p }}" @if(isset($user->prov) && $user->prov == $p) selected="selected" @endif>{{ $p }}</option>
								@endforeach
							</select>
						</div>
						<div class="col-sm-3">
							<input type="text" class="form-control" placeholder="市/区" id="city" name="city"  maxlength="32" value="{{ $user->city or '' }}">
						</div>
						<div class="col-sm-6 col-sm-offset-3 mt10">
							<input type="text" class="form-control" placeholder="地址" id="addr" name="addr" value="{{ $user->addr or '' }}">
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-sm-3 control-label">[ 邮编 ]：</label>
						<div class="col-sm-6">
							<input type="text" class="form-control" id="zipcode" name="zipcode" maxlength="32" value="{{ $user->zipcode or '' }}">
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-sm-3 control-label">TEL：</label>
						<div class="col-sm-6">
							<input type="text" class="form-control" id="tel" name="tel" required maxlength="24" value="{{ $user->tel or '' }}">
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-sm-3 control-label">[ 备注 ]：</label>
						<div class="col-sm-6">
							<textarea class="form-control" id="memo" name="memo" >{{ $user->memo or '' }}</textarea>
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-sm-3 control-label">[ 退会理由 ]：</label>
						<div class="col-sm-6">
							<input type="text" class="form-control" id="delete_reason" name="delete_reason" value="{{ $user->delete_reason or '' }}">
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-sm-3 control-label">状态：</label>
						<div class="col-sm-6">
							<select id="status" name="status" class="form-control">
		 						<option @if(isset($user->status) && $user->status == USER_INFO_NOT_COMPLETED) selected="selected" @endif value="{{ USER_INFO_NOT_COMPLETED }}">{{ USER_INFO_NOT_COMPLETED_STRING }}</option>
		 						<option @if(isset($user->status) && $user->status == USER_INFO_HAS_COMPLETED) selected="selected" @endif value="{{ USER_INFO_HAS_COMPLETED }}">{{ USER_INFO_HAS_COMPLETED_STRING }}</option>
		 						<option @if(isset($user->status) && $user->status == USER_IS_DELETED) selected="selected" @endif value="{{ USER_IS_DELETED }}">{{ USER_IS_DELETED_STRING }}</option>
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
<script type="text/javascript" src="{{ asset('js/admin/user.js') }}"></script>
@stop