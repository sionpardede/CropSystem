<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePupuksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pupuks', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_tanaman')->references('jenisTanaman')->on('tanamans');
            $table->integer('urea');
            $table->integer('za');
            $table->integer('sp-36');
            $table->integer('kcl');
            $table->integer('npk');
            $table->integer('dolomite');
            $table->integer('zk');
            $table->integer('organik');
            $table->integer('kandang');
            $table->integer('hijau');
            $table->integer('kompos');
            $table->integer('hayati');
            $table->integer('humus');
            $table->integer('harga');
            $table->string('kandungan');
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
        Schema::dropIfExists('pupuks');
    }
}
