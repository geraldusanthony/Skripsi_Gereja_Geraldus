<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admin_Controller extends Controller
{
    public function home(){
        return view('admin.home');
    }

    public function login(){
        return view('admin.loginpage');
    }

    public function loginpage(){
        return view('admin.loginpage');
    }

}
