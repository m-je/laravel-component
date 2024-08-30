<?php

namespace App\View\Components\Elements\Forms;

use Illuminate\View\Component;

class Radio extends Component
{
    public $nama;
    public $ischecked;
    public $nilai;
    public $label;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($nama, $nilai, $label, $ischecked=false)
    {
        $this->nama = $nama;
        $this->label = $label;
        $this->nilai = $nilai;
        $this->ischecked = $ischecked;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.elements.forms.radio');
    }
}
