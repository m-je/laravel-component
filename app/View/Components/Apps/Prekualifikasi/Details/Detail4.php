<?php

namespace App\View\Components\Apps\Prekualifikasi\Details;

use Illuminate\View\Component;
use App\Models\Kategori2;
use App\Models\Lampiran;
use App\Models\Klarifikasi;

class Detail4 extends Component
{
    public $id;
    public $mdl;
    public $idpre;
    /**
     * Create a new component instance.
     *
     * oreturn void
     */
    public function __construct($id)
    {
        $this->idpre = $id;
        $kt = Kategori2::getJawaban( $id, 4 );
        $lp = Lampiran::getJawaban( $id, 4 );
        $klr = Klarifikasi::getJawaban( $id, 4 );
        $hsl = [];
        $ns = "";
        foreach( $kt as $k => $v)
        {
            $ns = $v->nama_variable.'_'.$v->nosoal;
            $hsl[ $ns ] = $v->nilai_variable;
            $hsl['id_'.$v->nosoal] = $v->id;
            $hsl['klarifikasi_komen_'.$v->nosoal] = "";
            $kl = "";
            $rv = "";
            $sc = "";
            if( $v->reviewed_at )
            {
                // $rv = $v->reviewed_at.' - '.$v->reviewed_by;
                $rv = date('d F Y H:i:s', strtotime( $v->reviewed_at));
                $rv .= '<br>';
                $rv .= $v->reviewed_by;
                $sc = $v->score;
                $kl = "";
            }
            if( $v->klarifikasi_at)
            {
                $kl = date('d F Y H:i:s', strtotime($v->klarifikasi_at) );
                $kl .= '<br>';
                $kl .= $v->klarifikasi_by;
                $hsl['klarifikasi_komen_'.$v->nosoal] = $v->klarifikasi_komen;
            }
            $hsl['klarified_'.$v->nosoal] = "";
            if( $v->klarified_at)
            {
                $hsl['klarified_'.$v->nosoal] = $v->klarified_at;
            }
            $hsl['klarifikasi_'.$v->nosoal] = $kl;
            $hsl['review_'.$v->nosoal] = $rv;
            $hsl['score_'.$v->nosoal] = $sc;
            $ns = "";
        }
        foreach( $lp as $k => $v)
        {
            $ns = "lampiran_".$v->nosoal;
            $fl_folder = 'prekualifikasi/download/'.$v->id;
            if( strlen( $v->nama_file ) > 20)
                $hsl[ $ns ][]= "<a href='".url( $fl_folder )."'>".substr($v->nama_file,0,20)."... <i class='fa fa-download'></i></a>";
            else
                $hsl[ $ns ][]= "<a href='".url( $fl_folder )."'>".$v->nama_file." <i class='fa fa-download'></i></a>";
        }
        foreach( $klr as $k => $v )
        {
            $ns = "klarifikasi_lampiran_".$v->nosoal;
            if( strlen( $v->nama_file ) > 20 )
                $hsl[ $ns ][] = "<a href='".url('review/download/'.$v->id)."'>".substr( $v->nama_file,0,20)."... <i class='fa fa-download'></i></a>";
            else
                $hsl[ $ns ][] = "<a href='".url('review/download/'.$v->id)."'>".$v->nama_file." <i class='fa fa-download'></i></a>";
        }
        $this->mdl = $hsl;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.apps.prekualifikasi.details.detail4');
    }
}
