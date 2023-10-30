<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class masterController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
            $menu = \DB::table('menu')
            ->select('*')
            ->get();

            $sub_menu = \DB::table('sub_menu')
            ->join('menu', 'menu.id', '=', 'sub_menu.id_menu')
            ->select('sub_menu.id as id','menu.name as menu','sub_menu.name as sub_menu')
            ->orderBy('sub_menu.id','DESC')
            ->get();
			
		return view('master.menu.index',['menu'=>$menu,'sub_menu'=>$sub_menu]);
    } 

    public function add_sub()
    {
        return view('master.menu.add_sub');
    }

    public function create_sub(Request $request)
     { 
        $hit = \DB::table('sub_menu')->where('name', '=', $request->name)->where('id_menu', '=', $request->id_menu)->get();
        $hit = $hit->count();

        if($hit > 0){

          return redirect()->back()->withErrors(['Error', 'Menu Sudah Ada']);

        }else{
        
            date_default_timezone_set("Asia/Jakarta");
         $peraturan = new \App\Models\sub_menu();
         $peraturan->id_menu = $request->id_menu;
         $peraturan->name = $request->name;
         $peraturan->status = $request->status;
         $peraturan->save();
 
         
         return redirect('/menu')->with('Menu Berhasil Di Buat','Success');
     }
    
    }

    public function edit_sub(Request $request, $id)
    {
            $menu = \DB::table('sub_menu')
            ->select('*')
            ->where('id', '=', $id)
            ->get();
        		
		return view('master.menu.edit_sub',['menu'=>$menu]);
    } 

    public function update_sub(Request $request, $id)
    {

            \DB::table('sub_menu')->where('id',$id)->update([
              'id_menu' => $request->id_menu,
                'name' => $request->name,
                'status' => $request->status
                ]);
               
                return redirect('/menu')->withSuccess('menu Berhasil Di Update','Success');

    }

    public function add_menu()
    {
        return view('master.menu.add_menu');
    }

    public function create(Request $request)
     { 
        $hit = \DB::table('menu')->where('name', '=', $request->name)->get();
        $hit = $hit->count();

        if($hit > 0){

          return redirect()->back()->withErrors(['Error', 'Menu Sudah Ada']);

        }else{
        
        

        if($request->icons == ''){

            return redirect()->back()->withErrors(['Error', 'icons tidak boleh kosong']);
  
          }else{

            date_default_timezone_set("Asia/Jakarta");
         $peraturan = new \App\Models\menu();
         $peraturan->name = $request->name;
         $peraturan->icons = $request->icons;
         $peraturan->status = $request->status;
         $peraturan->save();
 
         
         return redirect('/menu')->with('Menu Berhasil Di Buat','Success');
     }
    }
    }

    public function edit_menu(Request $request, $id)
    {
            $menu = \DB::table('menu')
            ->select('*')
            ->where('id', '=', $id)
            ->get();
        		
		return view('master.menu.edit_menu',['menu'=>$menu]);
    } 

    public function update_menu(Request $request, $id)
    {
        if($request->icons == ''){

            return redirect()->back()->withErrors(['Error', 'icons tidak boleh kosong']);
  
          }else{

            \DB::table('menu')->where('id',$id)->update([
                'name' => $request->name,
                'status' => $request->status,
                'icons' => $request->icons
                ]);
               
                return redirect('/menu')->withSuccess('menu Berhasil Di Update','Success');

        }
    }

}
