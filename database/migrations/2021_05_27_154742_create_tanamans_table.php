<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTanamansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tanamans', function (Blueprint $table) {
            $table->id();
            $table->string('jenisTanaman');
            $table->string('kategori');
            $table->string('caraTanam');
            $table->string('video');
            $table->integer('sequence')->nullable()->default(null);
            $table->integer('ph');
            $table->integer('humidity');
            $table->integer('temp');
            $table->integer('rainfall');
            $table->string('land');
            $table->integer('urea')->nullable()->default(null);;
            $table->integer('za')->nullable()->default(null);;
            $table->integer('sp36')->nullable()->default(null);;
            $table->integer('kcl')->nullable()->default(null);;
            $table->integer('npk')->nullable()->default(null);;
            $table->integer('dolomite')->nullable()->default(null);;
            $table->integer('zk')->nullable()->default(null);;
            $table->integer('organik')->nullable()->default(null);;
            $table->integer('kandang')->nullable()->default(null);;
            $table->integer('hijau')->nullable()->default(null);;
            $table->integer('kompos')->nullable()->default(null);;
            $table->integer('hayati')->nullable()->default(null);;
            $table->integer('humus')->nullable()->default(null);;
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
        Schema::dropIfExists('tanamans');
    }
}
