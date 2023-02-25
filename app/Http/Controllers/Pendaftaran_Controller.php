<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pendaftaran;
use App\Models\persembahan;
use App\Models\jadwalmisa;


class Pendaftaran_Controller extends Controller
{
    public function validasi(){
        return view('umat.validasi');
    }

    public function homeumat(request $request){
        $persembahan = persembahan::all();
        return view('umat.home',compact('persembahan'));
    }

    public function addpendaftaran(Request $request){ 
        pendaftaran::create($request->all());
        return redirect('validasi')->with('sukses','Data Telah Di Tambah!');   
    }

    public function datamisa(request $request){
        $daftarmisa = pendaftaran::all();
        return view('admin.datamisa',compact('daftarmisa'));
    }
    
    public function deletependaftaran($id){
        pendaftaran::where('id',$id)->delete();
        return redirect()->back();
    }
    
}
