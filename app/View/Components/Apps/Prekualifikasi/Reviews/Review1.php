<?php

namespace App\View\Components\Apps\Prekualifikasi\Reviews;

use Illuminate\View\Component;
use App\Models\Prekualifikasi;

class Review1 extends Component
{
    public $mdl;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id)
    {
        $pr = Prekualifikasi::find($id);
        $this->mdl = $pr->kontraktor;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.apps.prekualifikasi.reviews.review1');
    }
}
