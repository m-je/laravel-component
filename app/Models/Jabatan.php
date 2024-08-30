<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    use HasFactory;

    protected $fillable = ['nama'];
    protected $guard = ['id'];

    public function Pegawai()
    {
        return $this->hasMany( Pegawai::class );
    }

    public function Menus()
    {
        return $this->belongsToMany(Menu::class,'menu_akses','jabatan_id','menu_id')
        ->withTimestamps()
        ->withPivot('updated_by');
    }

    public function Kontraktor()
    {
        return $this->hasMany(Kontraktor::class);
    }
}
