<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePendaftarsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftars', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_univ')->unsigned();
            $table->string('nama_mahasiswa');
            $table->string('nim');
            $table->string('jurusan_mahasiswa');
            $table->string('alamat');
            $table->string('semester');
            $table->string('ipk');
            $table->string('prestasi_akademik');
            $table->string('pendapatan_orangtua');
            $table->string('tanggungan_orangtua');
            $table->string('kendaraan_pribadi');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('id_univ')->references('id')->on('universitas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pendaftars');
    }
}
