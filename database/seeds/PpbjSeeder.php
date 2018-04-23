<?php

use Illuminate\Database\Seeder;

class PpbjSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\pbbj::insert([
        	[
        		'id_unit' => 1,
        		'no_regis_umum' => '1010',
        		'tgl_regis_umum' => date('Y-m-d'),
        		'no_ppbj' => '2210',
        		'tgl_permintaan_ppbj' => date('Y-m-d'),
        		'tgl_dibutuhkan_ppbj' => date('Y-m-d'),
        		'namapengadaan' => 'inipengadaan',
                'id_pengadaan' => 1,
        		'created_at'      => \Carbon\Carbon::now('Asia/Jakarta')
        	],
        ]);
    }
}
