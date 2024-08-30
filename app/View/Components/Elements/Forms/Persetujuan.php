<?php

namespace App\View\Components\Elements\Forms;

use Illuminate\View\Component;

class Persetujuan extends Component
{
    public $url;
    public $id;
    public $jm;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($url, $id, $jm)
    {
        $this->url = $url;
        $this->id = $id;
        $this->jm = $jm;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.elements.forms.persetujuan');
    }
}
