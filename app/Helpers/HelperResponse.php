<?php

namespace App\Helpers;

function ReturnView( $data, $title, $notif, $page, $op=[])
{
	$hal = [
		'data' => $data,
		'title' => $title,
		'notif' => $notif,
	];
	$hal = array_merge( $hal, $op );
	return view( $page, $hal );
}