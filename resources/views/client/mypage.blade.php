@section('title') IAI－艾卫艾商贸(上海)有限公司－ ｜ 我的页面 @stop

@section('style')
<link rel="stylesheet" href="{{ asset('css/client/login.css') }}"/>
@stop

@extends('master/client')
@section('content')
	

<div class="wrap service_warp">
	<div class="row crumb">
		<div class="container">
			<ul class="breadcrumb">
				<li>
					<a href="{{ url('/') }}">首页</a>
				</li>
				<li>我的页面</li>
			</ul>
		</div>
	</div>
	<div class="container">
		<div class="color-white">
			<h1>我的页面</h1>
			<hr>
            <form name="inputForm" method="post" action="{{ url('member/update') }}">
				<input type="hidden" name="_token" value="{{ csrf_token() }}" />
				<div class="row mypage-row">
					<div class="col-lg-8 col-lg-offset-2">
						<div class="list-lined">
							<div class="list-item">
								<div class="list-item-header">会员ID（E-mail）</div>
								<div class="list-item-body">
									<input type="email" value="{{ $data->email }}" readonly required>
								</div>
							</div>
							<div class="list-item">
								<div class="list-item-header">密码</div>
								<div class="list-item-body">
									<div class="row">
										<div class="col-lg-6">
											{{ $data->pwd }}
										</div>
										<div class="col-lg-6">
											<a href="{{ url('/member/password') }}" class="btn btn-red btn-xs last-child">变更密码</a>
										</div>
									</div>
								</div>
							</div>
							<div class="list-item">
								<div class="list-item-header">公司名</div>
								<div class="list-item-body">
									<input type="text" name="company" value="{{ $data->company }}">
								</div>
							</div>
							<div class="list-item">
								<div class="list-item-header">部门</div>
								<div class="list-item-body">
									<input type="text" name="department" value="{{ $data->department }}">
								</div>
							</div>
							<div class="list-item">
								<div class="list-item-header">姓名</div>
								<div class="list-item-body">
									<div class="row">
										<div class="col-lg-6">
											<input type="text" name="name" value="{{ $data->name }}" required>
										</div>
									</div>
								</div>
							</div>
							<div class="list-item">
								<div class="list-item-header">地址-所在省市</div>
								<div class="list-item-body">
									<div class="row">
										<div class="col-lg-6">
											<select name="prov">
												<option value="">所在省/市</option>
												@foreach ($prov as $p)
												<option value="{{ $p }}" @if(isset($data->prov) && $data->prov == $p) selected="selected" @endif>{{ $p }}</option>
												@endforeach
											</select>
										</div>
									</div>
								</div>
							</div>
							<div class="list-item">
								<div class="list-item-header">城市</div>
								<div class="list-item-body">
									<input type="text" name="city" value="{{ $data->city }}">
								</div>
							</div>
							<div class="list-item">
								<div class="list-item-header">地址</div>
								<div class="list-item-body">
									<input type="text" name="addr" value="{{ $data->addr }}">
								</div>
							</div>
							<div class="list-item">
								<div class="list-item-header">TEL</div>
								<div class="list-item-body">
									<div class="row">
										<div class="col-lg-6">
											<input type="tel" name="tel" value="{{ $data->tel }}" required>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row mypage-btn-row">
					<div class="col-lg-4 col-lg-offset-2">
						<p class="text-center login-btn">
							<button type="submit" class="btn btn-red btn-mypage" onClick="javascript:if(confirm('确定保存信息吗?')) return true; else return false;">保存更改</button>
						</p>
					</div>
					<div class="col-lg-4">
						<p class="text-center login-btn">
							<a href="{{ url('member/secession') }}" class="btn btn-mypage btn-gray">退会</a>
						</p>
					</div>
				</div>
            </form>
		</div>
		
	</div>
</div>



@endsection

@section('script')
@stop