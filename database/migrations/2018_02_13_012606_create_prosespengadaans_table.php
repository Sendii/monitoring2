<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProsespengadaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prosespengadaans', function (Blueprint $table) {
            $table->increments('id');
            $table->text('id_pegawai')->nullable();
            $table->integer('id_ppbj')->unsigned()->nullable(); //id ppbj
            $table->foreign('id_ppbj')->references('id')->on('pbbjs')->onDelete('cascade');
            $table->text('mulaippbj1')->nullable();
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
            //2
            $table->string('kodebarang2')->nullable()->unique();
            $table->text('mulaippbj2')->nullable();
            $table->text('tgl_spph2')->nullable(); //Tanggal Spph
            $table->text('no_spph2')->nullable();
            $table->text('tgl_etp2')->nullable();
            $table->text('startpks2')->nullable(); // ini untuk mengambil time pada saat pegawai mengerjakan psi, kak, dan sekper
            $table->text('tgl_psi2')->nullable();
            $table->text('tgl_kak2')->nullable();
            $table->text('tgl_sekper2')->nullable();
            $table->text('tgl_pmn2')->nullable(); //Tanggal Pengumuman
            $table->text('no_pmn2')->nullable();
            $table->text('tgl_kon2')->nullable(); //Tanggal Kontrak
            $table->text('no_kon2')->nullable();
            $table->text('vendor2')->nullable();
            $table->text('selesaispph2')->nullable();
            $table->text('selesaietp2')->nullable();
            $table->text('selesaipsi2')->nullable();
            $table->text('selesaikak2')->nullable();
            $table->text('selesaisekper2')->nullable();
            $table->text('selesaipmn2')->nullable();
            $table->text('selesaikon2')->nullable();
            //3
            $table->string('kodebarang3')->nullable()->unique();
            $table->text('mulaippbj3')->nullable();
            $table->text('tgl_spph3')->nullable(); //Tanggal Spph
            $table->text('no_spph3')->nullable();
            $table->text('tgl_etp3')->nullable();
            $table->text('startpks3')->nullable(); // ini untuk mengambil time pada saat pegawai mengerjakan psi, kak, dan sekper
            $table->text('tgl_psi3')->nullable();
            $table->text('tgl_kak3')->nullable();
            $table->text('tgl_sekper3')->nullable();
            $table->text('tgl_pmn3')->nullable(); //Tanggal Pengumuman
            $table->text('no_pmn3')->nullable();
            $table->text('tgl_kon3')->nullable(); //Tanggal Kontrak
            $table->text('no_kon3')->nullable();
            $table->text('vendor3')->nullable();
            $table->text('selesaispph3')->nullable();
            $table->text('selesaietp3')->nullable();
            $table->text('selesaipsi3')->nullable();
            $table->text('selesaikak3')->nullable();
            $table->text('selesaisekper3')->nullable();
            $table->text('selesaipmn3')->nullable();
            $table->text('selesaikon3')->nullable();
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
        Schema::dropIfExists('prosespengadaans');
    }
}
