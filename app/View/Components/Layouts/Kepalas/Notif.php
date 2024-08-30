<?php

namespace App\View\Components\Layouts\Kepalas;

use Illuminate\View\Component;
use App\Models\Peralatan;
use App\Models\Ssinduksi;
use App\Models\Simkilang;
use App\Models\Trainingpermit;
use App\Models\Pemberitahuan;

class Notif extends Component
{
    public $jml;
    public $warna;
    public $dt;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->jml = 0;
        $this->warna = 'danger';
        if( auth()->guard('pegawai')->check())
        {
            // $this->dt = $this->pegawai();
            $this->dt = array();
        } else if( auth()->guard('kontraktor')->check())
        {
            $this->dt = $this->kontraktor();
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.layouts.kepalas.notif');
    }

    private function pegawai()
    {
        $alat = Peralatan::whereNull('reviewed_at')->get();
        $ssi = Ssinduksi::whereNull('reviewed_at')->get();
        $sim = Simkilang::whereNull('reviewed_at')->get();
        $permit = Trainingpermit::whereNull('reviewed_at')->get();

        $dt = [
            [
                'pesan' => 'Ada '.count( $alat).' Inspeksi Peralatan belum ditangani',
                'url' => url('peralatan'),
                'jml' => count( $alat ),
            ],
            [
                'pesan' => 'Ada '.count( $ssi).' Safety & Security Induksi belum ditangani',
                'url' => url('ssi'),
                'jml' => count( $ssi),
            ],
            [
                'pesan' => 'Ada '.count( $sim).' SIM Kilang belum ditangani',
                'url' => url('simkilang'),
                'jml' => count( $sim),
            ],
            [
                'pesan' => 'Ada '.count( $permit).' Training Permit belum ditangani',
                'url' => url('trainingpermit'),
                'jml' => count( $permit),
            ],
        ];
        $jml = 0;
        if( count( $alat ) ) $jml++;
        if( count( $ssi ) ) $jml++;
        if( count( $sim ) ) $jml++;
        if( count( $permit ) ) $jml++;
        $this->jml = $jml;
        return $dt;
    }

    private function kontraktor()
    {
        $dt = [];
        $idk = auth()->guard('kontraktor')->user()->id;
        $alat = Pemberitahuan::getData($idk, 'peralatan');
        $ssi = Pemberitahuan::getData($idk, 'ssi');
        $sim = Pemberitahuan::getData($idk, 'simkilang');
        $permit = Pemberitahuan::getData($idk, 'trainingpermit');

        $dt = [
            [
                'pesan' => 'Ada '.count( $alat).' Inspeksi Peralatan belum ditangani',
                'url' => url('pemberitahuan/'.$idk.'/peralatan'),
                'jml' => count( $alat ),
            ],
            [
                'pesan' => 'Ada '.count( $ssi).' Safety & Security Induksi belum ditangani',
                'url' => url('pemberitahuan/'.$idk.'/ssi'),
                'jml' => count( $ssi),
            ],
            [
                'pesan' => 'Ada '.count( $sim).' SIM Kilang belum ditangani',
                'url' => url('pemberitahuan/'.$idk.'/simkilang'),
                'jml' => count( $sim),
            ],
            [
                'pesan' => 'Ada '.count( $permit).' Training Permit belum ditangani',
                'url' => url('pemberitahuan/'.$idk.'trainingpermit'),
                'jml' => count( $permit),
            ],
        ];

        $jml = 0;
        if( count( $alat ) ) $jml++;
        if( count( $ssi ) ) $jml++;
        if( count( $sim ) ) $jml++;
        if( count( $permit ) ) $jml++;

        $this->jml = $jml;
        return $dt;
    }
}
