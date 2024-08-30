<?php

namespace App\Helpers;

class Folder
{
	private $utama;

	public function __construct($jns  = 'csms_stiimyid')
	{
		$umum = public_path();
		 if( $jns != 'lokal' )
		 {
		 	$umum = str_replace($jns.'/public','httpdocs/'.$jns, public_path() );
		 }
		 $umum .= '/media';
		 $this->utama = $umum;
	}

	public function getStatic($fl='')
	{
		return $this->utama.'/static/'.$fl;
	}

	public function prekualifikasi()
	{
		return $this->utama.'/prekualifikasi/';
	}

	public function klarifikasi()
	{
		return $this->utama.'/klarifikasi/';
	}

	public function peralatan()
	{
		return $this->utama.'/peralatan/';
	}

	public function ssinduksi()
	{
		return $this->utama.'/ssinduksi/';
	}
	public function simkilang()
	{
		return $this->utama.'/simkilang/';
	}

	public function prejobdok()
	{
		return $this->utama.'/prejobdok/';
	}
	public function prejobpekerja()
	{
		return $this->utama.'/prejobpekerja/';
	}
	public function prejobperalatan()
	{
		return $this->utama.'/prejobperalatan/';
	}
	public function prejobapd()
	{
		return $this->utama.'/prejobapd/';
	}
	public function pelmanres()
	{
		return $this->utama.'/pelmanres/';
	}

	public function peltbm()
	{
		return $this->utama.'/peltbm/';
	}

	public function pelharian()
	{
		return $this->utama.'/pelharian/';
	}

	public function kinerjak3ll()
	{
		return $this->utama.'/kinerjak3ll/';
	}

	public function projek()
	{
		return $this->utama.'/projek/';
	}
}