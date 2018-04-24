<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePegawaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jabatans', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('id_jabatan');
            $table->text('jabatan');
            $table->timestamps();
        });

        Schema::create('pegawais', function (Blueprint $table) {
            $table->increments('id_pegawai');
            $table->text('namapegawai');
            $table->integer('id_jabatan')->unsigned()->nullable(); //id ppbj
            $table->foreign('id_jabatan')->references('id')->on('jabatans')->onDelete('cascade');
            $table->text('notelp');
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
        Schema::dropIfExists('pegawais');
    }
}
