<html>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<table class="table table-bordered text-center" border="1">
	    <tr>
	    	<td>ID</td>
	    	<td>日期</td>
	    	<td>会员ID（E-mail）</td>
	    	<td>姓名</td>
	    	<td>下载内容</td>
	    </tr>
	    @foreach ($data as $d)
	    <tr>
	    	<td><span class="form-span">{{ $d->id }}</span></td>
	    	<td><span class="form-span">{{ $d->created_at }}</span></td>
	    	<td><span class="form-span">{{ $d->email }}</span></td>
	    	<td><span class="form-span">{{ $d->name }}</span></td>
	    	<td><span class="form-span">{{ $d->content }}</span></td>
	    </tr>
	    @endforeach
	</table>
</html>