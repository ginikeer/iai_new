@section('title') IAI－艾卫艾商贸(上海)有限公司－ ｜ 退会 @stop

@section('style')
<link rel="stylesheet" href="{{ asset('css/client/login.css') }}"/>
@stop

@extends('master/client')
@section('content')
	

<div class="wrap service_warp" id="login_main">
	<div class="row crumb">
		<div class="container">
			<ul class="breadcrumb">
				<li>
					<a href="{{ url('/') }}">首页</a>
				</li>
				<li>退会</li>
			</ul>
		</div>
	</div>
	
	<div class="container">
		<div class="color-white">
			<h1>退会</h1>
			<hr>
            <form id="secession_form" method="post" action="{{ url('member/secession') }}">
				<input type="hidden" name="_token" value="{{ csrf_token() }}" />
				<div class="row mypage-row">
					<div class="col-lg-8 col-lg-offset-2">
						<p>如果退会，您将不能登录本网站以获取更新资料。</p>
						<div class="list-lined">
							<div class="list-item">
								<div class="list-item-header">退会理由</div>
								<div class="list-item-body">
									<textarea name="secession" id="secession"></textarea>
								</div>
							</div>	
						</div>
					</div>
				</div>
				<div class="row mypage-btn-row">
					<div class="login-btn">
						<button type="submit" class="btn btn-red btn-mypage" onClick="javascript:if(confirm('您确定要退会吗?')) return true; else return false;">退会</button>
						<a href="{{ url('/member/info') }}" class="btn btn-mypage btn-gray">返回</a>
					</div>
				</div>
            </form>
		</div>
	</div>
	
</div>



@endsection

@section('script')
<script type="text/javascript" src="{{ asset('js/client/secession.js') }}"></script>
@stop