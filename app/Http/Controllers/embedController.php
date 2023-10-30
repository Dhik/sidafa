<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class embedController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
            $embed = \DB::table('embed')
            ->join('menu', 'menu.id', '=', 'embed.id_menu')
            ->join('sub_menu', 'sub_menu.id', '=', 'embed.id_sub_menu')
            ->select('menu.name as menu','sub_menu.name as sub_menu',
            'embed.name as name','embed.iframe as iframe','embed.status as status',
            'embed.id as id','embed.keterangan as keterangan')
            ->orderBy('embed.id','DESC')
            ->get();
			
		return view('master.embed.index',['embed'=>$embed]);
    } 

    public function add_embed()
    {
        $menu = \DB::table('menu')
            ->select('*')
            ->where('name', '<>', 'Beranda')
            ->get();
			
		return view('master.embed.add_embed',['menu'=>$menu]);
    }

    public function edit_embed(Request $request, $id)
    {
        $embed = \DB::table('embed')
            ->join('menu', 'menu.id', '=', 'embed.id_menu')
            ->join('sub_menu', 'sub_menu.id', '=', 'embed.id_sub_menu')
            ->select('menu.name as menu','sub_menu.name as sub_menu','embed.id_sub_menu as id_sub_menu',
            'embed.name as name','embed.iframe as iframe','embed.status as status','embed.id_menu as id_menu',
            'embed.id as id','embed.keterangan as keterangan')
            ->where('embed.id','=',$id)
            ->get();
        
            $menu = \DB::table('menu')
            ->select('*')
            ->get();

            $smenu = \DB::table('sub_menu')
            ->select('*')
            ->get();
			
		return view('master.embed.edit_embed',['embed'=>$embed, 'menu'=>$menu,'smenu'=>$smenu]);
    }

    public function create_embed(Request $request)
    {

      $hit = \DB::table('embed')->where('id_sub_menu', '=', $request->course)->get();
        $hit = $hit->count();
        
        if($hit > 0){
        
            return redirect()->back()->withErrors(['Error', 'Sub Menu Sudah ada']);

        }else{
           

        $user = new \App\Models\embed();
        $user->id_menu = $request->menu;
        $user->id_sub_menu = $request->course;
        $user->name = $request->name;
        $user->iframe = $request->iframe;
        $user->keterangan = $request->content;
        $user->status = 1;
        $user->save();

        return redirect('/embed')->with('success', 'Data Berhasil Disimpan'); 
      }

    }

    public function update_embed(Request $request, $id)
    {

            \DB::table('embed')->where('id',$id)->update([
                'id_menu' => $request->menu,
                'id_sub_menu' => $request->sub_menu,
                'name' => $request->name,
                'iframe' => $request->iframe,
                'keterangan' => $request->content,
                'status' => 1
                  ]);
                 
        return redirect('/embed')->with('success', 'Data Berhasil Update');
    }

public function destroy($id)
    {

      \DB::delete('delete from embed where id = ?', [$id]);

    return redirect()->back()->withSuccess('Deleted Success.');
    }

}
