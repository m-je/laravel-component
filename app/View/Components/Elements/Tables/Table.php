<?php

namespace App\View\Components\Elements\Tables;

use Illuminate\View\Component;

class Table extends Component
{
    public $datatable;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($datatable)
    {
        $this->datatable = $datatable;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.elements.tables.table');
    }
}
