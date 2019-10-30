<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengaturan extends Model
{
    protected $fillable = ['id','name','email','email_verified_at','password','remember_token','created_at','updated_at'];
}
