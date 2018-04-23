<?php

use Illuminate\Database\Seeder;

class User extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::insert([
            [
              'name'  => 'User',
              'email' => 'user@user.com',
              'password' => bcrypt('useer1'),
              'akses' => 'User',
              'created_at'      => \Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
              'name'  => 'Kasubag QA&QC',
              'email' => 'kasubagqa@kasubag.com',
              'password' => bcrypt('kasubag'),
              'akses' => 'Kasubag QA',
              'created_at'      => \Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
              'name'  => 'Kasubag Pusat',
              'email' => 'kasubagpusat@kasubag.com',
              'password' => bcrypt('kasubag'),
              'akses' => 'Kasubag Pusat',
              'created_at'      => \Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
              'name'  => 'Kasubag Cabang',
              'email' => 'kasubagcabang@kasubag.com',
              'password' => bcrypt('kasubag'),
              'akses' => 'Kasubag Cabang',
              'created_at'      => \Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
              'name'  => 'Kadiv',
              'email' => 'kadiv@kadiv.com',
              'password' => bcrypt('kadiv1'),
              'akses' => 'Kadiv',
              'created_at'      => \Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
              'name'  => 'Admin',
              'email' => 'admin@admin.com',
              'password' => bcrypt('admin1'),
              'akses' => 'Admin',
              'created_at'      => \Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
              'name'  => 'Kasubag Cabang Batulicin',
              'email' => 'kasubagcabangbatulicin@kasubag.com',
              'password' => bcrypt('kasubag'),
              'akses' => 'Kasubag Cabang Batulicin',
              'created_at'      => \Carbon\Carbon::now('Asia/Jakarta')
            ],
        ]);
    }
}
