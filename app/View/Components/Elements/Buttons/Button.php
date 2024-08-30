<?php

namespace App\View\Components\Elements\Buttons;

use Illuminate\View\Component;

class Button extends Component
{
    public $jenis;
    public $url;
    public $warna;
    public $label;
    public $ikon;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $jenis="", $url="", $warna, $label, $ikon
    )
    {
        $this->jenis = $jenis;
        $this->url = $url;
        $this->warna = $warna;
        $this->label = $label;
        $this->ikon = $ikon;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.elements.buttons.button');
    }
}
