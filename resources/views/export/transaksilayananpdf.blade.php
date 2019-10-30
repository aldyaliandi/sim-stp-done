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
			<th>CAST JASA</th>
			<th>BIAYA</th>
			<!-- <th>TANGGAL MULAI</th> -->
			<th>TANGGAL SELESAI</th>
			<th>UPLOAD GAMBAR</th>
		</tr>
	</thead>
	<tbody>
		@foreach($pesanlayanan as $transaksi)
		<tr>
			<td>{{$transaksi->id}}</td>
			<td>{{$transaksi->nama_alat}}</td>
			<td>{{$transaksi->nama_pesanan}}</td>
			<td>{{$transaksi->nama_pendaftar_pesanan}}</td>
			<td>{{$transaksi->model_warna}}</td>
			<td>{{$transaksi->bahan}}</td>
			<td>{{$transaksi->ukuran}}</td>
			<td>{{$transaksi->gram}}</td>
			<td>{{$transaksi->cast}}</td>
			<td>{{$transaksi->biaya}}</td>
			<!-- <td>{{$transaksi->tanggal_mulai}}</td> -->
			<td>{{$transaksi->tanggal_selesai}}</td>
			<td>{{$transaksi->upload_gambar}}</td>
		</tr>
		@endforeach
	</tbody>
</table>