<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PasangController;
use App\Http\Controllers\ProductController;

/*
Tes Routing
*/
// use Illuminate\Support\Facades\Mail;
// use App\Mail\KontraktorMail;
// use App\Models\Purcashing;

Route::get('/', function(){ return redirect()->route('login.index'); });
Route::middleware('islogin')->group(function(){
    // Route::get('/', function(){ return redirect()->route('login.index'); });
    Route::prefix('/login')->group(function(){
        Route::get('/', [LoginController::class, 'index'])->name('login.index');
        Route::post('/lupa', [LoginController::class, 'lupa']);
        Route::post('/{jns}', [LoginController::class, 'proses'])
        ->where('jns', '[a-z]+');
    });
    Route::post('/logout',function( Request $req){
        if( auth()->guard('pegawai')->check() || auth()->guard('kontraktor')->check() )
        {
            $g = auth()->guard('pegawai')->check()?'pegawai' : 'kontraktor';
            auth()->guard( $g )->logout();
            $req->session()->invalidate();
            $req->session()->regenerateToken();
            return redirect()->route('login.index');
        }
    });
    Route::prefix('/dashboard')->group(function(){
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
        Route::get('/sandi', [DashboardController::class, 'ganti'])->name('dashboard.sandi');
        Route::post('/simpan', [DashboardController::class, 'ganti_sandi']);
    });
    // ini adalah router untuk Menu Controller
    Route::prefix('/menu')->group(function(){
        Route::get('/', [MenuController::class, 'index'])->name('menu.index');
        Route::get('/add', [MenuController::class, 'create'])->name('menu.create');
        Route::get('/detail/{menu}', [MenuController::class, 'show'])
        ->where('menu', '[0-9]')->name('menu.show');
        Route::get('/edit/{id}', [MenuController::class, 'edit'])
        ->where('id', '[0-9]+')->name('menu.edit');
        Route::post('/simpan/{id}', [MenuController::class, 'store'])
        ->where('id','[0-9]+');
        Route::post('/simpan/{menu}', [MenuController::class, 'update'])
        ->where('menu', '[0-9]');
        Route::post('/hapus/{menu}', [MenuController::class, 'delete'])
        ->where('menu', '[0-9]');
    });
    // ini adalah akhir dari routing menu controller

    // ini adalah awal dari pegawai controller
    Route::prefix('/pegawai')->group(function(){
        Route::get('/', [PegawaiController::class, 'index'])->name('pegawai.index');
        Route::get('/detail/{id}',[PegawaiController::class, 'show'])
        ->where('id','[0-9]+')->name('pegawai.show');
        Route::get('/add', [PegawaiController::class, 'create'])->name('pegawai.create');
        Route::post('/simpan/{id}',[PegawaiController::class, 'simpan'])
        ->where('id','[0-9]+');
        Route::get('/edit/{id}', [PegawaiController::class, 'edit'])
            ->where('id','[0-9]+')->name('pegawai.edit');
            Route::get('/reset/{id}', [PegawaiController::class, 'reset'])
            ->where('id','[0-9]+');
            Route::post('/simpan_reset/{id}', [PegawaiController::class, 'simpan_reset'])
            ->where('id','[0-9]+');
    });
    // ini adalah akhir dari pegawai controller
    Route::prefix('/jabatan')->group(function(){
        Route::get('/', [JabatanController::class, 'index'])->name('jabatan.index');
        Route::get('/add', [JabatanController::class, 'create'])->name('jabatan.create');
        Route::post('/simpan/{id}',[JabatanController::class, 'simpan'])
        ->where('id','[0-9]+');
        Route::get('/edit/{id}', [JabatanController::class, 'edit'])
            ->where('id','[0-9]+')->name('jabatan.edit');
    });
    // ini adalah awal dari Product Controller
    Route::prefix('/product')->group(function(){
        Route::get('/', [ProductController::class, 'index'])->name('product.index');
    });
    // ini adalah akhir dari Product Controller
    // ini adalah awal dari Pasang Controller
    Route::prefix('/pasang')->group(function(){
        Route::get('/', [PasangController::class, 'index'])->name('pasang.index');
    });
    // ini adalah akhir dari Pasang Controller
});