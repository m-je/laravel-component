<?php

namespace App\View\Components\Elements\Forms;

use Illuminate\View\Component;

class Form extends Component
{
    public $url;
    public $isupload;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($url, $isupload)
    {
        $this->url = $url;
        $this->isupload = $isupload;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.elements.forms.form');
    }
}
