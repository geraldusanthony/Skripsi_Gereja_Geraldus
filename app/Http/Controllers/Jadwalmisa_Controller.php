<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\jadwalmisa;


class Jadwalmisa_Controller extends Controller
{
    public function jadwalmisa(){
        return view('admin.jadwalmisa');
    }

    public function addjadwalmisa(Request $request){ 
        jadwalmisa::create($request->all());
        return redirect('jadwalmisa')->with('sukses','Data Telah Di Tambah!');   
    }

    public function pendaftaran(request $request){
        $jadwalmisa = jadwalmisa::all();
        return view('admin.pendaftaran',compact('jadwalmisa'));
    }

    public function deletejadwal($id){
        jadwalmisa::where('id',$id)->delete();
        return redirect()->back();
    }
}
