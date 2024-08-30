<?php

namespace App\View\Components\Apps\Prekualifikasi\Reviews;

use Illuminate\View\Component;
use App\Models\Prekualifikasi;
use App\Models\Kategori;

class Review extends Component
{
    public $idpre;
    public $ktg;
    public $mdl;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($idpre)
    {
        $p = Prekualifikasi::with('jawaban')->find($idpre);
        $k = Kategori::getJenis('prekualifikasi');
        $this->idpre = $idpre;
        $this->ktg = $k;
        $this->mdl = $p;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.apps.prekualifikasi.reviews.review');
    }
}
