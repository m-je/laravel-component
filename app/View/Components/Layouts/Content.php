<?php

namespace App\View\Components\Layouts;

use Illuminate\View\Component;

class Content extends Component
{
    public $title;
    public $isnotif;
    public $warnabox;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $isnotif=false, $warnabox="")
    {
        $this->title = $title;
        $this->isnotif = $isnotif;
        $this->warnabox = $warnabox;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.layouts.content');
    }
}
