<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;
use App\Models\Jabatan;

class PegawaiController extends Controller
{
    public function index()
    {
        $dt = Pegawai::with('jabatan')->get();
        $data = [
            'title' => 'CSMS Administrator',
            'notif' => true,
            'dt' => $dt,
        ];
        return view('pages.pegawai.index', $data );
    }

    public function create()
    {
        $j = Jabatan::where('id','>',1)->get();
        $data = [
            'title' => 'Form CSMS Administrator',
            'notif' => true,
            'slt' => $j,
        ];
        return view('pages.pegawai.form', $data );
    }

    public function simpan(Request $req, $id)
    {
        $rl = [
            'jabatan_id' => 'required|min:1|numeric',
            'nip' => 'required | numeric ',
            'nama' => 'required|string',
            'email' => 'required|email',
            'no_hp' => 'required|numeric',
        ];
        if( $id <=0 )
            {
                $rl['password'] = 'required|min:10';
                $rl['email'] = $rl['email'].'|unique:pegawais';
            }
        $val = $req->validate($rl);
        $dt = $req->all();
        $j = Jabatan::find($dt['jabatan_id']);
        $cek = false;
        if( $j ) $cek = true;
        if( $cek )
        {
            unset( $dt['_token']);
            // unset($dt['jabatan_id']);
            $hsl = null;
            if( $id <= 0)
            {
                $dt['password'] = bcrypt( $dt['password']);
                $hsl = $j->pegawai()->create( $dt );
            } else {
                $p = Pegawai::find( $id );
                if( $p ) $hsl = $p->update( $dt );
            }
            $cek = false;
            if( $hsl) $cek = true;
        }
        if( $cek )
        {
            return redirect()->route('pegawai.index')->with('psn_sukses','Data berhasil  disimpan');
        } else {
            return redirect()->back()->withInput()->with('psn_failed','Data gagal disimpan');
        }
    }

    public function edit($id)
    {
        $dt = Pegawai::find( $id );
        $j = Jabatan::where('id','>',1)->get();
        $data = [
            'title' => 'Form Edit',
            'notif' => true,
            'dt' => $dt,
            'slt' => $j,
        ];
        return view('pages.pegawai.form', $data );
    }

    public function reset($id)
    {
        $dt = Pegawai::find( $id );
        if( ! $dt ) return back()->with('psn_failed','Data tidak ditemukan');
        $data = [
            'title' => 'Reset Password Administrator',
            'notif' => true,
            'slt' => [],
            'email' => $dt->email,
            'dt' => $dt,
        ];
        return view('pages.pegawai.reset', $data );
    }

    public function simpan_reset(Request $req, $id)
    {
        $val = $req->validate([
            'password' => 'required | min:10',
            'confirm_password' => 'required | same:password',
        ]);
        $dt = $req->all();
        // Lakukan proses update password
        $hsl = Pegawai::find( $id );
        if( ! $hsl ) return back()->with('psn_failed','Data tidak ditemukan')->withInput();
        $hsl = $hsl->update(['password' => bcrypt( $dt['password'] ) ] );
        if( $hsl ) return redirect()->route('pegawai.index')->with('psn_sukses','Password berhasil direset');
        else return back()->with('psn_failed','Password gagal direset');
    }
}
