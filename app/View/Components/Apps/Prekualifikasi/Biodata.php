<?php

namespace App\View\Components\Apps\Prekualifikasi;

use Illuminate\View\Component;
use App\Models\Jabatan;
use App\Models\Kontraktor;

class Biodata extends Component
{
    public $mdl;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->mdl = [
            'kode' => auth()->guard('kontraktor')->user()->kode,
            'nama_pt' => auth()->guard('kontraktor')->user()->nama_pt,
            'alamat_pt' => auth()->guard('kontraktor')->user()->alamat_pt,
            'tahun_berdiri_pt' => auth()->guard('kontraktor')->user()->tahun_berdiri_pt,
            'file_aktanotaris' => auth()->guard('kontraktor')->user()->file_aktanotaris,
            'bidang_jasa' => auth()->guard('kontraktor')->user()->bidang_jasa,
            'divisi_tppi' => auth()->guard('kontraktor')->user()->divisi_tppi,
            'jumlah_pekerja' => auth()->guard('kontraktor')->user()->jumlah_pekerja,
            'email' => auth()->guard('kontraktor')->user()->email,
            'no_hp' => auth()->guard('kontraktor')->user()->no_hp,
            'password' => auth()->guard('kontraktor')->user()->password,
            'nama_pimpinan' => auth()->guard('kontraktor')->user()->nama_pimpinan,
            'email_pimpinan' => auth()->guard('kontraktor')->user()->email_pimpinan,
            'no_hp_pimpinan' => auth()->guard('kontraktor')->user()->no_hp_pimpinan,
            'fax_pimpinan' => auth()->guard('kontraktor')->user()->fax_pimpinan,
            'nama_pic' => auth()->guard('kontraktor')->user()->nama_pic,
            'email_pic' => auth()->guard('kontraktor')->user()->email_pic,
            'no_hp_pic' => auth()->guard('kontraktor')->user()->no_hp_pic,
            'fax_pic' => auth()->guard('kontraktor')->user()->fax_pic,
            'nama_pj_hse' => auth()->guard('kontraktor')->user()->nama_pj_hse,
            'email_pj_hse' => auth()->guard('kontraktor')->user()->email_pj_hse,
            'no_hp_pj_hse' => auth()->guard('kontraktor')->user()->no_hp_pj_hse,
            'fax_pj_hse' => auth()->guard('kontraktor')->user()->fax_pj_hse,
            'nama_pj' => auth()->guard('kontraktor')->user()->nama_pj,
            'email_pj' => auth()->guard('kontraktor')->user()->email_pj,
            'no_hp_pj' => auth()->guard('kontraktor')->user()->no_hp_pj,
            'fax_pj' => auth()->guard('kontraktor')->user()->fax_pj,
        ];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.apps.prekualifikasi.biodata');
    }
}
