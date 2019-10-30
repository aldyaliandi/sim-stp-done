@extends(('layouts/compact_layanan'))
{{-- Page title --}}
@section('title')
    LAYANAN
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
                        <i class="fa fa-laptop"></i>
                        Layanan Teknologi
                    </h4>
                </div>
            </div>
        </div>
    </header>
    <div class="outer">
        <div class="inner bg-container">

                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="bg-warning m-t-35 header_align">
                        <div class="row">
                            <div class="col-lg-12 col-12">
                                <div class="row">
                                    <div class="col-12 float-left">
                                        <span class="current-date"></span>
                                    </div>
                                    <div class="col-12">
                                        <span class="time float-right "></span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
  

<!-- HAlaman Utama -->
<!-- slide -->
            <div class="outer">
        <div class="inner bg-container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header bg-white">Video Persiapan Industri Digital</div>
                        <div class="card-body cards_section_margin">
                            
                            <div class="row">
                                <div class="col-lg">
                                    <div class="card m-t-35">
                                        <div class="card-header bg-white">
                                            <center><h1 text-color="red">SELAMAT DATANG DI WEBSITE LAYANAN TEKNOLOGI</h1></center>
                                        </div>
                                        <div class="card-body">
                                            <div class="video-container">
                          <center><iframe width="1260" height="480" src="//www.youtube.com/embed/KOVJQ9wwbNI" frameborder="0" allowfullscreen></iframe></center>
                         </div>
                                        </div>
                                        <div class="card-footer bg-white">
                                            <p class="card-text"> 3D printing adalah proses pembuatan benda padat tiga dimensi dari suatu desain digital. Karena merupakan 3D, maka benda ini memiliki volume sehingga bisa Anda pegang secara langsung. Pada dasarnya memang tidak jauh berbeda dari alat printing biasa, hanya saja output yang dihasilkan berupa 3D. Tentunya inovasi ini memberi dampak tersendiri terhadap dunia manufaktur.</p>
                                            <p class="card-text">Sumber : blog.midtrans.com</p>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            </div>
                        </div>
                    </div>
                  
                    </div>
                </div>
            </div>
       
            <!-- Membuat penambah Data Pendaftar (form)-->
            <!-- coming soon buat data pendaftar dan pesanan masih berusaha -->

<!-- Macam Layanan Teknologi -->
            
<div class="outer">
        <div class="inner bg-container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header bg-white">2 Jenis Layanan Teknologi</div>
                       
                        <div class="card-body cards_section_margin">
                            
                            <div class="row">
                                <div class="col-lg">
                                    <div class="card m-t-35">
                                        <div class="card-header bg-white">
                                            3D PRINTING
                                        </div>
                                        <div class="card-body">
                                            <img src="{{asset('assets/img/3d.jpg')}}" class="img-fluid" alt="Photo of sunset">
                                        </div>
                                        <div class="card-footer bg-white">
                                            <p class="card-text"> 3D printing adalah proses pembuatan benda padat tiga dimensi dari suatu desain digital. Karena merupakan 3D, maka benda ini memiliki volume sehingga bisa Anda pegang secara langsung. Pada dasarnya memang tidak jauh berbeda dari alat printing biasa, hanya saja output yang dihasilkan berupa 3D. Tentunya inovasi ini memberi dampak tersendiri terhadap dunia manufaktur.</p>
                                            <p class="card-text">Sumber : blog.midtrans.com</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                                <div class="row">
                                <div class="col-lg">
                                    <div class="card m-t-35">
                                        <div class="card-header bg-white">
                                            LASER CUTTING
                                        </div>
                                        <div class="card-body">
                                            <center><img src="{{asset('assets/img/laser.jpg')}}" class="img-fluid" alt="Photo of sunset"></center>
                                        </div>
                                        <div class="card-footer bg-white">
                                            <p class="card-text"> Laser cutting adalah teknologi yang menggunakan laser untuk memotong bahan, dan biasanya digunakan untuk aplikasi industri manufaktur, tetapi juga mulai digunakan oleh sekolah, usaha kecil, dan penggemar.</p>
                                             <p class="card-text">Sumber : id.wikipedia.org</p>
                                        </div>
                                    </div>
                                </div>
                                
                                  </div>
                                
                            </div>
                        </div>
                    </div>
                  

                    </div>
                </div>
            </div>
            <!-- /.outer -->
            
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

    <!-- script tanggal -->
    <script type="text/javascript" src="{{asset('assets/vendors/circliful/js/jquery.circliful.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/bootstrapvalidator/js/bootstrapValidator.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/moment/js/moment.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/countUp.js/js/countUp.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/swiper/js/swiper.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/bootstrap-switch/js/bootstrap-switch.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/switchery/js/switchery.min.js')}}"></script>

    <script type="text/javascript" src="{{asset('assets/js/pages/widget1.js')}}"></script>
@stop




