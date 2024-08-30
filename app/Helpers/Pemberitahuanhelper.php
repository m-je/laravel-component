<?php

namespace App\Helpers;

use App\Models\Pemberitahuan;

class Pemberitahuanhelper
{
	public static function peralatan($id)
	{
		$dt = [
			'kontraktor_id' => $id,
			'menu' => 'peralatan',
			'label' => 'Inspeksi Peralatan',
			'dibaca' => 0,
		];
		return self::save( $dt );
	}

	public static function ssi($id)
	{
		$dt = [
			'kontraktor_id' => $id,
			'menu' => 'ssi',
			'label' => 'Safety & Security Induksi',
			'dibaca' => 0,
		];
		return self::save( $dt );
	}

	public static function sim($id)
	{
		$dt = [
			'kontraktor_id' => $id,
			'menu' => 'simkilang',
			'label' => 'SIM Kilang',
			'dibaca' => 0,
		];
		return self::save( $dt );
	}

	public static function training($id)
	{
		$dt = [
			'kontraktor_id' => $id,
			'menu' => 'trainingpermit',
			'label' => 'Training Permit',
			'dibaca' => 0,
		];
		return self::save( $dt );
	}

	private static function save( $dt )
	{
		$hsl = Pemberitahuan::create( $dt );
		if( ! $hsl ) return false;
		return true;
	}
}