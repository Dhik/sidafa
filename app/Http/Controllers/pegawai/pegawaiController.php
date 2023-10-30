<?php

namespace App\Http\Controllers\pegawai;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Models\pegawai;
use Illuminate\Support\Facades\Storage;
use App\Models\roles;
use App\Models\users_new;

class pegawaiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function trainer()
    {
      $users = \DB::table('user_roles')
      ->join('users', 'users.id', '=', 'user_roles.id_user')
      ->join('roles', 'user_roles.id_role', '=',  'roles.id')
      ->join('pegawai', 'pegawai.id_user', '=',  'users.id')
      ->select('users.name as name','users.email as email', 
      'roles.role_user as roles_name','roles.id as id_role', 'users.id as id',
      'pegawai.jabatan','pegawai.id_instansi','pegawai.bagian','pegawai.file',
      'pegawai.no_tlp','pegawai.alamat')
        ->where('roles.id', '=', 3)
        ->get();

            $roles = \DB::table('roles')
            ->select('*')
            ->orderBy('id','DESC')
            ->get();
			
		return view('master.user_management.users.trainer',['users'=>$users,'roles'=>$roles]);
    } 

    public function edit_trainer(Request $request, $id)
    {
            $users = \DB::table('user_roles') $users = \DB::table('user_roles')
            ->join('users', 'users.id', '=', 'user_roles.id_user')
            ->join('roles', 'user_roles.id_role', '=',  'roles.id')
            ->join('pegawai', 'pegawai.id_user', '=',  'users.id')
            ->select('users.name as name','users.email as email', 
            'roles.role_user as roles_name','roles.id as id_role', 'users.id as id',
            'pegawai.jabatan','pegawai.id_instansi','pegawai.bagian','pegawai.file',
            'pegawai.no_tlp','pegawai.alamat')
            ->where('users.id', '=', $id)
            ->get();
        		
		return view('master.user_management.users.edit_trainer',['users'=>$users]);
    } 
    
    public function edit_peserta(Request $request, $id)
    {
            $users = \DB::table('user_roles') $users = \DB::table('user_roles')
            ->join('users', 'users.id', '=', 'user_roles.id_user')
            ->join('roles', 'user_roles.id_role', '=',  'roles.id')
            ->join('pegawai', 'pegawai.id_user', '=',  'users.id')
            ->select('users.name as name','users.email as email', 
            'roles.role_user as roles_name','roles.id as id_role', 'users.id as id',
            'pegawai.jabatan','pegawai.id_instansi','pegawai.bagian','pegawai.file',
            'pegawai.no_tlp','pegawai.alamat')
            ->where('users.id', '=', $id)
            ->get();
        		
		return view('master.user_management.users.edit_peserta',['users'=>$users]);
    } 
    
    public function peserta()
    {
            $users = \DB::table('user_roles') $users = \DB::table('user_roles')
            ->join('users', 'users.id', '=', 'user_roles.id_user')
            ->join('roles', 'user_roles.id_role', '=',  'roles.id')
            ->join('pegawai', 'pegawai.id_user', '=',  'users.id')
            ->select('users.name as name','users.email as email', 
            'roles.role_user as roles_name','roles.id as id_role', 'users.id as id',
            'pegawai.jabatan','pegawai.id_instansi','pegawai.bagian','pegawai.file',
            'pegawai.no_tlp','pegawai.alamat')
            ->where('roles.id', '=', 4)
            ->get();
        		
		return view('master.user_management.users.peserta',['users'=>$users]);
    } 
    

    //update listuser
    public function update_trainer(Request $request, $id)
    {
      //cek password ada tidak
      if(empty($request->password)){
        
        $users = \App\Models\users_new::findOrFail($id);
             \DB::table('users')->where('id',$id)->update([
                'name' => $request->name,
                'email' => $request->email
                 ]);
        
        $hit = \DB::table('user_roles')->where('id_user', '=', $id)->get();
        foreach($hit as $a){
                $roles = \DB::table('user_roles')->where('id_user',$id)->update([
                    'id_role' => $request->id_role
                     ]);
         }

         $file = $request->file('file');

         if(empty($file)){

          $hit = \DB::table('pegawai')->where('id_user', '=', $id)->get();
        foreach($hit as $a){
              $pegawai = \DB::table('pegawai')->where('id_user',$id)->update([
                'jabatan' => $request->jabatan,
                'bagian' => $request->bagian,
                'id_instansi' => $request->id_instansi,
                'alamat' => $request->alamat,
                'not_tlp' => $request->no_tlp
                 ]); 
                 
        return redirect('/trainer')->with('success', 'Data Berhasil Update');
        }
        

         }else{
          $validator = Validator::make($request->all(), [
            "file" => 'mimes:jpg,jpeg,png,bmp,tiff |max:4096',
        ]);
  
        if ($validator->fails()) {
            return redirect()->back()->withErrors(['Error', 'Upload gagal Karena file yang diupload bukan images dan ukuran melebihi 2048']);  
        }
     
        $filenameWithExt = $request->file('file')->getClientOriginalName();
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        $extension = $request->file('file')->getClientOriginalExtension();
        $filenameSimpan = $filename.'_'.time().'.'.$extension;
        $path = $request->file('file')->storeAs('public/foto', $filenameSimpan);

        $hit = \DB::table('pegawai')->where('id_user', '=', $id)->get();
        foreach($hit as $a){
              $pegawai = \DB::table('pegawai')->where('id_user',$id)->update([
                'jabatan' => $request->jabatan,
                'bagian' => $request->bagian,
                'id_instansi' => $request->id_instansi,
                'alamat' => $request->alamat,
                'not_tlp' => $request->no_tlp,
                'file' => $filenameSimpan
                 ]); 
                 return redirect('/trainer')->with('success', 'Data Berhasil Update');
          }
          
        }                
                     

      }else{

        $pass=$request->password;
        $uppercase = preg_match('@[A-Z]@', $pass);
        $lowercase = preg_match('@[a-z]@', $pass);
        $number    = preg_match('@[0-9]@', $pass);
  
        if(!$uppercase || !$lowercase || !$number || strlen($pass) <=6 ){
  
          return redirect()->back()->withErrors(['Error', 'Password Wajib minimum 8 Character dan mengandung huruf BESAR, huruf kecil dan angka']);
  
        }else{
  

        $users = \App\Models\users_new::findOrFail($id);
             \DB::table('users')->where('id',$id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password))
                 ]);
        
        $roles = \App\Models\user_roles::findOrFail($request->id_role);
                 \DB::table('user_roles')->where('id_user',$id)->update([
                    'id_role' => $request->id_role
                     ]);

                     $file = $request->file('file');

                     if(empty($file)){
            
                      $hit = \DB::table('pegawai')->where('id_user', '=', $id)->get();
                    foreach($hit as $a){
                          $pegawai = \DB::table('pegawai')->where('id_user',$id)->update([
                            'jabatan' => $request->jabatan,
                            'bagian' => $request->bagian,
                            'id_instansi' => $request->id_instansi,
                            'alamat' => $request->alamat,
                            'not_tlp' => $request->no_tlp
                             ]); 
                    }
                    
                    return redirect('/trainer')->with('success', 'Data Berhasil Update');
            
                     }else{
                      $validator = Validator::make($request->all(), [
                        "file" => "required|mimes:pdf|max:3024",
                    ]);
              
                    if ($validator->fails()) {
                        return redirect()->back()->withErrors(['Error', 'Upload gagal Karena file yang diupload bukan pdf dan ukuran melebihi 2048']);  
                    }
                 
                    $filenameWithExt = $request->file('file')->getClientOriginalName();
                    $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                    $extension = $request->file('file')->getClientOriginalExtension();
                    $filenameSimpan = $filename.'_'.time().'.'.$extension;
                    $path = $request->file('file')->storeAs('public/tugas', $filenameSimpan);
            
                    $hit = \DB::table('pegawai')->where('id_user', '=', $id)->get();
                    foreach($hit as $a){
                          $pegawai = \DB::table('pegawai')->where('id_user',$id)->update([
                            'jabatan' => $request->jabatan,
                            'pemda' => $request->pemda,
                            'instansi' => $request->instansi,
                            'pangkat' => $request->pangkat,
                            'file' => $filenameSimpan
                             ]); 
                      }
                      
                    return redirect('/trainer')->with('success', 'Data Berhasil Update'); 
                    } 

      }

      }

    }

    public function update_peserta(Request $request, $id)
    {
      //cek password ada tidak
      if(empty($request->password)){
        
        $users = \App\Models\users_new::findOrFail($id);
             \DB::table('users')->where('id',$id)->update([
              'nip' => $request->nip,
                'name' => $request->name,
                'email' => $request->email
                 ]);
        
        $hit = \DB::table('user_roles')->where('id_user', '=', $id)->get();
        foreach($hit as $a){
                $roles = \DB::table('user_roles')->where('id_user',$id)->update([
                    'id_role' => $request->id_role
                     ]);
         }

         $file = $request->file('file');

         if(empty($file)){

          $hit = \DB::table('pegawai')->where('id_user', '=', $id)->get();
        foreach($hit as $a){
              $pegawai = \DB::table('pegawai')->where('id_user',$id)->update([
                'jabatan' => $request->jabatan,
                'pemda' => $request->pemda,
                'instansi' => $request->instansi,
                'pangkat' => $request->pangkat
                 ]); 
                 
        return redirect('/peserta')->with('success', 'Data Berhasil Update');
        }
        

         }else{
          $validator = Validator::make($request->all(), [
            "file" => "required|mimes:pdf|max:3024",
        ]);
  
        if ($validator->fails()) {
            return redirect()->back()->withErrors(['Error', 'Upload gagal Karena file yang diupload bukan pdf dan ukuran melebihi 2048']);  
        }
     
        $filenameWithExt = $request->file('file')->getClientOriginalName();
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        $extension = $request->file('file')->getClientOriginalExtension();
        $filenameSimpan = $filename.'_'.time().'.'.$extension;
        $path = $request->file('file')->storeAs('public/tugas', $filenameSimpan);

        $hit = \DB::table('pegawai')->where('id_user', '=', $id)->get();
        foreach($hit as $a){
              $pegawai = \DB::table('pegawai')->where('id_user',$id)->update([
                'jabatan' => $request->jabatan,
                'pemda' => $request->pemda,
                'instansi' => $request->instansi,
                'pangkat' => $request->pangkat,
                'file' => $filenameSimpan
                 ]); 
                 return redirect('/peserta')->with('success', 'Data Berhasil Update');
          }
          
        }                
                     

      }else{

        $pass=$request->password;
        $uppercase = preg_match('@[A-Z]@', $pass);
        $lowercase = preg_match('@[a-z]@', $pass);
        $number    = preg_match('@[0-9]@', $pass);
  
        if(!$uppercase || !$lowercase || !$number || strlen($pass) <=6 ){
  
          return redirect()->back()->withErrors(['Error', 'Password Wajib minimum 8 Character dan mengandung huruf BESAR, huruf kecil dan angka']);
  
        }else{
  

        $users = \App\Models\users_new::findOrFail($id);
             \DB::table('users')->where('id',$id)->update([
              'nip' => $request->nip,
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password))
                 ]);
        
        $roles = \App\Models\user_roles::findOrFail($request->id_role);
                 \DB::table('user_roles')->where('id_user',$id)->update([
                    'id_role' => $request->id_role
                     ]);

                     $file = $request->file('file');

                     if(empty($file)){
            
                      $hit = \DB::table('pegawai')->where('id_user', '=', $id)->get();
                    foreach($hit as $a){
                          $pegawai = \DB::table('pegawai')->where('id_user',$id)->update([
                            'jabatan' => $request->jabatan,
                            'pemda' => $request->pemda,
                            'instansi' => $request->instansi,
                            'pangkat' => $request->pangkat
                             ]); 
                    }
                    
                    return redirect('/peserta')->with('success', 'Data Berhasil Update');
            
                     }else{
                      $validator = Validator::make($request->all(), [
                        "file" => "required|mimes:pdf|max:3024",
                    ]);
              
                    if ($validator->fails()) {
                        return redirect()->back()->withErrors(['Error', 'Upload gagal Karena file yang diupload bukan pdf dan ukuran melebihi 2048']);  
                    }
                 
                    $filenameWithExt = $request->file('file')->getClientOriginalName();
                    $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                    $extension = $request->file('file')->getClientOriginalExtension();
                    $filenameSimpan = $filename.'_'.time().'.'.$extension;
                    $path = $request->file('file')->storeAs('public/tugas', $filenameSimpan);
            
                    $hit = \DB::table('pegawai')->where('id_user', '=', $id)->get();
                    foreach($hit as $a){
                          $pegawai = \DB::table('pegawai')->where('id_user',$id)->update([
                            'jabatan' => $request->jabatan,
                            'pemda' => $request->pemda,
                            'instansi' => $request->instansi,
                            'pangkat' => $request->pangkat,
                            'file' => $filenameSimpan
                             ]); 
                      }
                      
                    return redirect('/peserta')->with('success', 'Data Berhasil Update'); 
                    } 

      }

      }

    }


    public function destroy_trainer($id)
    {

      \DB::delete('delete from user_roles where id_user = ?', [$id]);

      \DB::delete('delete from users where id = ?', [$id]);

    return redirect()->back()->withSuccess('Deleted Success.');
    }

    public function destroy_peserta($id)
    {

      \DB::delete('delete from user_roles where id_user = ?', [$id]);

      \DB::delete('delete from users where id = ?', [$id]);

    return redirect()->back()->withSuccess('Deleted Success.');
    }
}
