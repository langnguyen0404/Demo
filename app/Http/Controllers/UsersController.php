<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use function Laravel\Prompts\alert;

class UsersController extends Controller
{
    public function user(){
        return view('login');
    }
    public function register(Request $request) {
        $request->validate([
                'name'=>'required|string|max:255',
                'email'=>'required|string|max:36',
                'password'=>'required|string|min:3|max:16',
                'user_role'=>'nullable|numeric',
            ]);  
        $request->merge(['password'=>Hash::make($request->password)]);
        User::create($request->all());
        
        return redirect()->route('taikhoan');
        // dd($request->all());
    }

    public function login(Request $request) {
        // dd($request->all());
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('home');
        }
        return redirect()->back()->with('error','Email hoặc mật khẩu không đúng');
    }

    public function logout() {
        Auth::logout();
        return redirect()->back();
    }
}