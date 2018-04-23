<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJabatansTable extends Migration
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
            $table->increments('id_jabatan');
            $table->text('jabatan');
            $table->timestamps();
        });
        //1
        DB::table('jabatans')->insert(
            array(                
                'jabatan' => 'Kepala Divisi',
            )
        );
        //2
        DB::table('jabatans')->insert(
            array(                
                'jabatan' => 'Administrator Officier',
            )
        );
        //3
        DB::table('jabatans')->insert(
            array(                
                'jabatan' => 'Kepala Bagian',
            )
        );
        //4
        DB::table('jabatans')->insert(
            array(                
                'jabatan' => 'Kasubag Pusat',
            )
        );
        //5
        DB::table('jabatans')->insert(
            array(                
                'jabatan' => 'Kasubag Cabang',
            )
        );
        //6
        DB::table('jabatans')->insert(
            array(                
                'jabatan' => 'Kasubag QA&QC',
            )
        );
        //7
        DB::table('jabatans')->insert(
            array(                
                'jabatan' => 'Staff Pusat',
            )
        );
        //8
        DB::table('jabatans')->insert(
            array(                
                'jabatan' => 'Staff Cabang',
            )
        );
        //9
        DB::table('jabatans')->insert(
            array(                
                'jabatan' => 'Kasubag Cabang Batulicin',
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jabatans');
    }
}
