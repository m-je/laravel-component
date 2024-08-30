<?php

namespace App\View\Components\Apps\Prekualifikasi\Details;

use Illuminate\View\Component;
use App\Models\Kategori2;

class Kategori2 extends Component
{
    public $id;
    public $mdl;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id)
    {
        $kt = Kategori2::getJawaban( $id, 2 );
        $hsl = [];
        $ns = "";
        foreach( $kt as $k => $v)
        {
            $ns = $v->nama_variable.'_'.$v->nosoal;
            $hsl[ $ns ] = $v->nilai_variable;
            $ns = "";
        }
        $this->mdl = $hsl;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.apps.prekualifikasi.details.kategori2');
    }
}
