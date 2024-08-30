<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasang extends Model
{
    use HasFactory;

    // protected $connection = "mysql_n";
    protected $fillable = ['kode','product_id','ukuran'];

    public function Product()
    {
        return $this->belongsTo(Product::class);
    }
}
