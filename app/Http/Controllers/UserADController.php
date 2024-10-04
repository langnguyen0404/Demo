<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;

class UserADController extends Controller
{
    public function UserAD(){
        // products là thư mục chưa list
        return view('admin.UsersAD');
    }
    public function listUserAD(){
        $Users = User::orderBy('id','ASC')->get();
        // dd($Users);
        return view('admin.UsersAD',compact('Users'));
    }
}