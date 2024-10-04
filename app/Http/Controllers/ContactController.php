<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact(){
        // contact là lấy tên sau ::class
        return view('contact');
    }
}