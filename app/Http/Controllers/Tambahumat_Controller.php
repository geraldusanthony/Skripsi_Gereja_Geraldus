<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\umat;

class Tambahumat_Controller extends Controller
{
    public function tambahumat(){
        return view('admin.tambahumat');
    }

    public function findid($id){
        $umat = umat::where('id',$id)->first();
        $data = [
            'title' => 'umat',
            'umat' => $umat
        ];
        return view('admin.editumat',$data);
    }
    
    public function deleteumat($id){
        umat::where('id',$id)->delete();
        return redirect()->back();
    }

    public function tambahdata(Request $request)
    {
        $request->validate([
            'nama_umat'=>'required',
            'nama_bpts'=>'required',
            'warga'=>'required',
            'negara'=>'required',
            'nik'=>'required',
            'no_kk'=>'required',
            'jns_kelamin'=>'required',
            'ling'=>'required',
            'tgl_lahir'=>'required',
            'tmp_lhr'=>'required',
            'gol_darah'=>'required',
            'alamat'=>'required',
            'kota_kab'=>'required',
            'kec'=>'required',
            'kel'=>'required',
            'no_hp'=>'required',
            'email'=>'required',
            'pend'=>'required',
            'pekerjaan'=>'required',
            'images'=>'required',
            // 'gambar'=>'required|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        $input = $request->all();
        $image = $request->file('images');
        $destinationPath = 'umat/';
        $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
        $input['images'] = "$profileImage";
        $data=umat::create($input);
        $nama =$data->id . "" ."slider". "." . $image->getClientOriginalExtension();
        umat::where('id', $data->id)->update(['images' => $nama]);
        $image->move($destinationPath, $nama);
        // return $input;
        return redirect('/tambahumat');
    }

    public function editumat(Request $request)
    {
        $request->validate([
            'nama_umat'=>'required',
            'nama_bpts'=>'required',
            'warga'=>'required',
            'negara'=>'required',
            'nik'=>'required',
            'no_kk'=>'required',
            'jns_kelamin'=>'required',
            'ling'=>'required',
            'tgl_lahir'=>'required',
            'tmp_lhr'=>'required',
            'gol_darah'=>'required',
            'alamat'=>'required',
            'kota_kab'=>'required',
            'kec'=>'required',
            'kel'=>'required',
            'no_hp'=>'required',
            'email'=>'required',
            'pend'=>'required',
            'pekerjaan'=>'required',
            'images'=>'required',
        ]);

        $post = umat::find($request->id);
     
            if($image = $request->file('images')){
                $request->validate([
                  'images' => 'required|mimes:jpg,png,jpeg,gif,svg|max:2048',
                ]);
                $imgname = $request->id . "_" ."umat".".". $request->file('images')->getClientOriginalExtension();
                $destinationPath = 'umat/';
                $image->move($destinationPath, $imgname);
                $post->images = $imgname;
            }
            $post->nama_umat=$request->nama_umat;
            $post->nama_bpts=$request->nama_bpts;
            $post->warga = $request->warga;
            $post->negara = $request->negara;
            $post->nik = $request->nik;
            $post->no_kk = $request->no_kk;
            $post->jns_kelamin =$request->jns_kelamin;
            $post->ling = $request->ling;
            $post->tgl_lahir = $request->tgl_lahir;
            $post->tmp_lhr = $request->tmp_lhr;
            $post->gol_darah = $request->gol_darah;
            $post->alamat = $request->alamat;
            $post->kota_kab = $request->kota_kab;
            $post->kec = $request->kec;
            $post->kel = $request->kel;
            $post->no_hp = $request->no_hp;
            $post->email = $request->email;
            $post->pend = $request->pend;
            $post->pekerjaan = $request->pekerjaan;
            $post->save();
            return redirect('/daftarumat');
        } 
    }


