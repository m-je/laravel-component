<?php

namespace App\View\Components\Apps\Prekualifikasi\Details;

use Illuminate\View\Component;

class Detail1 extends Component
{
    public $mdl;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->mdl = auth()->guard('kontraktor')->user();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.apps.prekualifikasi.details.detail1');
    }
}
