<?php

use Illuminate\Database\Seeder;

class ProsesPengadaan extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   public function run()
    {
        \App\prosespengadaan::insert([
        	[
        		'id_pegawai' => 1,
        		'id_ppbj' => 1,
        		'created_at'      => \Carbon\Carbon::now('Asia/Jakarta')
        	],
        ]);
        \App\prosesrealisasi::insert([
            [
                'id_ppbj' => 1,
                'created_at'      => \Carbon\Carbon::now('Asia/Jakarta')
            ],
        ]);
        \App\barangrealisasi::insert([
            [
                'id' => 1,
                'banyak_brg' => 1,
                'nama_barang' => 'LCD',
                'jumlah_brg' => 1,
                'harga_brg' => 500000,
                'total_brg' => 500000,
                'hargatotal_brg' => 500000,
                'created_at'      => \Carbon\Carbon::now('Asia/Jakarta')
            ],
        ]);
    }
}
