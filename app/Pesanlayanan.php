<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pesanlayanan extends Model
{
    protected $guarded=[];
    protected $table = 'pesanlayanans';
  	protected $fillable = ['id_layanan','nama_alat','nama_pesanan','ongkir','model_warna','bahan','ukuran','gram','cast','biaya','tanggal_mulai','tanggal_selesai','upload_gambar'];

  	public function getupload_gambar(){
  		if(!$this->upload_gambar){
  			return asset('images/default.jpg');
  		}
  		return asset('images/' .$this->upload_gambar);
  	}

    // public function pendaftarlayanan()
    // {
    //     return $this->belongsTo(Pendaftarlayanan::class, 'nama_pendaftar_pesanan');
    // }

}
