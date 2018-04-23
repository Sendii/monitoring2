<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePengadaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengadaans', function (Blueprint $table) {
            $table->increments('id');
            $table->text('namapengadaan');
            $table->timestamps();
        });
        DB::table('pengadaans')->insert(
            array(                
                'namapengadaan' => 'Expense',
            )
        );
        DB::table('pengadaans')->insert(
            array(                
                'namapengadaan' => 'Inventory',
            )
        );
        DB::table('pengadaans')->insert(
            array(                
                'namapengadaan' => 'Non Fixed Asset',
            )
        );
        DB::table('pengadaans')->insert(
            array(                
                'namapengadaan' => 'Fixed Asset',
            )
        );
        DB::table('pengadaans')->insert(
            array(                
                'namapengadaan' => 'Services',
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
        Schema::dropIfExists('pengadaans');
    }
}
