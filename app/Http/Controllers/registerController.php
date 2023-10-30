<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\pegawai;
use Illuminate\Support\Facades\Storage;
use App\Models\roles;
use App\Models\users_new;


class registerController extends Controller
{
    public function register_new(Request $request)
    {

      $hit = \DB::table('users')->where('email', '=', $request->email)->get();
        $hit = $hit->count();
        
        $hita = \DB::table('users')->where('email', '=', $request->email)->get();
        $hita = $hita->count();


        if($hit > 0){
        
            return redirect()->back()->withErrors(['Error', 'email Sudah Terdaftar']);

        }else if($hita > 0){
        
            return redirect()->back()->withErrors(['Error', 'Email Sudah Terdaftar']);

        }else{

          
      $pass=$request->password;
      $uppercase = preg_match('@[A-Z]@', $pass);
      $lowercase = preg_match('@[a-z]@', $pass);
      $number    = preg_match('@[0-9]@', $pass);

      if(!$uppercase || !$lowercase || !$number || strlen($pass) <=6 ){

        return redirect()->back()->withErrors(['Error', 'Password Wajib minimum 8 Character dan mengandung huruf BESAR, huruf kecil dan angka']);

      }else{

        $validator = Validator::make($request->all(), [
          "file" => 'mimes:jpg,jpeg,png,bmp,tiff |max:4096',
      ]);

      if ($validator->fails()) {
          return redirect()->back()->withErrors(['Error', 'Upload gagal Karena file yang diupload bukan pdf dan ukuran melebihi 2048']);  
      }
   
      $filenameWithExt = $request->file('file')->getClientOriginalName();
      $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
      $extension = $request->file('file')->getClientOriginalExtension();
      $filenameSimpan = $filename.'_'.time().'.'.$extension;
      $path = $request->file('file')->storeAs('/public/foto', $filenameSimpan);

        $user = new \App\Models\users_new();
        $user->name = $request->name;
        $user->gender = $request->gender;
        $user->password = bcrypt($request->password);
        $user->email = $request->email;
        $user->status = $request->status;
        $user->remember_token = bcrypt('1234');
        $user->save();
    
        $rolesa = new \App\Models\user_roles();
        $rolesa->id_user = $user->id;
        $rolesa->id_role = 4;
        $rolesa->save();

        $pegawai = new \App\Models\pegawai();
        $pegawai->id_user = $user->id;
        $pegawai->id_instansi = $request->id_instansi;
        $pegawai->bagian = $request->bagian;
        $pegawai->jabatan = $request->jabatan;
        $pegawai->no_tlp = $request->no_tlp;
        $pegawai->alamat = $request->alamat;
        $pegawai->file = $filenameSimpan;
        $pegawai->save();

        return redirect('/home')->with('success', 'Data Berhasil Disimpan'); 


      }

        }
                   
    }
    
}
