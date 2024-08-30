<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenuAksesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_akses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('jabatan_id');
            $table->unsignedBigInteger('menu_id');
            $table->index(['jabatan_id','menu_id']);
            $table->foreign('jabatan_id')->references('id')->on('jabatans');
            $table->foreign('menu_id')->references('id')->on('menus');
            $table->string('updated_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('menu_akses', function(Blueprint $table){
            $table->dropIndex('menu_akses_jabatan_id_menu_id_index');
            $table->dropForeign('menu_akses_jabatan_id_foreign');
            $table->dropForeign('menu_akses_menu_id_foreign');
        });
        Schema::dropIfExists('menu_akses');
    }
}
