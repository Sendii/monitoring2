<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('barangs', function (Blueprint $table) {
            $table->increments('id_barang');
            $table->integer('id')->unsigned()->nullable(); //id ppbj
            $table->foreign('id')->references('id')->on('pbbjs');
            $table->string('kodebarang')->nullable();
            $table->integer('banyak_brg');
            $table->text('nama_barang');
            $table->integer('jumlah_brg');
            $table->biginteger('harga_brg');
            $table->biginteger('total_brg');
            $table->biginteger('hargatotal_brg')->nullable();
            $table->timestamps();
        });

        Schema::create('barangrealisasi', function (Blueprint $table) {
            $table->increments('id_barang');
            $table->integer('id')->unsigned()->nullable(); //id ppbj
            $table->foreign('id')->references('id')->on('pbbjs');
            $table->string('kodebarang')->nullable();
            $table->integer('banyak_brg')->nullable();
            $table->text('nama_barang')->nullable();
            $table->integer('jumlah_brg')->nullable();
            $table->biginteger('harga_brg')->nullable();
            $table->biginteger('total_brg')->nullable();
            $table->biginteger('hargatotal_brg')->nullable();
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
        Schema::dropIfExists('barangs');
    }
}
