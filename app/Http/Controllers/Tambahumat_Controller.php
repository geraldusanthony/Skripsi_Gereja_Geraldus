<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\umat;

class Tambahumat_Controller extends Controller
{
    public function tambahumat(){
        return view('admin.tambahumat');
    }

    public function addumat(Request $request){ 
        umat::create($request->all());
        return redirect('tambahumat')->with('sukses','Data Telah Di Tambah!');   
    }

    public function deleteumat($id){
        umat::where('id',$id)->delete();
        return redirect()->back();
    }
}
