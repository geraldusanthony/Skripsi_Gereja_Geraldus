<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\umat;

class Daftarumat_Controller extends Controller
{
    public function daftarumat(request $request){
        $umat = umat::all();
        return view('admin.daftarumat',compact('umat'));
    }
}
