<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about(){
        // about là lấy tên sau ::class
        return view('about');
    }
}