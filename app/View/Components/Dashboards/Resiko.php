<?php

namespace App\View\Components\Dashboards;

use Illuminate\View\Component;

class Resiko extends Component
{
    public $idtinggi;
    public $idsedang;
    public $idrendah;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $idtinggi, $idsedang, $idrendah
    )
    {
        $this->idtinggi = $idtinggi;
        $this->idsedang = $idsedang;
        $this->idrendah = $idrendah;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.dashboards.resiko');
    }
}
