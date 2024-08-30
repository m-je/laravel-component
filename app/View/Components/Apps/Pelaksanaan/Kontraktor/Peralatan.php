<?php

namespace App\View\Components\Apps\Pelaksanaan\Kontraktor;

use Illuminate\View\Component;

class Peralatan extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.apps.pelaksanaan.kontraktor.peralatan');
    }
}
