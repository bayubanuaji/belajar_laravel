<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index(){
        $nama = "Bayu Banuaji";
        $pelajaran = ["Algoritma & Pemrograman","Kalkulus","Pemrograman Web"];
        $nilai = [1,2,3,4,5,6];
        return view('biodata',['nama' => $nama, 'pelajaran' => $pelajaran, 'nilai' => $nilai]);
        
    }
}
