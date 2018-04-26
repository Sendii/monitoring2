<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProsesrealisasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prosesrealisasis', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_ppbj')->unsigned()->nullable(); //id ppbj
            $table->foreign('id_ppbj')->references('id')->on('ppbjs')->onDelete('cascade');
            $table->text('tgl_spph')->nullable(); //Tanggal Spph
            $table->text('no_spph')->nullable();
            $table->text('tgl_etp')->nullable(); //Tanggal etp
            $table->text('startpks')->nullable(); // ini untuk mengambil time pada saat pegawai mengerjakan psi, kak, dan sekper
            $table->text('tgl_psi')->nullable();
            $table->text('tgl_kak')->nullable();
            $table->text('tgl_sekper')->nullable();
            $table->text('tgl_pmn')->nullable(); //Tanggal Pengumuman
            $table->text('no_pmn')->nullable();
            $table->text('tgl_kon')->nullable(); //Tanggal Kontrak
            $table->text('no_kon')->nullable();
            $table->text('vendor')->nullable();
            $table->text('selesaispph')->nullable();
            $table->text('selesaietp')->nullable();
            $table->text('selesaipsi')->nullable();
            $table->text('selesaikak')->nullable();
            $table->text('selesaisekper')->nullable();
            $table->text('selesaipmn')->nullable();
            $table->text('selesaikon')->nullable();
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
        Schema::dropIfExists('prosesrealisasis');
    }
}
