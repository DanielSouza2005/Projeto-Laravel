<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function showLogin(){
        return view('login');
    }

    public function checkLogin(){
        return view('check');
    }
}
