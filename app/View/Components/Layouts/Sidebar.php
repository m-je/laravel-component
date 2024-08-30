<?php

namespace App\View\Components\Layouts;

use Illuminate\View\Component;
use App\Models\Jabatan;

class Sidebar extends Component
{

    public $data_menu;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $jbt = 0;
        if( auth()->guard('pegawai')->check() )
        {
            $jbt = auth()->guard('pegawai')->user()->jabatan_id;
        } else if( auth()->guard('kontraktor')->check() )
        {
            $jbt = auth()->guard('kontraktor')->user()->jabatan_id;
        }
        $this->data_menu = [];
        // if( $jbt > 0) $this->getMenu($jbt);
        if( $jbt > 0) $this->renderMenu( $jbt );
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        // print_r( $this->data_menu);
        return view('components.layouts.sidebar');
    }

    private function renderMenu( $jbt )
    {
        $j = Jabatan::find( $jbt );
        $menus = $j->menus()->getInduk()->get();
        $dt = [];
        $ht = "";
        foreach( $menus as $k => $menu )
        {
            $mc = $j->menus()->getAnak( $menu->id )->get();
            $ht = "<li ";
            $ht .= count($mc) > 0? "class='treeview'>" : ">";
            $ht .= "<a href=";
            $ht .= $menu->link == "#" ? "'#'" : "'".url( $menu->link )."'";
            $ht .= ">";
            $ht .= "<i class='".$menu->ikon."'></i>";
            $ht .= "<span>".$menu->nama."</span>";
            $ht .= count( $mc ) > 0?"<i class='fa fa-angle-left pull-right'></i>" : "";
            $ht .= "</a>";
            if( count( $mc ) > 0)
            {
                $ht .= "<ul class='treeview-menu'>";
                foreach( $mc as $kk => $menu_anak )
                {
                    $ht .= "<li>";
                    $ht .= "<a href='".url( $menu_anak->link )."'>";
                    $ht .= "<i class='".$menu_anak->ikon."'></i>";
                    $ht .= "<span>".$menu_anak->nama."</span>";
                    $ht .= "</a></li>";
                }
                $ht .= "</ul>";
            }
            $ht .= "</li>";
            $dt[] = $ht;
            $ht = "";
        }
        $this->data_menu = $dt;
    }
}
