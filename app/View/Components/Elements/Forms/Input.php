<?php

namespace App\View\Components\Elements\Forms;

use Illuminate\View\Component;

class Input extends Component
{
    public $isgroup;
    public $label;
    public $nama;
    public $jenis;
    public $placeholder;
    public $nilai;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $isgroup, $label, $nama, $jenis, $placeholder, $nilai=""
    )
    {
        $this->isgroup = $isgroup;
        $this->label = $label;
        $this->jenis = $jenis;
        $this->nama = $nama;
        $this->placeholder = $placeholder;
        $this->nilai = $nilai;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.elements.forms.input');
    }
}
