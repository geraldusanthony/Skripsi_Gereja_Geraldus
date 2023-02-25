<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\persembahan;

class Persembahan_Controller extends Controller
{
    

    public function addpersembahan(Request $request){ 
        persembahan::create($request->all());
        return redirect('persembahan')->with('sukses','Data Telah Di Tambah!');   
    }

    public function persembahan(request $request){
        $persembahan = persembahan::all();
        return view('admin.persembahan',compact('persembahan'));
    }

    public function deletepersembahan($id){
        persembahan::where('id',$id)->delete();
        return redirect()->back();
    }
}
