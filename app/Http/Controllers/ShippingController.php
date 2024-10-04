<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShippingController extends Controller
{
    //
    public function shipping(){
        // about là lấy tên sau ::class
        return view('admin.shipping');
    }
}