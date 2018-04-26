<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePbbjsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ppbjs', function (Blueprint $table) {
            $table->increments('id');
            $table->text('selesai1')->nullable();
            $table->text('selesai2')->nullable();
            $table->text('selesai3')->nullable();
            $table->text('id_pegawai')->nullable(); //Mengambil data dari tabel pegawai dengan id_pegawai
            $table->text('id_unit'); //Mengambil data dari tabel unit dengan id_unit
            $table->string('kodebarang')->nullable()->unique();
            $table->text('unitkerja')->nullable();
            $table->string('kodePj')->default('YMP');
            $table->integer('no_regis_umum');
            $table->text('tgl_regis_umum')->nullable();
            $table->text('no_ppbj');
            $table->text('tgl_permintaan_ppbj')->nullable();
            $table->text('tgl_dibutuhkan_ppbj')->nullable();
            $table->text('namapengadaan');
            $table->text('id_pengadaan');
            $table->string('status')->default('Pending');
            $table->string('keterangan')->default('null')->nullable();
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
        Schema::dropIfExists('ppbjs');
    }
}
