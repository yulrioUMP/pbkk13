<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function beranda()
    {
        $nama1 = "Abdul Salam";
        $alamat = "<i>Jl. Batu No 8</i>";
        $UAS = 34;
        $produks = array (
            array("Volvo",22,18),
            array("BMW",15,13),
            array("Saab",5,2),
            array("Land Rover",17,15)
        );
        return view('depan',['nama2'=>$nama1, 'alamat'=>$alamat, 
                    'nilai'=>$UAS,'produks'=>$produks]);
    }

    public function karya()
    {
        return view('pekerjaan');
    }

}
