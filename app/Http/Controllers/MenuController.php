<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Jabatan;
// use App\Helpers\HelperResponse\ReturnView;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = Menu::all();
        // ReturnView( $menus, 'Menu', 'false', 'pages.menu.index');
        $data = [
            'data' => $menus,
            'title' => 'Menu',
            'notif' => 'false',
        ];
        return view('pages.menu.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $m = Menu::getInduk()->get();
        $jbt = Jabatan::all();
        $data = [
            'title' => 'Form Tambah',
            'notif' => true,
            'dt' => null,
            'slt' => $m,
            'jbt' => $jbt,
        ];
        return view('pages.menu.form', $data );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req, $id)
    {
        $val = $req->validate([
            'nama' => 'required | string',
            'link' => 'required | string',
            'ikon' => 'required',
            'urutan' => 'required|numeric',
            'jabatan_id' => 'required | array',
        ]);
        $dt = $req->all();
        unset( $dt['_token']);
        $jbt = $dt['jabatan_id'];
        unset( $dt['jabatan_id'] );
        $hsl = null;
        if( $id <=0 )
        {
            $hsl = Menu::create( $dt );
        } else $hsl = Menu::find( $id)->update( $dt );
        if( ! $hsl ) return back()->withInput()->with('psn_failed','Menu gagal disimpan');
        if( $id )
            {
                Menu::find( $id)->jabatans()->detach();
                Menu::find($id)->jabatans()->attach( $jbt, ['updated_by' => auth()->guard('pegawai')->user()->nama]);
            } else {
                $hsl->jabatans()->attach( $jbt, ['updated_by' => auth()->guard('pegawai')->user()->nama]);
            }
        return redirect()->route('menu.index')->with('psn_sukses','Menu berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function show(Menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dt = Menu::find( $id );
        $m = Menu::getInduk()->get();
        $jbt = Jabatan::all();
        $jbtm = $dt->jabatans()->get()->pluck('id')->toArray();
        $data = [
            'title' => 'Form Edit',
            'notif' => true,
            'dt' => $dt,
            'slt' => $m,
            'jbt' => $jbt,
            'jbtm' => $jbtm,
        ];
        return view('pages.menu.form', $data );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menu $menu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu)
    {
        //
    }
}
