@extends(('layouts/compact_layanan'))
{{-- Page title --}}
@section('title')
    PENDAFTAR LAYANAN
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
                        Pendaftar Layanan
                    </h4>
                </div>
            </div>
        </div>
    </header>
    <div class="outer">
        <div class="inner bg-container">

    <!--  Pesan data terUbah -->
    <h1>Edit Data Pendaftar Layanan Teknologi</h1>
    @if(session('sukses'))
    <div class="alert alert-success" role="alert">
    {{session('sukses')}}
    </div>
    @endif
    <div class="row">
       <div class="col-lg-12">
        <form action="/pendaftarlayanan/{{$pendaftarlayanan->id}}/update" method="POST">
            {{csrf_field()}}
            <div class="form-group">
                <label for="exampleInputEmail1">ID</label>
                <input name="id" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ID Otomatis" value="{{$pendaftarlayanan->id}}">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Nama Pendaftar</label>
                <input name="nama_pendaftar" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Nama Pendaftar" value="{{$pendaftarlayanan->nama_pendaftar}}">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Alamat</label>
                <input name="nip" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Alamat" value="{{$pendaftarlayanan->nip}}">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">No HP</label>
                <input name="nohp" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan No HP" value="{{$pendaftarlayanan->nohp}}">
            </div>

            <div class="form-group">
                <label for="exampleFormControlSelect1">Pilih Pekerjaan Anda Sekarang</label>
                <select name="pekerjaan" class="form-control" id="exampleFormControlSelect1">
                <option value="Guru" @if($pendaftarlayanan->pekerjaan == 'Guru') selected @endif>Guru</option>
                <option value="Dosen" @if($pendaftarlayanan->pekerjaan == 'Dosen') selected @endif>Dosen</option>
                <option value="Mahasiswa/i" @if($pendaftarlayanan->pekerjaan == 'Mahasiswa') selected @endif>Mahasiswa/i</option>
                <option value="Pelajar" @if($pendaftarlayanan->pekerjaan == 'Pelajar') selected @endif>Pelajar</option>
                <option value="Startup" @if($pendaftarlayanan->pekerjaan == 'Startup') selected @endif>Startup</option>
                <option value="Manajer Perusahaan" @if($pendaftarlayanan->pekerjaan == 'Manajer Perusahaan') selected @endif>Manajer Perusahaan</option>
                <option value="Wakil Manajer Perusahaan" @if($pendaftarlayanan->pekerjaan == 'Wakil Manajer Perusahaan') selected @endif>Wakil Manajer Perusahaan</option>
                <option value="Wiraswasta" @if($pendaftarlayanan->pekerjaan == 'Wirsaswasta') selected @endif>Wiraswasta</option>
                <option value="HRD" @if($pendaftarlayanan->pekerjaan == 'HRD') selected @endif> HRD</option>
                <option value="Security" @if($pendaftarlayanan->pekerjaan == 'Security') selected @endif>Security</option>
                </select>
            </div>
            <button type="submit" class="btn btn-warning">Update</button>
            </form>
            </div> 
            </div>     
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
