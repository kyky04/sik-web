<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateJurusansTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jurusans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_univ')->unsigned();
            $table->integer('id_fak')->unsigned();
            $table->string('nama');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('id_univ')->references('id')->on('universitas');
            $table->foreign('id_fak')->references('id')->on('fakultas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('jurusans');
    }
}
