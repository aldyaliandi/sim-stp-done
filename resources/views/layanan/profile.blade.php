@extends(('layouts/compact_layanan'))
{{-- Page title --}}
@section('title')
        PROFILE LAYANAN
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
                        Profile Layanan
                    </h4>
                </div>
            </div>
        </div>
    </header>

<div class="main">

            <!-- MAIN CONTENT -->
            <div class="main-content">
                <div class="container-fluid">
<div class="panel panel-profile">
    <div class="clearfix">
        <!-- LEFT COLUMN -->
        <div class="profile-left">

            <!-- PROFILE HEADER -->
            <div class="profile-header">
                <div class="overlay"></div>
                <div class="profile-main">
                    <center><img src="{{$pesanlayanan->getupload_gambar()}}" class="img-circle" alt="Avatar"><center>
                    <center><h3 class="name">{{$pesanlayanan->nama_pesanan}}</h3><center>
                    <center><span class="online-status status-available">Available</span><center>
                </div>
                </div>
            </div>
            <!-- END PROFILE HEADER -->

            <!-- PROFILE DETAIL -->
            <div class="profile-detail">
                <div class="profile-info">
                    <center><h4 class="heading">Data Pesanan</h4></center>
                    <ul class="list-unstyled list-justify">
                        <center><li>Nama Pesanan_________:<span>{{$pesanlayanan->nama_pesanan}}</span></li>
                        <li>Nama Pendaftar Pesanan :<span>{{$pesanlayanan->nama_pendaftar_pesanan}}</span></li>
                        <li>Gram_________________:<span>{{$pesanlayanan->gram}}</span></li>
                        <li>Warna________________:<span>{{$pesanlayanan->model_warna}}</span></li>
                        <li>Ukuran_______________:<span>{{$pesanlayanan->ukuran}}</span></li>
                        <li>Bahan________________: <span>{{$pesanlayanan->bahan}}</span></li>
                        <li>cast_________________: <span>{{$pesanlayanan->cast}}</span></li>
                        <li>Total Biaya__________: <span>{{$pesanlayanan->biaya}}</span></li>
                        <li>Website <span><a href="https://www.themeineed.com">btp.or.id</span></li> </center>
                    </ul>
                </div>
               
                <div class="text-center"><a href="/pesanlayanan/{{$pesanlayanan->id}}/editpesan" class="btn btn-warning"><i class="fa fa-edit"></i> Edit Profile</a></div>
            </div>
            <!-- END PROFILE DETAIL -->
        </div>
        <!-- END LEFT COLUMN -->

        <!-- RIGHT COLUMN -->
       
        <!-- END RIGHT COLUMN -->

        <!-- Grafik di Off dulu -->
         <!-- <div class="row m-t-35">
                <div class="col">
                    <div class="card">
                        <div class="card-header bg-blue">
                            <span class="card-title">Grafik Layanan Teknologi</span>
                            <div class="dropdown chart_drop float-right">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-ellipsis-v"></i>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="/pendaftarlayanan">Pendaftar</a></li>
                                    <li><a href="#">Pesanan</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Transaksi</a></li>
                                </ul>
                                <i class="fa fa-arrows-alt"></i>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="demo-chartist mb-md m-t-15" id="chart1"></div>
                        </div>
                    </div>
                </div>

            </div> -->


    </div>
</div>

                </div>
            </div>
            <!-- END MAIN CONTENT -->
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


