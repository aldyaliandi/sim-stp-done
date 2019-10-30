<table class="table" style="border: 1px solid #ddd">
	<thead>
		<tr>
			<th>ID</th>
			<th>NAMA AKUN</th>
			<th>Email</th>
			<th>Password</th>
		</tr>
	</thead>
	<tbody>
		@foreach($pengaturan as $pengaturan)
		<tr>
			<td>{{$pengaturan->id}}</td>
			<td>{{$pengaturan->name}}</td>
			<td>{{$pengaturan->email}}</td>
			<td>{{$pengaturan->password}}</td>
		</tr>
		@endforeach
	</tbody>
</table>