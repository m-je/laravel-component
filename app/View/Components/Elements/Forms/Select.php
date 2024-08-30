<?php

namespace App\View\Components\Elements\Forms;

use Illuminate\View\Component;

class Select extends Component
{
    public $isgroup;
    public $label;
    public $nama;
    public $dt;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $isgroup, $label, $nama, $dt
    )
    {
        $this->isgroup = $isgroup;
        $this->label = $label;
        $this->nama = $nama;
        $this->dt = $dt;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.elements.forms.select');
    }
}
