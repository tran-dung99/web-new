<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request) {
        $data = $request->only("email","password");
        if(Auth::attempt($data)) {
            return view('user.list');
        }else{
            return view('auth.login');
        }
    }
}
