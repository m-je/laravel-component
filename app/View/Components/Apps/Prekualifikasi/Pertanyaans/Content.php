<?php

namespace App\View\Components\Apps\Prekualifikasi\Pertanyaans;

use Illuminate\View\Component;
use App\Models\Pertanyaan;

class Content extends Component
{
    public $mdl;
    public $judul;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id, $judul)
    {
        $prt = Pertanyaan::where('kategori_id',$id)->where('aktif',1)->get();
        $this->mdl = $prt;
        $this->judul = $judul;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.apps.prekualifikasi.pertanyaans.content');
    }
}
