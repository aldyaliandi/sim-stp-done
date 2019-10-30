<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pendaftarlayanan extends Model
{
	protected $table = 'pendaftarlayanans';
    protected $fillable = ['id','nama_pendaftar','nip','nohp','pekerjaan'];
    protected $primaryKey = 'id';
    protected $guarded = [];


}
