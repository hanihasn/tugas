<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengguna;
use App\Models\Ktp;

class RelasiController extends Controller
{
    public function index(){
        $pengguna = pengguna::latest()->get();
        return view("penggunaTable", compact("pengguna"));
    }

    public function create(){
        return view("penggunaForm");
    }

    public function store(Request $request)
    {
        $pengguna = new Pengguna();
        $pengguna->nama = $request->input('nama');
        $pengguna->email = $request->input('email');
        $pengguna->save();

        $ktp = new Ktp();
        $ktp->alamat = $request->input('alamat_ktp');
        $pengguna->ktp()->save($ktp);

        return redirect('/ktp');
    }
}
