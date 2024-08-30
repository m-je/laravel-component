<?php

namespace App\View\Components\Elements\Box;

use Illuminate\View\Component;

class Small extends Component
{
    public $warna;
    public $angka;
    public $teks;
    public $ikon;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $warna, $angka, $teks, $ikon
    )
    {
        $this->warna = $warna;
        $this->angka = $angka;
        $this->teks = $teks;
        $this->ikon = $ikon;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.elements.box.small');
    }
}
