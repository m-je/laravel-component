<?php

namespace App\View\Components\Apps\Prekualifikasi;

use Illuminate\View\Component;
use App\Helpers\Skor;
class Level extends Component
{
    public $nilai;
    public $hsl;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($nilai)
    {
        $this->nilai = $nilai;
        $s = new Skor( $nilai );
        $this->hsl = $s->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.apps.prekualifikasi.level');
    }
}
