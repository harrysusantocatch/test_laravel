<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormulirController extends Controller
{
    public function show(){
        return view('formulir');
    }

    public function process(Request $req){
        $nama = $req->input('nama');
        $alamat = $req->input('alamat');
        return "Nama = " . $nama . " Alamat = " . $alamat;
    }
}
