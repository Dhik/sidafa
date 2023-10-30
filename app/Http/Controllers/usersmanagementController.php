<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Validator;
use App\Models\roles;
use App\Models\users_new;
use App\Models\pegawai;

class usersmanagementController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
            $users = \DB::table('user_roles')
            ->join('users', 'users.id', '=', 'user_roles.id_user')
            ->join('roles', 'user_roles.id_role', '=',  'roles.id')
            ->select('users.name as name','users.email as email', 
            'roles.role_user as roles_name','roles.id as id_role',
             'users.id as id')
            ->get();

            $roles = \DB::table('roles')
            ->select('*')
            ->orderBy('id','DESC')
            ->get();
			
		return view('master.user_management.users.index',['users'=>$users,'roles'=>$roles]);
    } 

    public function create(Request $request)
     { 
        $hit = \DB::table('roles')->where('role_user', '=', $request->role_user)->get();
        $hit = $hit->count();

        if($hit > 0){

          return redirect()->back()->withErrors(['Error', 'Roles Sudah Ada']);

        }else{

            date_default_timezone_set("Asia/Jakarta");
         $peraturan = new \App\Models\roles();
         $peraturan->role_user = $request->role_user;
         $peraturan->status = '1';
         $peraturan->save();
 
         
         return redirect('/users')->with('Role Berhasil Di Buat','Success');
     }
    }

    public function register()
    {
        return view('master.user_management.users.register');
    }

    public function add()
    {
        return view('master.user_management.roles.add');
    }


    public function create_users(Request $request)
    {

      $hit = \DB::table('users')->where('email', '=', $request->email)->get();
        $hit = $hit->count();

        if($hit > 0){

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
      $path = $request->file('file')->storeAs('public/foto', $filenameSimpan);

        $user = new \App\Models\users_new();
        $user->name = $request->name;
        $user->password = bcrypt($request->password);
        $user->email = $request->email;
        $user->gender = $request->gender;
        $user->remember_token = bcrypt('1234');
        $user->status = $request->status;
        $user->save();
    
        $rolesa = new \App\Models\user_roles();
        $rolesa->id_user = $user->id;
        $rolesa->id_role = $request->id_role;
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

        return redirect('/users')->with('success', 'Data Berhasil Disimpan'); 


      }

        }
                   
    }

    public function edit_users(Request $request, $id)
    {
            $users = \DB::table('user_roles')
            ->join('users', 'users.id', '=', 'user_roles.id_user')
            ->join('roles', 'user_roles.id_role', '=',  'roles.id')
            ->join('pegawai', 'pegawai.id_user', '=',  'users.id')
            ->select('users.name as name','users.email as email', 'users.gender as gender',
            'roles.role_user as roles_name','roles.id as id_role', 'users.id as id','users.status as status',
            'pegawai.jabatan','pegawai.id_instansi','pegawai.bagian','pegawai.file',
            'pegawai.no_tlp','pegawai.alamat')
            ->where('users.id', '=', $id)
            ->get();
        		
		return view('master.user_management.users.edit_users',['users'=>$users]);
    }    

    public function edit(Request $request, $id)
    {
            $roles = \DB::table('roles')
            ->select('*')
            ->where('id', '=', $id)
            ->get();
        		
		return view('master.user_management.roles.edit',['roles'=>$roles]);
    }    

    //update listuser
    public function update_users(Request $request, $id)
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
                'no_tlp' => $request->no_tlp
                 ]); 
                 
        return redirect('/users')->with('success', 'Data Berhasil Update');
        }
        

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
        $path = $request->file('file')->storeAs('public/foto', $filenameSimpan);

        $hit = \DB::table('pegawai')->where('id_user', '=', $id)->get();
        foreach($hit as $a){
              $pegawai = \DB::table('pegawai')->where('id_user',$id)->update([
                'jabatan' => $request->jabatan,
                'bagian' => $request->bagian,
                'id_instansi' => $request->id_instansi,
                'alamat' => $request->alamat,
                'no_tlp' => $request->no_tlp,
                'file' => $filenameSimpan
                 ]); 
                 return redirect('/users')->with('success', 'Data Berhasil Update');
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
                'password' => bcrypt($request->password)
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
                            'no_tlp' => $request->no_tlp
                             ]); 
                    }
                    
                    return redirect('/users')->with('success', 'Data Berhasil Update');
            
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
                    $path = $request->file('file')->storeAs('public/foto', $filenameSimpan);
            
                    $hit = \DB::table('pegawai')->where('id_user', '=', $id)->get();
                    foreach($hit as $a){
                          $pegawai = \DB::table('pegawai')->where('id_user',$id)->update([
                            'jabatan' => $request->jabatan,
                            'bagian' => $request->bagian,
                            'id_instansi' => $request->id_instansi,
                            'alamat' => $request->alamat,
                            'no_tlp' => $request->no_tlp,
                            'file' => $filenameSimpan
                             ]); 
                      }
                      
                    return redirect('/users')->with('success', 'Data Berhasil Update'); 
                    } 

      }

      }

    }

    public function update(Request $request, $id)
    {
        $hit = \DB::table('roles')->where('role_user', '=', $request->role_user)->get();
        $hit = $hit->count();

        if($hit > 0){

          return redirect()->back()->withErrors(['Error', 'Roles Sudah ada']);

        }else{

            \DB::table('roles')->where('id',$id)->update([
                'role_user' => $request->role_user
                ]);
               
                return redirect('/users')->withSuccess('Roles Berhasil Di Update','Success');

        }
    }

    public function destroy_users($id)
    {

      \DB::delete('delete from user_roles where id_user = ?', [$id]);

      \DB::delete('delete from users where id = ?', [$id]);

      \DB::delete('delete from pegawai where id_user = ?', [$id]);

    return redirect()->back()->withSuccess('Deleted Success.');
    }

    public function destroy($id)
    {

      \DB::delete('delete from roles where id = ?', [$id]);

    return redirect()->back()->withSuccess('Deleted Success.');
    }

}
