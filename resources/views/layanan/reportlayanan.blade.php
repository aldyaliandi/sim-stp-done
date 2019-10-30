@extends(('layouts/compact_layanan'))
{{-- Page title --}}
@section('title')
    REPORT LAYANAN
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
                        <i class="fa fa-book"></i>
                         Report Layanan
                    </h4>
                </div>
            </div>
        </div>
    </header>
    <div class="outer">
        <div class="inner bg-container">

            <center><h1><i class="fa fa-book"></i> REPORT LAYANAN TEKNOLOGI <i class="fa fa-book"></i></h1></center>

            <center><h1>  <i class="fa fa-users"></i> => <i class="fa fa-pencil"></i> => <i class="fa fa-braille"></i></h1></center>

        <!-- Laporan pendaftar-->
         <center><a href="/pendaftarlayanan/exportexcelpendaftar" class="btn btn-primary"><i class="fa fa-file-excel-o"></i> Export Excel Pendaftar</a>
                <a href="/pendaftarlayanan/exportpdfpendaftar" class="btn btn-primary"><i class="fa fa-file-pdf-o"></i> Export PDF Pendaftar</a>

        <!-- Laporan pesanan-->
        <a href="/pesanlayanan/export" class="btn btn-primary"><i class="fa fa-file-excel-o"></i> Export Excel Pesanan</a>
                <a href="/pesanlayanan/exportpdf" class="btn btn-primary"><i class="fa fa-file-pdf-o"></i> Export PDF Pesanan </a>
        
        <!-- laporan transaksi-->
        <a href="/transaksilayanan/exportexcel" class="btn btn-primary"><i class="fa fa-file-excel-o"></i> Export Excel Transaksi </a>
                <a href="/transaksilayanan/exportpdftransaksi" class="btn btn-primary"><i class="fa fa-file-pdf-o"></i> Export PDF Transaksi</a>

        <!-- laporan Akun-->
        <a href="/pengaturan/exportexcelpengaturan" class="btn btn-primary"><i class="fa fa-file-excel-o"></i> Export Excel Akun</a>
        <a href="/pengaturan/exportpdfpengaturan" class="btn btn-primary"><i class="fa fa-file-pdf-o"></i> Export PDF Akun</a></center>


                
           
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
