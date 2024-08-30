<?php

namespace App\Helpers;

class Pelaksanaan
{
	private $dt;

	public function __construct()
	{
		$this->dt = [
		1 => ['Pra Induksi','prainduksi'],
		2 => ['Pengecekan Peralatan / Kendaraan','peralatan'],
		3 => ['Safety dan Security Induksi','ssi'],
		4 => ['SIM kilang','simkilang'],
		5 => ['Training Permit','trainingpermit'],
		];
	}

	public function getSelect()
	{
		$hsl = [];
		foreach( $this->dt as $k => $v)
		{
			$hsl[] = ['nilai' => $k, 'label' => $v[0]];
		}
		return $hsl;
	}

	public function get( $idk )
	{
		return $this->dt[ $idk ];
	}
}