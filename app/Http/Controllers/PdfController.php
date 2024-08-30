<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PDF\Sertifikat;
use App\Helpers\Skor;
use App\Models\Prekualifikasi;


class PdfController extends Controller
{
    public function index(Request $req)
    {
        $val = $req->validate([
            'id' => 'required | numeric | min:1',
        ]);
        $dt = $req->all();
        $id = $dt['id'];
        $pr = Prekualifikasi::find( $id );
        $s = new Skor( $pr->score );
        $konid = auth()->guard('kontraktor')->user()->id;
        if( $pr->kontraktor->id == $konid && $s->get()['huruf'] != "-" )
        {
            $pdf = new Sertifikat();
            $pdf->addPage();
            $pdf->content( $pr, $s->get() );
            $pdf->output('sertifikat.pdf','I');
        } else {
            return back()->with('psn_failed','Anda tidak diizinkan download sertifikat');
        }
    }

    public function pegawai($id)
    {
        if( ! auth()->guard('pegawai')->check())
        {
            abort('404');
        }
        $pr = Prekualifikasi::find( $id );
        $cek = false;
        if( $pr)
        {
            $s = new Skor( $pr->score );
            if( $s->get()['huruf'] != "-" ) $cek = true;
        }
        if( $cek )
        {
            $cek = false;
            $pdf = new Sertifikat();
            $pdf->addPage();
            $pdf->content( $pr, $s->get() );
            $pdf->output('sertifikat.pdf','I');
        } else {
            abort('404');
        }
    }
}
