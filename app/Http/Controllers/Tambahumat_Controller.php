<?php

namespace App\Http\Controllers;

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
            'warga'=>'required',
            'negara'=>'required',
            'nik'=>'required',
            'no_kk'=>'required',
            'tgl_lahir'=>'required',
            'jns_kelamin'=>'required',
            'ling'=>'required',
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
            'warga'=>'required',
            'negara'=>'required',
            'nik'=>'required',
            'no_kk'=>'required',
            'tgl_lahir'=>'required',
            'jns_kelamin'=>'required',
            'ling'=>'required',
            'images'=>'required',
        ]);

        $post = umat::findid($request->id);
        if($image = $request->file('images')){
            $request->validate([
              'images' => 'required|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            $imgname = $request->id . "" ."slider".".". $request->file('images')->getClientOriginalExtension();
            $destinationPath = 'umat/';
            $image->move($destinationPath, $imgname);
            umat::where('id',$request->id)->update([
                'nama_umat' => $request->nama_umat,
                'warga' => $request->warga,
                'negara' => $request->negara,
                'nik' => $request->nik,
                'no_kk' => $request->no_kk,
                'tgl_lahir' => $request->tgl_lahir,
                'jns_kelamin' => $request->jns_kelamin,
                'ling' => $request->ling,
                'images' => $imgname,
            ]);
        }else {
            umat::where('id',$request->id)->update([
                'nama_umat' => $request->nama_umat,
                'warga' => $request->warga,
                'negara' => $request->negara,
                'nik' => $request->nik,
                'no_kk' => $request->no_kk,
                'tgl_lahir' => $request->tgl_lahir,
                'jns_kelamin' => $request->jns_kelamin,
                'ling' => $request->ling,
            ]);
        }

        return redirect('/tambahumat');
    }

}
