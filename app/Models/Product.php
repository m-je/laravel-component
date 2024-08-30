<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // protected $connection = "mysql_n";
    protected $fillable = ['product','kode','artikel','warna','ukuran','spesifikasi','det_ukuran','tgl'];

    public function Pasang()
    {
        return $this->hasMany(Pasang::class);
    }
}
