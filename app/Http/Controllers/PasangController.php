<?php

namespace App\Http\Controllers;

use App\Models\Pasang;
use App\Models\Product;
use Illuminate\Http\Request;

class PasangController extends Controller
{
   public function index()
   {
        $dt = Pasang::with('product')->get();
        $data = [
            'title' => 'HJS Product Pasang',
            'notif' => true,
            'dt' => $dt,
        ];
        return view('pages.pasang.index', $data );
   }
}
