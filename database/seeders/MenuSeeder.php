<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->insert([
            ['parent' => 0, 'nama' => 'Profile', 'link' => 'kontraktor', 'ikon' => 'fa fa-user', 'urutan' => 1],
            // ['parent' => 0, 'nama' => 'Prekualifikasi', 'link' => 'prekualifikasi', 'ikon' => 'fa fa-pencil', 'urutan' => 2],
            ['parent' => 0, 'nama' => 'Dashboard', 'link' => 'dashboard', 'ikon' => 'fa fa-chart', 'urutan' => 1],
            ['parent' => 0, 'nama' => 'Generate Akun', 'link' => 'purcashing', 'ikon' => 'fa fa-user', 'urutan' => 2],
            // ['parent' => 0, 'nama' => 'Review Prekualifikasi', 'link' => 'review', 'ikon' => 'fa fa-pencil', 'urutan' => 3],
            ['parent' => 0, 'nama' => 'Pegawai', 'link' => 'pegawai', 'ikon' => 'fa fa-user', 'urutan' => 3],
        ]);
        $j = \App\Models\Jabatan::find(1);
        $j->menus()->attach([1,2,3,4],['updated_by' => 'seeder']);
        $jj = \App\Models\Jabatan::find(2);
        $jj->menus()->attach([1,2], ['updated_by' => 'seeder']);
        // $jj = \App\Models\Jabatan::find(3);
        // $jj->menus()->attach([3,5], ['updated_by' => 'seeder']);
        // $jj = \App\Models\Jabatan::find(4);
        // $jj->menus()->attach([4], ['updated_by' => 'seeder']);
    }
}
