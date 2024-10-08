<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\teacher;

class SchoolController extends Controller
{
    public function index(){
        $data = teacher::latest()->get();
        return view("schoolTable",compact("data"));
    }
}