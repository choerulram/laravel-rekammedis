<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    public function run()
    {
        DB::table('tb_admin')->insert([
            ['id_admin' => 1, 'nama' => 'Admin - Irul'],
            ['id_admin' => 2, 'nama' => 'Admin - Amal'],
            ['id_admin' => 3, 'nama' => 'Admin - Nira'],
            ['id_admin' => 4, 'nama' => 'Admin - Putri'],
        ]);
    }
}
