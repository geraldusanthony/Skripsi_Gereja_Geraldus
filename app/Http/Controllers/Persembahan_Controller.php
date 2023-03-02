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

    public function editpersembahan(Request $request, $id){
        $persembahan =persembahan::find($id);
        $persembahan->tahun = $request->input('tahun');
        $persembahan->bulan = $request->input('bulan');
        $persembahan->minggu = $request->input('minggu');
        $persembahan->jumlah = $request->input('jumlah');
        $persembahan->jumlah2 = $request->input('jumlah2');
        $persembahan->save();
        return redirect('persembahan');
    }

    public function findpersembahan($id){
        $persembahan = persembahan::where('id',$id)->first();
        $data = [
            'title' => 'persembahan',
            'persembahan' => $persembahan
        ];
        return view('admin.editpersembahan',$data);
    }
}
