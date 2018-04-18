<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBeasiswasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beasiswas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nilai_un');
            $table->integer('penghasilan');
            $table->integer('tanggungan');
            $table->string('prestasi');
            $table->string('kriteria_rumah');
            $table->string('kepimilikan_rumah');
            $table->string('isi_rumah');
            $table->string('mandi_cuci_kakus');
            $table->integer('luas_tanah');
            $table->integer('jarak_pusat_kota');
            $table->integer('sumber_air');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('beasiswas');
    }
}
