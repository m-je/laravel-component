<?php

namespace App\View\Components\Apps\Prekualifikasi\Details;

use Illuminate\View\Component;
use App\Models\Prekualifikasi;
use App\Models\Kategori;

class Baru extends Component
{
    public $mdl;
    public $judul;
    public $scrdoc;
    public $scrlap;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $id, $idpre
    )
    {
        $p = Prekualifikasi::with('jawaban')->find( $idpre );
        $k = Kategori::with('pertanyaan')->find( $id );
        $dt = $p->jawaban()->with('pertanyaan')->whereIn('pertanyaan_id', $k->pertanyaan()->pluck('id')->toArray() )->get();
        $scrdoc = $p->jawaban()->with('pertanyaan')->whereIn('pertanyaan_id', $k->pertanyaan()->pluck('id')->toArray() )->sum('score');
        $this->scrdoc = $scrdoc;
        $scrlap = $p->jawaban()->with('pertanyaan')->whereIn('pertanyaan_id', $k->pertanyaan()->pluck('id')->toArray() )->sum('score_lap');
        $this->scrlap = $scrlap;
        $this->mdl = $dt;
        $this->judul = $k->nama;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.apps.prekualifikasi.details.baru');
    }
}
