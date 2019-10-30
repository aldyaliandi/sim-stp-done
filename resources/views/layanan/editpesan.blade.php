@extends(('layouts/compact_layanan'))
{{-- Page title --}}
@section('title')
    PESAN LAYANAN
    @parent
@stop
{{-- page level styles --}}
@section('header_styles')
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/chartist/css/chartist.min.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/circliful/css/jquery.circliful.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/pages/index.css')}}">
@stop
@section('content')

<header class="head">
        <div class="main-bar">
            <div class="row no-gutters">
                <div class="col-6">
                    <h4 class="mt-3">
                        <i class="fa fa-wpforms"></i>
                        Pesan Layanan
                    </h4>
                </div>
            </div>
        </div>
    </header>
    <div class="outer">
        <div class="inner bg-container">

    <!--  Pesan data terUbah -->
    <h1>Edit Data Pesan Pendaftar Layanan Teknologi</h1>
    @if(session('sukses'))
    <div class="alert alert-success" role="alert">
    {{session('sukses')}}
    </div>
    @endif
    <div class="row">
       <div class="col-lg-12">
        <form action="/pesanlayanan/{{$pesanlayanan->id}}/updatepesan" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group">
                <label for="exampleInputEmail1">ID</label>
                <input name="id" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ID Otomatis langsung isi Nama Alat!"  value="{{$pesanlayanan->id}}">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Harga Print (Rp 4.500)</label>
                <input name="nama_alat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Nama Alat" required="required"  value="{{$pesanlayanan->nama_alat}}">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Nama Pesanan</label>
                <input name="nama_pesanan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Nama Pesanan" required="required"  value="{{$pesanlayanan->nama_pesanan}}">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Nama Pesanan Pendaftar </label>
                <input name="nama_pendaftar_pesanan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Pesanan Pendaftar" required="required" value="{{$pesanlayanan->nama_pendaftar_pesanan}}">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Ongkir</label>
                <input name="id_pendaftarlayanan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Ongkir" required="required"  value="{{$pesanlayanan->id_pendaftarlayanan}}">
            </div>

            <div class="form-group">
                <label for="exampleFormControlSelect1">Pilih Model/Bahan Anda Sekarang</label>
                <select name="model_warna" class="form-control" id="exampleFormControlSelect1">
                <option value="Merah" @if($pesanlayanan->model_warna == 'Merah') selected @endif>Merah</option>
                <option value="Kuning" @if($pesanlayanan->model_warna == 'Kuning') selected @endif>Kuning</option>
                <option value="Hijau" @if($pesanlayanan->model_warna == 'Hijau') selected @endif>Hijau</option>
                <option value="Biru" @if($pesanlayanan->model_warna == 'Biru') selected @endif>Biru</option>
                <option value="Hitam" @if($pesanlayanan->model_warna == 'Hitam') selected @endif>Hitam</option>
                <option value="Abu-Abu" @if($pesanlayanan->model_warna == 'Abu-Abu') selected @endif>Abu-Abu</option>
                <option value="Ungu" @if($pesanlayanan->model_warna == 'Ungu') selected @endif>Ungu</option>
                <option value="Ping" @if($pesanlayanan->model_warna == 'Ping') selected @endif>Ping</option>
                <option value="Putih" @if($pesanlayanan->model_warna == 'Putih') selected @endif>Putih</option>
                <option value="Coklat" @if($pesanlayanan->model_warna == 'Coklat') selected @endif>Coklat</option>
                </select>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Qty</label>
                <input name="bahan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Qty" required="required" value="{{$pesanlayanan->bahan}}">
            </div>

            <div class="form-group">
                <label for="exampleFormControlSelect1">Status</label>
                <select name="ukuran" class="form-control" id="exampleFormControlSelect1">
                <option value="Dari CS : Tinggal dicetak">Dari CS : Tinggal dicetak</option>
                <option value="Dari Pencetak : Proses Pencetakan">Dari Pencetak : Proses Pencetakan</option>
                <option value="Dari Pencetak : Sudah Dicetak">Dari Pencetak : Sudah Dicetak</option>
                <option value="Dari CS       : Dikemas dan Dikirim">Dari CS       : Dikemas dan Dikirim</option>
                <option value="Dari CS       : Done">Dari CS       : Done</option>
                </select>
            </div>
            
            <div class="form-group">
                <label for="exampleInputEmail1">Gram</label>
                <input name="gram" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Gram" required="required" value="{{$pesanlayanan->gram}}">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Invoice</label>
                <input name="cast" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Ongkir + Invoice" required="required" value="{{$pesanlayanan->cast}}">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Total Biaya</label>
                <input name="biaya" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Cast dan Biaya Printing sesuai Gram !" required="required" value="{{$pesanlayanan->biaya}}">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Tanggal Mulai kapan ? (Y-M-D & Jam:Menit:Detik =ex:2019-08-22 08:30:00)</label>
                <input name="tanggal_mulai" type="datetime" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Mulai Proses Printing !" required="required" value="{{$pesanlayanan->tanggal_mulai}}">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Ingin Selesai Tanggal ? (Y-M-D & Jam:Menit:Detik =ex:2019-08-23 08:30:00)</label>
                <input name="tanggal_selesai" type="datetime" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Lama atau Sebentar Selesai Printing sesuai Berat atau Ukuran nya !" required="required" value="{{$pesanlayanan->tanggal_selesai}}">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Upload Gambar</label>
                <input name="upload_gambar" type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Silahkan Upload Gambar" required="required" value="{{$pesanlayanan->upload_gambar}}">
            </div>
            
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                </div>
            </div>
    </div>
    
@stop
@section('footer_scripts')
    <!--  plugin scripts -->
    <script type="text/javascript" src="{{asset('assets/vendors/countUp.js/js/countUp.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/flip/js/jquery.flip.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/pluginjs/jquery.sparkline.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/chartist/js/chartist.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/pluginjs/chartist-tooltip.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/swiper/js/swiper.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/circliful/js/jquery.circliful.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/flotchart/js/jquery.flot.js')}}" ></script>
    <script type="text/javascript" src="{{asset('assets/vendors/flotchart/js/jquery.flot.resize.js')}}"></script>
    <!--end of plugin scripts-->

    <script type="text/javascript" src="{{asset('assets/js/pages/index.js')}}"></script>
@stop
