<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswaa;

class SekolahController extends Controller
{
    public function index(){
        $data = Siswaa::latest()->get();
        return view("sekolahTable",compact("data"));
    }
}