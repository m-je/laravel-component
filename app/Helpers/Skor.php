<?php

namespace App\Helpers;

use App\Models\Kontraktor;
use App\Models\Prekualifikasi;
class Skor
{
	private $pembaginilai = 204;
	private $hsl;

	public function __construct( $nilai )
	{
		$this->hsl = $this->run( $nilai );
	}


	private function run( $nilai )
	{
		$hsl = [
			'nilai' => null,
			'huruf' => null,
			'warna' => null,
		];
		$n = $nilai / $this->pembaginilai*100;
		$hsl['nilai'] = $n;
		if( $n >= 15 && $n< 31 )
		{
			
			$hsl['huruf'] = 'Rendah';
			$hsl['warna'] = 'danger';
		} else if( $n >= 31 && $n < 56 )
		{
			
			$hsl['huruf'] = 'Sedang';
			$hsl['warna'] = 'warning';
		} else if( $n >= 56 )
		{
			
			$hsl['huruf'] = 'Tinggi';
			$hsl['warna'] = 'success';
		} else {
			
			$hsl['huruf'] = '-';
			$hsl['warna'] = 'default';
		}
		// $this->hsl = $hsl;
		return $hsl;
	}

	public function get()
	{
		return $this->hsl;
	}

	public function getLevel($lvl)
	{
		$k = Kontraktor::all();
		$hsl_akhir = [
			'r' => ['jml' => 0, 'id' => []],
			's' => ['jml' => 0, 'id' => []],
			't' => ['jml' => 0, 'id' => []],
			'tl' => ['jml' => 0, 'id' => []],
		];
		foreach( $k as $idk => $v)
		{
			$p = Prekualifikasi::getSelesai( $v->id );
			if( count( $p ) <= 0) continue;
			$hsl = $this->run( $p[0]->score );
			$hrf = strtolower( $hsl['huruf']);
			if( $hrf == "rendah")
			{
				$hsl_akhir['r']['jml']++;
				$hsl_akhir['r']['id'][] = $v->id;
			} else if( $hrf == 'sedang')
			{
				$hsl_akhir['s']['jml']++;
				$hsl_akhir['s']['id'][] = $v->id;
			} else if( $hrf == "tinggi" )
			{
				$hsl_akhir['t']['jml']++;
				$hsl_akhir['t']['id'][] = $v->id;
			} else {
				$hsl_akhir['tl']['jml']++;
				$hsl_akhir['tl']['id'][] = $v->id;
			}
		}
		return $hsl_akhir[ $lvl ];
	}
}