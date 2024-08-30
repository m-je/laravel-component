<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use App\Models\Kontraktor;
use Illuminate\Http\Request;

use Validator;
use Hash;

use Mail;
use Str;

use App\Mail\LupaMail;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.login.index');
    }

    public function proses(Request $req, $jns)
    {
        $val = Validator::make($req->all(), [
            'username' => 'required|email',
            'password' => 'required|min:8',
        ]);
        if( $val->fails() )
        {
            return response()->json([
                'status' => 0,
                'redirek' => '',
                'message' => $val->errors(),
            ]);
        }
        // return response()->json(['data' => $req->all()]);
        $hsl = null;
        if( $jns == "pegawai" )
        {
            $hsl = Pegawai::where('email', $req->username)->first();
        } else {
            $hsl = Kontraktor::where('email', $req->username)->first();
        }
        $cek = False;
        if( $hsl ){
            $cek = Hash::check( $req->password, $hsl->password);
        }
        if( $cek ){
            $cek = null;
            $dt_input = $req->all();
            unset( $dt_input['_token'] );
            $dt_input['email'] = $dt_input['username'];
            unset( $dt_input['username'] );
            $rememberme = true;
            $cek = auth()->guard( $jns )->attempt($dt_input, $rememberme);
        }
        if( $cek )
        {
            $redirek = url('dashboard');
            // $redirek = url('product');
            $jbt = auth()->guard( $jns )->user()->jabatan->nama;
            $jbt = strtolower( $jbt );
            if( substr_count($jbt,"kontraktor") > 0) $redirek = url('kontraktor');
            else if( substr_count($jbt,"purcashing") > 0) $redirek = url('purcashing');
            // else $redirek = url('dashboard');
            else $redirek = url('product');
            return response()->json([
                'status' => 1,
                'redirek' => $redirek,
            ]);
        }
        return response()->json([
            'status' => 0,
            'redirek' => '',
        ]);

    }

    public function lupa(Request $req)
    {
        $val = Validator::make($req->all(), [
            'email' => 'required | email',
        ]);
        $bls = [
            'status' => 0,
            'pesan' => '',
        ];
        if( $val->fails() )
        {
            $bls['pesan'] = 'Email tidak valid';
        }
        $dt = $req->all();
        $cek = Pegawai::where('email', $dt['email'])->get();
        $cek1 = Kontraktor::where('email', $dt['email'] )->get();
        if( count( $cek ) <= 0 && count( $cek1 ) <= 0 ) $bls['pesan'] = "Email belum terdaftar";
        else {
            $bls['status'] = 1;
            $bls['pesan'] = "password baru telah dikirimkan ke Email anda";
        }
        unset( $dt['_token'] );
        $dt['pwd'] = Str::random(10);
        // lakukan proses perubahan password pada akun
        $hsl = null;
        $pwd_baru = bcrypt( $dt['pwd'] );
        if( count( $cek)) $hsl = $cek[0]->update(['password' => $pwd_baru ]);
        else if( count( $cek1 ) ) $hsl = $cek1[0]->update(['password' => $pwd_baru ]);

        if( $hsl ) Mail::to( $dt['email'] )->send( new LupaMail( $dt ) );
        return response()->json( $bls );
    }
}