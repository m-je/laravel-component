<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class Pegawai extends Authenticatable
{
    use HasApiTokens, HasFactory;
    // use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = ['nip','nama','email','no_hp','jabatan_id','password'];

    public function Jabatan()
    {
        return $this->belongsTo(Jabatan::class );
    }

    public function Projek()
    {
        return $this->hasMany(Projek::class);
    }

    public function Ceklis()
    {
        return $this->hasMany(Ceklis::class );
    }
}
