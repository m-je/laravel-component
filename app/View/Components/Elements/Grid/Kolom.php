<?php

namespace App\View\Components\Elements\Grid;

use Illuminate\View\Component;

class Kolom extends Component
{
    public $md;
    public $xs;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($md, $xs=12)
    {
        $this->md = $md;
        $this->xs = $xs;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.elements.grid.kolom');
    }
}
