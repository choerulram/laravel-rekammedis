<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        DB::table('tb_user')->insert([
            ['username' => 'admin', 'password' => 'admin123', 'level' => 'Admin', 'id_admin' => 1, 'id_dokter' => null],
            ['username' => 'admin2', 'password' => 'admin123', 'level' => 'Admin', 'id_admin' => 2, 'id_dokter' => null],
            ['username' => 'arifin', 'password' => '12345', 'level' => 'Dokter', 'id_admin' => null, 'id_dokter' => 1],
            ['username' => 'kamal', 'password' => '12345', 'level' => 'Dokter', 'id_admin' => null, 'id_dokter' => 2],
            ['username' => 'nurul', 'password' => '12345', 'level' => 'Dokter', 'id_admin' => null, 'id_dokter' => 5],
            ['username' => 'rizal', 'password' => '12345', 'level' => 'Dokter', 'id_admin' => null, 'id_dokter' => 3],
            ['username' => 'safiya', 'password' => '12345', 'level' => 'Dokter', 'id_admin' => null, 'id_dokter' => 4],
        ]);
    }
}
