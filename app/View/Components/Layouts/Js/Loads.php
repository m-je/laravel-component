<?php

namespace App\View\Components\Layouts\Js;

use Illuminate\View\Component;
use Illuminate\Http\Request;

class Loads extends Component
{
    public $jenis;
    public $urlsegmen;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        Request $req, $jenis
    )
    {
        $this->jenis = $jenis;
        $url_arr = explode('/', $req->url() );
        $jml = count($url_arr);
        $this->urlsegmen = $url_arr[2];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.layouts.js.loads');
    }
}
