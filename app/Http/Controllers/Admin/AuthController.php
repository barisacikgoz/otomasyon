<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
        return view('admin.auth.login');
    }

    public function loginPost(Request $request){

        if (Auth::attempt(['email' => $request->post('email'), 'password' => $request->post('password')])){
            return redirect()->route('dashboard');
        }else{
            return redirect()->back()->withErrors("Email or Password wrong!");
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
