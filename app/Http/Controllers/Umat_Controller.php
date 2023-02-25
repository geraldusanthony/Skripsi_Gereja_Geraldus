<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\jadwalmisa;
use App\Models\persembahan;
use App\Models\pendaftaran;

class Umat_Controller extends Controller
{
    public function umat(request $request){
        $persembahan = persembahan::all();
        return view('umat.home',compact('persembahan'));
    }
}
