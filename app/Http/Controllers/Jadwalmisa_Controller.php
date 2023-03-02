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

    public function editjadwal(Request $request, $id){
        $jadwalmisa = jadwalmisa::find($id);
        $jadwalmisa->hari = $request->input('hari');
        $jadwalmisa->tanggal = $request->input('tanggal');
        $jadwalmisa->gereja = $request->input('gereja');
        $jadwalmisa->jam = $request->input('jam');
        $jadwalmisa->kuota = $request->input('kuota');
        $jadwalmisa->save();
        return redirect('pendaftaran');
    }

    public function findjadwal($id){
        $jadwalmisa = jadwalmisa::where('id',$id)->first();
        $data = [
            'title' => 'jadwalmisa',
            'jadwalmisa' => $jadwalmisa
        ];
        return view('admin.editjadwal',$data);
    }
}
