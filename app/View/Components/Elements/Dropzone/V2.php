<?php

namespace App\View\Components\Elements\Dropzone;

use Illuminate\View\Component;

class V2 extends Component
{
    public $n;
    public $nama;
    public $url;
    public $urlhapus;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $n, $nama, $url, $urlhapus
    )
    {
        $this->n = $n;
        $this->nama = $nama;
        $this->url = $url;
        $this->urlhapus = $urlhapus;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.elements.dropzone.v2');
    }
}
