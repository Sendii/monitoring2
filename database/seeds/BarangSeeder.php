<?php

use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // \App\barang::insert([
        // 	[
        // 		'id' => '1',
        // 		'banyak_brg' => '2',
        // 		'nama_barang' => 'Proyektor',
        // 		'jumlah_brg' => '2',
        // 		'harga_brg' => '250000',
        // 		'total_brg' => '500000',
        // 		'hargatotal_brg' => '1000000'
        // 	],
        // 	[
        // 		'id' => '1',
        // 		'banyak_brg' => '2',
        // 		'nama_barang' => 'LCD',
        // 		'jumlah_brg' => '5',
        // 		'harga_brg' => '100000',
        // 		'total_brg' => '500000',
        // 		'hargatotal_brg' => '1000000'
        // 	],
        // ]);
        DB::table('pegawais')->insert(
            array(
                'namapegawai' => 'Pak Taufiq',
                'id_jabatan' => '8',
                'notelp' => '089531292812',
            )
        );
        DB::table('pegawais')->insert(
            array(              
                'namapegawai' => 'Mba Widiya',
                'id_jabatan' => '7',
                'notelp' => '081291821191',
            )
        );
        DB::table('pegawais')->insert(
            array(              
                'namapegawai' => 'Pak Eko',
                'id_jabatan' => '7',
                'notelp' => '095761920115',
            )
        );
        DB::table('pegawais')->insert(
            array(              
                'namapegawai' => 'Mba Deva',
                'id_jabatan' => '7',
                'notelp' => '082201920831',
            )
        );
        DB::table('pegawais')->insert(
            array(             
                'namapegawai' => 'Pak Iwan',
                'id_jabatan' => '8',
                'notelp' => '0857102129',
            )
        );
        DB::table('pegawais')->insert(
            array(             
                'namapegawai' => 'Pak Makmun',
                'id_jabatan' => '7',
                'notelp' => '089538129121',
            )
        );
        DB::table('pegawais')->insert(
            array(            
                'namapegawai' => 'Bu Sri Adityawati',
                'id_jabatan' => '4',
                'notelp' => '089538129121',
            )
        );
        DB::table('pegawais')->insert(
            array(            
                'namapegawai' => 'Pak Sugiarjo',
                'id_jabatan' => '5',
                'notelp' => '089538129121',
            )
        );
        DB::table('pegawais')->insert(
            array(            
                'namapegawai' => 'Pak Triatmojo',
                'id_jabatan' => '6',
                'notelp' => '089538129121',
            )
        );
        DB::table('pegawais')->insert(
            array(             
                'namapegawai' => 'Pak Tomi',
                'id_jabatan' => '1',
                'notelp' => '089538129121',
            )
        );
        DB::table('pegawais')->insert(
            array(            
                'namapegawai' => 'Mba Fitri',
                'id_jabatan' => '7',
                'notelp' => '082201920831',
            )
        );
    }
}
