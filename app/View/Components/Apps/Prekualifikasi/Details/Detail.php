<?php

namespace App\View\Components\Apps\Prekualifikasi\Details;

use Illuminate\View\Component;
use App\Models\Prekualifikasi;
use App\Models\Kategori;

class Detail extends Component
{
    public $idpre;
    public $mdl;
    public $ktg;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $dt = Prekualifikasi::getByKontraktor(
            auth()->guard('kontraktor')->user()->id
        );
        $this->idpre = $dt[0]->id;
        $this->ktg = Kategori::where('jenis','like','%prekualifikasi%')->where('aktif',1)->get();
        $this->mdl = $dt[0];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.apps.prekualifikasi.details.detail');
    }
}
