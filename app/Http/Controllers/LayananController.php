<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Exports\pendaftarlayananExport;
use App\Exports\pesanlayananExport;
use App\Exports\transaksilayananExport;
use App\Exports\pengaturanExport;
use Maatwebsite\Excel\Facades\Excel;
use PDF;
use App\Pendaftarlayanan;
use App\Pesanlayanan;
use DB;


//use App\Pesanlayanan;

class LayananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       //
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    // public function transaksilayanan(){
    //     return view('layanan/transaksilayanan');
    // } 

    public function reportlayanan(){
        return view('layanan/reportlayanan');
    }

    public function layanan(Request $request){
        //return view('layanan/layanan');
        \App\Pendaftarlayanan::create($request->all());
        return redirect('/layanan/layanan')->with('sukses','Data Berhasil Terkirim dan Otomatis Tersimpan!');
    }

        
        

    // PENDAFTAR LAYANAN
    // method membuat pendaftar baru
    public function creatependaftar(Request $request){
        \App\Pendaftarlayanan::create($request->all());
        return redirect('/pendaftarlayanan')->with('sukses','Data Berhasil Terkirim dan Otomatis Tersimpan!');
    }

   public function delete($id){
       $pendaftarlayanan = \App\Pendaftarlayanan::find($id);
       $pendaftarlayanan->delete();
       return redirect('/pendaftarlayanan')->with('sukses','Data Berhasil Dihapus');
   }

   public function pendaftarlayanan(Request $request){
    if($request->has('cari')){
         $pendaftarlayanan = \App\Pendaftarlayanan::where('nama_pendaftar','LIKE','%'.$request->cari.'%')->get();
    }else{
        $pendaftarlayanan = \App\Pendaftarlayanan::all();
    }
    
    return view('layanan/pendaftarlayanan',['pendaftarlayanan' => $pendaftarlayanan]);
   }
   /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pendaftarlayanan =\App\Pendaftarlayanan::find($id);
        return view ('layanan/edit', ['pendaftarlayanan' => $pendaftarlayanan]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $pendaftarlayanan =\App\Pendaftarlayanan::find($id);
        $pendaftarlayanan->update($request->all());
        return redirect('/pendaftarlayanan')->with('sukses','Data Berhasil Terupdate dan Otomatis Tersimpan!');
    }


    // PESAN LAYANAN
    public function pesanlayanan(Request $request){
        // $pesanlayanan = \App\Pesanlayanan::all();

        // $pesanlayanan = DB::table('pesanlayanans')
        // ->join('pendaftarlayanans', 'pendaftarlayanans.id', '=','pesanlayanans.id')
        // ->get();

        //  if($request->has('cari')){
        //     $pesanlayanan = \App\Pesanlayanan::where('nama_pendaftar_pesanan','LIKE','%'.$request->cari.'%')->get();
        // }else{
            $pesanlayanan = DB::table('pendaftarlayanans')
                            ->join('pesanlayanans','pendaftarlayanans.id','=','pesanlayanans.id_layanan')
                            // ->where('pendaftarlayanans.id','=','pesanlayanans.id_layanan')
                            ->select('pendaftarlayanans.*','pesanlayanans.*','pendaftarlayanans.id as idPendaftar')
                            ->get();
        $pendaftar = Pendaftarlayanan::all();
        $now = date('Y-m-d H:i:s');
       // }
       return view('layanan/pesanlayanan',['pesanlayanan' => $pesanlayanan, 'pendaftar' => $pendaftar]);
   }

    // method membuat pesanan baru
    public function createpesan(Request $request){
        // \App\Pesanlayanan::create($request->());

        $pesanlayanan = new Pesanlayanan;

        $pesanlayanan->id_layanan = $request->nama_pendaftar_pesanan;
        $pesanlayanan->nama_alat = $request->nama_alat;
        $pesanlayanan->nama_pesanan = $request->nama_pesanan;
        $pesanlayanan->ongkir = $request->ongkir;
        $pesanlayanan->model_warna = $request->model_warna;
        $pesanlayanan->bahan = $request->bahan;
        $pesanlayanan->ukuran = $request->ukuran;
        $pesanlayanan->gram = $request->gram;
        $pesanlayanan->cast = $request->cast;
        $pesanlayanan->biaya = $request->biaya;
        $pesanlayanan->tanggal_mulai = $request->tanggal_mulai;
        $pesanlayanan->tanggal_selesai = $request->tanggal_selesai;
        $pesanlayanan->upload_gambar = $request->upload_gambar;

        $pesanlayanan->save();

        return redirect('/pesanlayanan')->with('sukses','Data Berhasil Terkirim dan Otomatis Tersimpan!');

        // $pendaftarlayanans = Pendaftarlayanan::All();
        // $data = array(
        //     'pendaftarlayanans' => $pendaftarlayanans
        // );
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editpesan($id)
    {
        $pesanlayanan =\App\Pesanlayanan::find($id);
        return view ('layanan/editpesan', ['pesanlayanan' => $pesanlayanan]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatepesan(Request $request, $id)
    {
        //dd($request->all());
        $pesanlayanan =\App\Pesanlayanan::find($id);
        $pesanlayanan->update($request->all());
        if($request->hasFile('upload_gambar')){
            $request->file('upload_gambar')->move('images/',$request->file('upload_gambar')->getClientOriginalName());
            $pesanlayanan->upload_gambar = $request->file('upload_gambar')->getClientOriginalName();
            $pesanlayanan->save();
        }
        return redirect('/pesanlayanan')->with('sukses','Data Berhasil Terupdate dan Otomatis Tersimpan!');
    }
    public function deletepesan($id){
        $pesanlayanan = \App\Pesanlayanan::find($id);
        $pesanlayanan->delete();
        return redirect('/pesanlayanan')->with('sukses','Data Berhasil Dihapus');
    }

    // TRANSAKSI LAYANAN
    public function transaksilayanan(Request $request){
        if($request->has('cari')){
            $transaksilayanan = \App\Pesanlayanan::where('nama_pendaftar_pesanan','LIKE','%'.$request->cari.'%')->get();
        }else{
        $transaksilayanan = \App\Pesanlayanan::all();
        }
        return view('layanan/transaksilayanan',['transaksilayanan' => $transaksilayanan]);
   }

    // // method membuat transaksi baru
    // public function createtransaksi(Request $request){
    //     \App\pesanlayanan::create($request->all());
    //     return redirect('/transaksilayanan')->with('sukses','Data Berhasil Terkirim dan Otomatis Tersimpan!');
    // }
    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edittransaksi($id)
    // {
    //     $transaksilayanan =\App\Pesanlayanan::find($id);
    //     return view ('layanan/edittransaksi', ['transaksilayanan' => $transaksilayanan]);
    // }
    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function updatetransaksi(Request $request, $id)
    // {
    //     $transaksilayanan =\App\Pesanlayanan::find($id);
    //     $transaksilayanan->update($request->all());
    //     return redirect('/transaksilayanan')->with('sukses','Data Berhasil Terupdate dan Otomatis Tersimpan!');
    // }
    public function deletetransaksi($id){
        $transaksilayanan = \App\Pesanlayanan::find($id);
        $transaksilayanan->delete();
        return redirect('/transaksilayanan')->with('sukses','Data Berhasil Dihapus');
    }

    //membuat upload gambar dan profile
    public function profile($id){
        $pesanlayanan =\App\Pesanlayanan::find($id);
        return view ('layanan/profile',['pesanlayanan' => $pesanlayanan]);
    }

   public function export() 
    {
        return Excel::download(new pesanlayananExport, 'pesanlayanan.xlsx');
    }

    public function exportpdf()
    {
        $pesanlayanan = \App\Pesanlayanan::all();
        $pdf = PDF::loadView('export.pesanlayananpdf', ['pesanlayanan' => $pesanlayanan]);
        return $pdf->download('pesanan.pdf');
    }

    // export transaksi
    public function exportpdftransaksi()
    {
        $pesanlayanan = \App\Pesanlayanan::all();
        $pdf = PDF::loadView('export.transaksilayananpdf', ['pesanlayanan' => $pesanlayanan]);
        return $pdf->download('transaksi.pdf');
    }

     public function exportexcel() 
    {
        return Excel::download(new transaksilayananExport, 'transaksilayanan.xlsx');
    }

    // export pendaftar
      public function exportexcelpendaftar() 
    {
        return Excel::download(new pendaftarlayananExport, 'pendaftarlayanan.xlsx');
    }
    public function exportpdfpendaftar()
    {
        $pendaftarlayanan = \App\Pendaftarlayanan::all();
        $pdf = PDF::loadView('export.pendaftarlayananpdf', ['pendaftarlayanan' => $pendaftarlayanan]);
        return $pdf->download('pendaftar.pdf');
    }



    //kelola pengaturan akun & cari
     public function pengaturan(Request $request){
        if($request->has('cari')){
            $pengaturan = \App\User::where('name','LIKE','%'.$request->cari.'%')->get();
        }else{
        $pengaturan = \App\User::all();
        }
        return view('layanan/pengaturan', ['pengaturan' => $pengaturan]);
    }

    
     // method membuat akun baru
    public function createuser(Request $request){
        \App\User::create($request->all());
        return redirect('/pengaturan')->with('sukses','Data Berhasil Terkirim dan Otomatis Tersimpan!');
    }
    // edit data
    public function editpengaturan($id)
    {
        $pengaturan =\App\User::find($id);
        return view ('layanan/editpengaturan', ['pengaturan' => $pengaturan]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // update data
    public function updatepengaturan(Request $request, $id)
    {

        $pengaturan =\App\User::find($id);
        $pengaturan->update($request->all());
        return redirect('/pengaturan')->with('sukses','Data Berhasil Terupdate dan Otomatis Tersimpan!');
    }
    //delete akun
    public function deletepengaturan($id){
        $pengaturan = \App\User::find($id);
        $pengaturan->delete();
        return redirect('/pengaturan')->with('sukses','Data Berhasil Dihapus');
    }       
        
    // export Pengaturan Akun
     public function exportexcelpengaturan() 
    {
        return Excel::download(new pengaturanExport, 'pengaturan.xlsx');
    }

    public function exportpdfpengaturan()
    {
        $pengaturan = \App\user::all();
        $pdf = PDF::loadView('export.pengaturanpdf', ['pengaturan' => $pengaturan]);
        return $pdf->download('pengaturan.pdf');
    }

}

