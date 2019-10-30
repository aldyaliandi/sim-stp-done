@extends(('layouts/compact_layanan'))
{{-- Page title --}}
@section('title')
    PENGATURAN AKUN
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <!--plugin styles-->
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/select2/css/select2.min.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/datatables/css/scroller.bootstrap.min.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/datatables/css/colReorder.bootstrap.min.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/datatables/css/dataTables.bootstrap.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/responsive.dataTables.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/pages/dataTables.bootstrap.css')}}" />
    <!-- end of plugin styles -->
    <!--Page level styles-->
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/pages/tables.css')}}" />
    <!--End of page level styles-->
@stop
@section('content')
    <header class="head">
        <div class="main-bar">
            <div class="row no-gutters">
                <div class="col-lg-6 col-md-4 col-sm-4">
                    <h4 class="nav_top_align">
                        <i class="fa fa-th"></i>
                        Pengaturan Akun Layanan
                    </h4>
                </div>
                <div class="col-lg-6 col-md-8 col-sm-8">
                    <ol class="breadcrumb float-right nav_breadcrumb_top_align">
                        <li class="breadcrumb-item">
                            <a href="index1">
                                <i class="fa fa-home" data-pack="default" data-tags=""></i> Dashboard
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">Tables</a>
                        </li>
                        <li class="breadcrumb-item active">Data Tables</li>
                    </ol>
                </div>
            </div>
        </div>

<!--  Search Data -->
      <!-- <form class="form-inline my-2 my-lg-0" method="GET" action="/pengaturan">
            <input name="cari" class="form-control mr-sm-2" type="search" placeholder="Cari" arial-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fa fa-search"></i> Search</button>            
        </form>     -->     

<!-- Export -->
        <a href="/pengaturan/exportexcelpengaturan" class="btn btn-primary"><i class="fa fa-file-excel-o"></i> Export Excel</a>
        <a href="/pengaturan/exportpdfpengaturan" class="btn btn-primary"><i class="fa fa-file-pdf-o"></i> Export PDF</a>

    <!--  Pesan data tersimpan -->
    @if(session('sukses'))
    <div class="alert alert-success" role="alert">
    {{session('sukses')}}
    </div>
    @endif

    <!--  Menambah Data Pendaftar -->
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
     <i class="fa fa-plus"></i> Tambah Akun
    </button>

            <!-- Modal Menambah Data Pendaftar -->
            <h4 class="mt-3">
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Akun Layanan Teknologi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

            <!-- Membuat penambah Data Pendaftar (form)-->
        <form action="/pengaturan/createuser" method="POST">
            {{csrf_field()}}
            <div class="form-group">
                <label for="exampleInputEmail1">ID</label>
                <input name="id" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ID Otomatis langsung Isi Nama Admin/Pemimpin!">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Nama Admin/Pemimpin</label>
                <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Nama Admin/Pemimpin" required="required">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Nama Admin/Pemimpin" required="required">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Password</label>
                <input name="password" type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Password" required="required">
            </div>

            <!--  <div class="form-group">
                <label for="exampleInputEmail1">Token</label>
                <input name="remember_token" type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Password" required="required">
            </div> -->


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                </div>
            </div>
            </div>


</header>
        <!-- Data Tabel -->

        <div class="outer">
        <div class="inner bg-container">
            <div class="row">
                <div class="col-12 data_tables">
                    <!-- BEGIN EXAMPLE1 TABLE PORTLET-->
                    <div class="card">
                        <div class="card-header bg-white">
                            <i class="fa fa-table"></i> Data Pesanan Layanan 3D Printing
                        </div>
                        <div class="card-body p-t-25">
                            <div class="">
                                <div class="pull-sm-right">
                                    <div class="tools pull-sm-right"></div>
                                </div>
                            </div>
                            <table class="table table-striped table-bordered table-hover" id="sample_1">
                                <thead>
                <tr>
                    <th scope="col"><i class="fa fa-wpforms"></i> Id</th>
                    <th scope="col"><i class="fa fa-yoast"></i> Nama Akun Admin/Pemimpin</th>
                    <th scope="col"><i class="fa fa-pied-piper"></i> Email</th>
                    <th scope="col"><i class="fa fa-volume-control-phone"></i>Password</th>
                    <th scope="col"><i class="fa fa-wpbeginner"></i> Aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php $id=1; ?>
            @foreach($pengaturan as $akun)
                <tr>
                    <td>{{ $id }}</td>
                    <td>{{$akun->name}}</td>
                    <td>{{$akun->email}}</td>
                    <td>{{$akun->password}}</td>
                    <td>
                    <a href="/pengaturan/{{$akun->id}}/editpengaturan" class="badge badge-success"><i class="fa fa-edit"></i> Edit</a>
                    <a href="/pengaturan/{{$akun->id}}/deletepengaturan" class="badge badge-danger" onclick="return confirm('Apakah kamu yakin Menghapus Data Tersebut ?')"><i class="fa fa-trash-o"></i> Delete</a> 
                    </td>
                    
                </tr> 
                    <?php $id++; ?>
            @endforeach 
            </tbody>
            
        </table>



        </div>
    </div>
    
@stop
@section('footer_scripts')
    <!--plugin scripts-->
    <script type="text/javascript" src="{{asset('assets/vendors/select2/js/select2.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/datatables/js/jquery.dataTables.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/pluginjs/dataTables.tableTools.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/datatables/js/dataTables.colReorder.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/datatables/js/dataTables.bootstrap.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/datatables/js/dataTables.buttons.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/datatables/js/dataTables.responsive.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/datatables/js/dataTables.rowReorder.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/datatables/js/buttons.colVis.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/datatables/js/buttons.html5.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/datatables/js/buttons.bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/datatables/js/buttons.print.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/datatables/js/dataTables.scroller.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/datatables/js/dataTables.responsive.js')}}"></script>
    <!-- end of plugin scripts -->
    <!--Page level scripts-->
    <script type="text/javascript" src="{{asset('assets/js/pages/datatable.js')}}"></script>
    <!-- end of global scripts-->
@stop

