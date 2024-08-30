<?php

namespace App\View\Components\Dashboards;

use Illuminate\View\Component;
use App\Models\Kontraktor;

class Tabel extends Component
{
    public $dt;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id)
    {
        $k = Kontraktor::whereIn('id', $id )->get();
        $this->dt = $k;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.dashboards.tabel');
    }
}
