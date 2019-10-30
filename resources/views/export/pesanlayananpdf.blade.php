<table class="table" style="border: 1px solid #ddd">
	<thead>
		<tr>
			<th>ID</th>
			<th>NAMA ALAT</th>
			<th>NAMA PESANAN</th>
			<th>NAMA PENDAFTAR PESANAN</th>
			<th>MODEL/WARNA</th>
			<th>BAHAN</th>
			<th>UKURAN</th>
			<th>GRAM</th>
			<!-- <th>CAST JASA</th>
			<th>BIAYA</th>
			<th>TANGGAL MULAI</th>
			<th>TANGGAL SELESAI</th> -->
			<th>UPLOAD GAMBAR</th>
		</tr>
	</thead>
	<tbody>
		@foreach($pesanlayanan as $pesan)
		<tr>
			<td>{{$pesan->id}}</td>
			<td>{{$pesan->nama_alat}}</td>
			<td>{{$pesan->nama_pesanan}}</td>
			<td>{{$pesan->nama_pendaftar_pesanan}}</td>
			<td>{{$pesan->model_warna}}</td>
			<td>{{$pesan->bahan}}</td>
			<td>{{$pesan->ukuran}}</td>
			<td>{{$pesan->gram}}</td>
			<!-- <td>{{$pesan->cast}}</td>
			<td>{{$pesan->biaya}}</td>
			<td>{{$pesan->tanggal_mulai}}</td>
			<td>{{$pesan->tanggal_selesai}}</td> -->
			<td>{{$pesan->upload_gambar}}</td>
		</tr>
		@endforeach
	</tbody>
</table>