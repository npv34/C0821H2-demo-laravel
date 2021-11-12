<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    function login(Request $request) {
        $username = $request->username;
        $password = $request->password;

        $data = [
          'email' => $username,
          'password' => $password
        ];

        if (Auth::attempt($data)) {
            return redirect()->route('products.index');
        } else {
            Session::flash('errorLogin', 'Tai khoan khong chinh xac');
            return redirect()->route('showFormLogin');
        }
    }

    function logout() {
        Auth::logout();
        return redirect()->route('showFormLogin');
    }
}
