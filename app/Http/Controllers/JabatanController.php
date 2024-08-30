<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jabatan;

class JabatanController extends Controller
{
    public function index()
    {
        $dt = Jabatan::where('id','>',1)->get();
        $data = [
            'title' => 'Jabatan',
            'notif' => true,
            'dt' => $dt,
        ];
        return view('pages.jabatan.index', $data );
    }

    public function create()
    {
        $data = [
            'title' => 'Form Tambah',
            'notif' => true,
            'slt' => [],
        ];
        return view('pages.jabatan.form', $data );
    }

    public function simpan(Request $req, $id)
    {
        $val = $req->validate([
            'nama' => 'required | string',
        ]);
        $dt = $req->all();
        unset( $dt['_token'] );
        $hsl = Jabatan::create( $dt );
        if( $hsl ) return redirect()->route('jabatan.index')->with('psn_sukses','Jabatan berhasil disimpan');
        else return back()->withInput()->with('psn_failed','Jabatan Gagal disimpan');
    }

    public function edit($id)
    {
        $dt = Jabatan::find( $id );
        $data = [
            'title' => 'Form Edit',
            'notif' => true,
            'dt' => $dt,
            'slt' => [],
        ];
        return view('pages.jabatan.form', $data );
    }
}