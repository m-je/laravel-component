<?php

namespace App\View\Components\Layouts;

use Illuminate\View\Component;

class Header extends Component
{
    public $title;
    public $title1;
    public $title2;
    public $mdl;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $title, $title1, $title2
    )
    {
        $this->title = $title;
        $this->title1 = $title1;
        $this->title2 = $title2;
        $this->data_auth();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        print_r( $this->mdl );
        return view('components.layouts.header');
    }

    private function data_auth()
    {
        $mdl = [];
        if( auth()->guard('pegawai')->check())
        {
            $mdl = [
                'nama' => auth()->guard('pegawai')->user()->nama,
                'email' => auth()->guard('pegawai')->user()->email,
                'no_hp' => auth()->guard('pegawai')->user()->no_hp,
                'alamat' => auth()->guard('pegawai')->user()->nip,
            ];
        } else if( auth()->guard('kontraktor')->check() )
        {
            $mdl = [
                'nama' => auth()->guard('kontraktor')->user()->nama_pt,
                'email' => auth()->guard('kontraktor')->user()->email,
                'no_hp' => auth()->guard('kontraktor')->user()->no_hp,
                'alamat' => auth()->guard('kontraktor')->user()->alamat_pt,
            ];
        }
        $this->mdl = $mdl;
    }
}
