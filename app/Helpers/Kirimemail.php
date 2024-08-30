<?php

namespace App\Helpers;

use App\Models\Emailpel;
use App\Helpers\Pelaksanaan;
use App\Mail\PelaksanaanMail;
use Mail;

class Kirimemail
{
	private $jm;
	private $pmn;

	public function __construct($jm, $pmn)
	{
		$this->jm = $jm;
		$this->pmn = $pmn;
	}

	public function run()
	{
		$em = Emailpel::where('jenis_menu', $this->jm )->get();
        if( count( $em ) )
        {
            $pel = new Pelaksanaan();
            $temp = $pel->get( $this->jm );
            $dt = [
                'nama' => $temp[0],
                'url' => url($temp[1].'/detail/'.$this->pmn),
            ];
            $hsl = Mail::to( $em[0]->email)
            ->send(new PelaksanaanMail( $dt ) );
        }
	}
}