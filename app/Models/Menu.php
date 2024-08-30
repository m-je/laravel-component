<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = ['parent','nama','link','ikon','urutan'];

    public function scopeGetInduk( $query )
    {
        return $query->where('parent',0)->orderBy('urutan','asc');
    }

    public function scopeGetAnak($query, $induk)
    {
        return $query->where('parent',$induk)->orderBy('urutan','asc');
    }

    public function Jabatans()
    {
        return $this->belongsToMany(Jabatan::class,'menu_akses','menu_id','jabatan_id')
        ->withTimestamps()
        ->withPivot('updated_by');
    }
}
