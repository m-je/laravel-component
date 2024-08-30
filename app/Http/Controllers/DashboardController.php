<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use App\Helpers\Skor;
use App\Models\Kontraktor;

class DashboardController extends Controller
{
    public function index()
    {
        // $s = new Skor(0);
        // $rendah = $s->getLevel('r');
        // $sedang = $s->getLevel('s');
        // $tinggi = $s->getLevel('t');
        // $tl = $s->getLevel('tl');
        // $k = Kontraktor::all();
        // $dt = [
        //     'kon' => count( $k ),
        //     'jml_tinggi' => $tinggi['jml'],
        //     'jml_sedang' => $sedang['jml'],
        //     'jml_rendah' => $rendah['jml'],
        // ];
        // $iddt = [
        //     'tinggi' => $tinggi['id'],
        //     'sedang' => $sedang['id'],
        //     'rendah' => $rendah['id'],
        // ];
        $dt = [
            'kon' => 10,
            'jml_tinggi' => 5,
            'jml_sedang' => 3,
            'jml_rendah' => 2,
        ];
        $iddt = [
            'tinggi' => [],
            'sedang' => [],
            'rendah' => [],
        ];

    
        $data = [
            'title' => 'Dashboard',
            'notif' => true,
            'dt' => $dt,
            'iddt' => $iddt,
        ];
        return view('pages.dashboard.pegawai', $data);
    }

    public function ganti()
    {
        $data = [
            'title' => 'Ganti Password',
            'notif' => true,

        ];
        return view('pages.dashboard.sandi',$data );
    }

    public function ganti_sandi(Request $req)
    {
        $val = $req->validate([
            'password' => 'required',
            'password_baru' => 'required|regex:/^[a-zA-Z0-9]+$/',
            'password_konfirm' => 'required '
        ]);
        if( trim( $req['password_baru']) != trim( $req['password_konfirm']) )
            return back()->with('psn_failed','Password baru dan Konfirmasi password tidak sesuai');
        $cek = false;
        $dt = null;
        if( auth()->guard('kontraktor')->check())
        {
            $dt = auth()->guard('kontraktor')->user();
        } else if( auth()->guard('pegawai')->check() )
        {
            $dt = auth()->guard('pegawai')->user();
        }
        $dtreq = $req->all();
        $pass = $dtreq['password'];
        
        if( Hash::check( $pass, $dt->password ))
        {
            $dt_upd = [
                'password' => bcrypt( $dtreq['password_baru'] ),
            ];
            $hsl = $dt->update( $dt_upd);
            if( $hsl ) $cek = true;
        } else return back()->with('psn_failed','Password lama anda salah');
        if( $cek ) return redirect()->route('dashboard.sandi')->with('psn_sukses','Password berhasil di ganti');
        else return back()->with('psn_failed','Password gagal diganti');
    }
}
