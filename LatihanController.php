<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class LatihanController extends Controller
{
    public function index(){
      return view('latihanhome');
    }
    public function porto(){
      return view('latihanporto');
    }
    public function about(){
      return view('latihanabout');
    }
}
