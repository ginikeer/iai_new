<html>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<table class="table table-bordered text-center" border="1">
	    <tr>
	    	<td>公司</td>
	    	<td>部门</td>
	    	<td>姓名</td>
	    	<td>地址</td>
	    	<td>电话</td>
	    	<td>申请日期</td>
	    </tr>
	    @foreach ($data as $d)
	    <tr>
	    	<td><span class="form-span">{{ $d->company }}</span></td>
	    	<td><span class="form-span">{{ $d->department }}</span></td>
	    	<td><span class="form-span">{{ $d->name }}</span></td>
	    	<td><span class="form-span">{{ $d->address }}</span></td>
	    	<td><span class="form-span">{{ $d->tel }}</span></td>
	    	<td><span class="form-span">{{ $d->created_at }}</span></td>
	    </tr>
	    @endforeach
	</table>
</html>