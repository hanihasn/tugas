<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $data =[ "nama" =>"Hanifah"];
        return view ("home1",$data);
    }
}