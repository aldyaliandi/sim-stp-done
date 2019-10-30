<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        return view('index');
    }

    public function tenant(){
        return view('tenant');
    }
    
    public function Inkubator(){
        return view('inkubator');
    }

    public function hilirisasi(){
        return view('hilirisasi');
    }

    public function layanan(){
        return view('layanan');
    }

    public function kanban(){
        return view('kanban');
    }

    public function pengaturan(){
        return view('pengaturan');
    }

    public function pendaftarlayanan(){
        return view('pendaftarlayanan');
    }

    public function pesanlayanan(){
        return view('pesanlayanan');
    }

    public function transakilayanan(){
        return view('transaksilayanan');
    }

    public function reportlayanan(){
        return view('reportlayanan');
    }

}
