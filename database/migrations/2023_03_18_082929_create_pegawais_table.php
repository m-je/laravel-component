<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePegawaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawais', function (Blueprint $table) {
            $table->id();
            $table->string('nip',20)->unique();
            $table->string('nama',100);
            $table->string('email')->uniquea();
            $table->string('no_hp',20)->unique();
            $table->text('password');
            $table->bigInteger('jabatan_id')->unsigned();
            $table->index('jabatan_id');
            $table->foreign('jabatan_id')->references('id')->on('jabatans');
            $table->rememberToken();
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
        Schema::table('pegawais', function(Blueprint $table ){
            $table->dropUnique('pegawais_nip_unique');
            $table->dropUnique('pegawais_email_unique');
            $table->dropUnique('pegawais_no_hp_unique');
            $table->dropIndex('pegawais_jabatan_id_index');
            $table->dropForeign('pegawais_jabatan_id_foreign');
        });
        Schema::dropIfExists('pegawais');
    }
}
