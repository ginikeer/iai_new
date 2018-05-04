<html>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<table class="table table-bordered text-center" border="1">
	    <tr>
	    	<td>ID</td>
	    	<td>会员ID（E-mail）</td>
	    	<td>姓名</td>
	    	<td>公司名</td>
	    	<td>部门</td>
	    	<td>电话</td>
	    	<td>状态</td>
	    </tr>
	    @foreach ($data as $d)
	    <tr>
	    	<td><span class="form-span">{{ $d->id }}</span></td>
	    	<td><span class="form-span">{{ $d->email }}</span></td>
	    	<td><span class="form-span">{{ $d->name }}</span></td>
	    	<td><span class="form-span">{{ $d->company }}</span></td>
	    	<td><span class="form-span">{{ $d->department }}</span></td>
	    	<td><span class="form-span">{{ $d->tel }}</span></td>
	    	<td><span class="form-span @if($d->status === USER_INFO_NOT_COMPLETED) font-danger @elseif($d->status === USER_INFO_HAS_COMPLETED) font-success @elseif($d->status === USER_IS_DELETED) font-warning @endif ">{{ $d->status_string }}</span></td>
	    </tr>
	    @endforeach
	</table>
</html>