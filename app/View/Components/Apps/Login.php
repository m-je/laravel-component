<?php

namespace App\View\Components\Apps;

use Illuminate\View\Component;

class Login extends Component
{
    public $title;
    public $title1;
    public $title2;
    public $url;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $title="", $title1="", $title2="", $url=""
    )
    {
        $this->title = $title;
        $this->title1 = $title1;
        $this->title2 = $title2;
        $this->url = $url;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.apps.login');
    }
}
