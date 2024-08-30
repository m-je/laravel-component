<?php

namespace App\View\Components\Apps\Prekualifikasi\Pertanyaans;

use Illuminate\View\Component;
use App\Models\Kategori;

class Pertanyaan extends Component
{

    public $mdl;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $kt = Kategori::where('jenis','like','%prekualifikasi%')->where('aktif',1)->get();
        $this->mdl = $kt;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.apps.prekualifikasi.pertanyaans.pertanyaan');
    }
}
