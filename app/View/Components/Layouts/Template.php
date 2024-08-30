<?php

namespace App\View\Components\Layouts;

use Illuminate\View\Component;

class Template extends Component
{
    public $title;
    public $title1;
    public $title2;
    public $breadcrumbs = [];
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $title, $title1, $title2,$breadcrumbs
    )
    {
        $this->title = $title;
        $this->title1 = $title1;
        $this->title2 = $title2;
        $this->breadcrumbs = $breadcrumbs;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.layouts.template');
    }
}
