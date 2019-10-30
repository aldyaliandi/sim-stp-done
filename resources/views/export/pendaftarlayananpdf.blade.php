<table class="table" style="border: 1px solid #ddd">
	<thead>
		<tr>
			<th>ID</th>
			<th>NAMA PENDAFTAR</th>
			<th>NIP/NIM/NIK</th>
			<th>NO HP</th>
			<th>PEKERJAAN</th>
		</tr>
	</thead>
	<tbody>
		@foreach($pendaftarlayanan as $pendaftar)
		<tr>
			<td>{{$pendaftar->id}}</td>
			<td>{{$pendaftar->nama_pendaftar}}</td>
			<td>{{$pendaftar->nip}}</td>
			<td>{{$pendaftar->nohp}}</td>
			<td>{{$pendaftar->pekerjaan}}</td>
		</tr>
		@endforeach
	</tbody>
</table>