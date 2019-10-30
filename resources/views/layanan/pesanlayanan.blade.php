@extends(('layouts/compact_layanan'))
{{-- Page title --}}
@section('title')
    PESAN LAYANAN
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
                        Pesanan Layanan 3D Printing
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
      <!-- <form class="form-inline my-2 my-lg-0" method="GET" action="/pesanlayanan">
            <input name="cari" class="form-control mr-sm-2" type="search" placeholder="Cari" arial-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fa fa-search"></i> Search</button>            
        </form>  -->

            <!-- Laporan -->
               <a href="/pesanlayanan/export" class="btn btn-primary"><i class="fa fa-file-excel-o"></i> Export Excel</a>
               <a href="/pesanlayanan/exportpdf" class="btn btn-primary"><i class="fa fa-file-pdf-o"></i> Export PDF</a>
        
      <!--  Pesan data tersimpan -->
    @if(session('sukses'))
    <div class="alert alert-success" role="alert">
    {{session('sukses')}}
    </div>
    @endif

    <!--  Menambah Data Pesanan Pendaftar -->
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
    <i class="fa fa-plus"></i> Tambah Data Pesanan Pendaftar
    </button>

            <!-- Modal Menambah Data Pesanan Pendaftar -->
            <h4 class="mt-3">
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Pesanan Pendaftar Layanan Teknologi 3D Printing</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

            <!-- Membuat penambah Data Pesanan Pendaftar (form)-->
        <form action="/pesanlayanan/createpesan" method="POST">
            {{csrf_field()}}
           <!--  <div class="form-group">
                <label for="exampleInputEmail1">ID</label>
                <input name="id" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ID Otomatis langsung isi Nama Alat!">
            </div> -->

            <div class="form-group">
                <label for="exampleInputEmail1">Harga Print (1 Gram = Rp 4.500)</label>
                <input name="nama_alat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Nama Alat" required="required">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Nama Pesanan</label>
                <input name="nama_pesanan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Nama Pesanan" required="required">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Nama Pesanan Pendaftar </label>
                <select name="nama_pendaftar_pesanan" class="form-control" id="exampleFormControlSelect1">
                    @foreach($pendaftar as $data)
                    <option value="{{ $data->id }}">{{ $data->nama_pendaftar }}</option>
                    @endforeach
                </select>

                <!-- <input name="nama_pendaftar_pesanan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Pesanan Pendaftar" required="required"> -->
            </div>

           


            <div class="form-group">
                <label for="exampleInputEmail1">Ongkir</label>
                <input name="ongkir" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Ongkir" required="required">
            </div> 

            <div class="form-group">
                <label for="exampleFormControlSelect1">Pilih Model/Bahan Anda Sekarang</label>
                <select name="model_warna" class="form-control" id="exampleFormControlSelect1">
                <option value="Merah">Merah</option>
                <option value="Kuning">Kuning</option>
                <option value="Hijau">Hijau</option>
                <option value="Biru">Biru</option>
                <option value="Hitam">Hitam</option>
                <option value="Abu-Abu">Abu-Abu</option>
                <option value="Ungu">Ungu</option>
                <option value="Ping">Ping</option>
                <option value="Putih">Putih</option>
                <option value="Coklat">Coklat</option>
                </select>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Qty</label>
                <input name="bahan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Qty" required="required">
            </div>

           <!--  <div class="form-group">
                <label for="exampleInputEmail1">Status</label>
                <input name="ukuran" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Status" required="required">
            </div> -->

            <div class="form-group">
                <label for="exampleFormControlSelect1">Status</label>
                <select name="ukuran" class="form-control" id="exampleFormControlSelect1">
                <option value="Dari CS : Tinggal dicetak">Dari CS : Tinggal dicetak</option>
                <option value="Dari Pencetak : Proses Pencetakan">Dari Pencetak : Proses Pencetakan</option>
                </select>
            </div>
            
            <div class="form-group">
                <label for="exampleInputEmail1">Gram</label>
                <input name="gram" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Gram" required="required">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1"></label>
                <label for="exampleInputEmail1">Invoice</label>
                <input name="cast" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Ongkir dan Invoice " required="required">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Total Biaya</label>
                <input name="biaya" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Cast dan Biaya Printing sesuai Gram !" required="required">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Tanggal Mulai kapan ? (Y-M-D & Jam:Menit:Detik =ex:2019-08-22 08:30:00)</label>
                <input type="datetime-local" name="tanggal_mulai" value="" required="required">
                <!-- <input name="tanggal_mulai" type="datetime" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Mulai Proses Printing !" > -->
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Ingin Selesai Tanggal ? (Y-M-D & Jam:Menit:Detik =ex:2019-08-23 08:30:00)</label>
                <input name="tanggal_selesai" type="datetime-local" required="required" value="">
            </div>

           <div class="form-group">
                <label for="exampleInputEmail1">Upload Gambar</label>
                <input name="upload_gambar" type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Silahkan Upload Gambar" required="required">
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
                    <th scope="col"><i class="fa fa-wpforms"></i> No</th>
                    <th scope="col"><i class="fa fa-print"></i>Harga Print</th>
                    <th scope="col"><i class="fa fa-pencil-square-o"></i> Nama Pesanan</th>
                    <th scope="col"><i class="fa fa-yoast"></i> Nama Pendaftar Pesanan</th>
                    <th scope="col"><i class="fa fa-adjust"></i> Model/Warna</th>
                    <th scope="col"><i class="fa fa-th-large"></i> Qty</th>
                    <th scope="col"><i class="fa fa-list-ol"></i> Status</th>
                    <th scope="col"><i class="fa fa-database"></i> Gram</th>
                    <!-- <th scope="col">Cast</th>
                    <th scope="col">Biaya</th>
                    <th scope="col">Tanggal Mulai</th>
                    <th scope="col">Tanggal Selesai</th> -->
                    <th scope="col"><i class="fa fa-file-image-o"></i> Upload Gambar</th>
                    <th scope="col"><i class="fa fa-wpbeginner"></i> Aksi</th>
                                </tr>
                                </thead>
                                
                               <tbody>
                                 <?php $id=1; ?>
                @foreach($pesanlayanan as $pesan)
                <tr>
                    <td>{{ $id }}</td>
                    <td>{{$pesan->nama_alat}}</td>
                    <td><a href="/pesanlayanan/{{$pesan->id}}/profile">{{$pesan->nama_pesanan}}</a></td>
                    <td><a href="/pesanlayanan/{{$pesan->id}}/profile">{{$pesan->nama_pendaftar}}</a></td>
                    <td>{{$pesan->model_warna}}</td>
                    <td>{{$pesan->bahan}}</td>
                    <td>{{$pesan->ukuran}}</td>
                    <td>{{$pesan->gram}}</td>
                    <!-- <td>{{$pesan->cast}}</td>
                    <td>{{$pesan->biaya}}</td>
                    <td>{{$pesan->tanggal_mulai}}</td>
                    <td>{{$pesan->tanggal_selesai}}</td> -->
                    <td>{{$pesan->upload_gambar}}</td>
                    <td>
                    <a href="/pesanlayanan/{{$pesan->id}}/editpesan" class="badge badge-success"><i class="fa fa-edit"></i> Edit</a>
                    <a href="/pesanlayanan/{{$pesan->id}}/deletepesan" class="badge badge-danger" onclick="return confirm('Apakah kamu yakin Menghapus Data Tersebut ?')"><i class="fa fa-trash-o"></i> Delete</a> 
                    </td>
                </tr> 
                    <?php $id++; ?>
            @endforeach 
            </tbody>
                      
                            </table>
                        </div>
                    </div>
                    <!-- END EXAMPLE1 TABLE PORTLET-->
                    
                    
                               
                        </div>
                    </div>
                </div>
            </div>
                    

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

