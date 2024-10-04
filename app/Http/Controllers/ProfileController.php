<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    public function profile(){
        // about là lấy tên sau ::class
        return view('profile');
    }
}