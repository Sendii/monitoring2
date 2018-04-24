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
        //1
        DB::table('jabatans')->insert(
            array(     
                'id_jabatan' => 1,         
                'jabatan' => 'Kepala Divisi',
            )
        );
        //2
        DB::table('jabatans')->insert(
            array(             
                'id_jabatan' => 2,  
                'jabatan' => 'Administrator Officier',
            )
        );
        //3
        DB::table('jabatans')->insert(
            array(
                'id_jabatan' => 3,
                'jabatan' => 'Kepala Bagian',
            )
        );
        //4
        DB::table('jabatans')->insert(
            array(
                'id_jabatan' => 4,
                'jabatan' => 'Kasubag Pusat',
            )
        );
        //5
        DB::table('jabatans')->insert(
            array(
                'id_jabatan' => 5,                
                'jabatan' => 'Kasubag Cabang',
            )
        );
        //6
        DB::table('jabatans')->insert(
            array(
                'id_jabatan' => 6,
                'jabatan' => 'Kasubag QA&QC',
            )
        );
        //7
        DB::table('jabatans')->insert(
            array(
                'id_jabatan' => 7,                
                'jabatan' => 'Staff Pusat',
            )
        );
        //8
        DB::table('jabatans')->insert(
            array(
                'id_jabatan' => 8,                
                'jabatan' => 'Staff Cabang',
            )
        );
        //9
        DB::table('jabatans')->insert(
            array(
                'id_jabatan' => 9,               
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
