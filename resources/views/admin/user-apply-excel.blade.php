<html>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<table class="table table-bordered text-center" border="1">
	    <tr>
	    	<td>ID</td>
	    	<td>日期</td>
	    	<td>会员ID（E-mail）</td>
	    	<td>姓名</td>
	    	<td>申请目录</td>
	    	<td>状态</td>
	    	<td>问题1</td>
	    	<td>问题2</td>
	    	<td>问题3</td>
	    	<td>问题4</td>
	    	<td>问题5</td>
	    	<td>问题6</td>
	    	<td>问题7</td>
	    </tr>
	    @foreach ($data as $d)
	    <tr>
	    	<td><span class="form-span">{{ $d->id }}</span></td>
	    	<td><span class="form-span">{{ $d->created_at }}</span></td>
	    	<td><span class="form-span">{{ $d->email }}</span></td>
	    	<td><span class="form-span">{{ $d->name }}</span></td>
	    	<td><span class="form-span">{{ $d->content }}</span></td>
	    	<td><span class="form-span">{{ $d->state_string }}</span></td>
	    	<td><span class="form-span">{{ !empty($d->q1) ? $d->q1 : '' }}</span></td>
	    	<td><span class="form-span">{{ !empty($d->q2) ? $d->q2 : '' }}</span></td>
	    	<td><span class="form-span">{{ !empty($d->q3) ? $d->q3 : '' }}</span></td>
	    	<td><span class="form-span">{{ !empty($d->q4) ? $d->q4 : '' }}</span></td>
	    	<td><span class="form-span">{{ !empty($d->q5) ? $d->q5 : '' }}</span></td>
	    	<td><span class="form-span">{{ !empty($d->q6) ? $d->q6 : '' }}</span></td>
	    	<td><span class="form-span">{{ !empty($d->q7) ? $d->q7 : '' }}</span></td>
	    </tr>
	    @endforeach
	</table>
</html>