<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePasangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasangs', function (Blueprint $table) {
            $table->id();
            $table->string('kode');
            $table->index('kode');
            $table->unsignedBigInteger('product_id');
            $table->index('product_id');
            $table->foreign('product_id')->references('id')->on('products');
            $table->string('ukuran',2);
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
        Schema::table('pasangs', function(Blueprint $table){
            $table->dropIndex('pasangs_kode_product_id_index');
            $table->dropForeign('pasangs_product_id_foreign');
        });
        Schema::dropIfExists('pasangs');
    }
}
