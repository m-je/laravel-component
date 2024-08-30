<?php

namespace App\View\Components\Elements\Tables;

use Illuminate\View\Component;

class Aksi extends Component
{
    public $isedit;
    public $ishapus;
    public $isdetail;
    public $controller;
    public $id;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $isedit = 1, $ishapus = 1, $isdetail= 0, $controller, $id
    )
    {
        $this->isedit = $isedit;
        $this->ishapus = $ishapus;
        $this->isdetail = $isdetail;
        $this->controller = $controller;
        $this->id = $id;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.elements.tables.aksi');
    }
}
