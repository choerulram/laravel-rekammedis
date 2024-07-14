<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DokterSeeder extends Seeder
{
    public function run()
    {
        DB::table('tb_dokter')->insert([
            ['id_dokter' => 1, 'nama' => 'Dr. Arifin', 'jk' => 'Laki-Laki', 'spesialis' => 'Umum'],
            ['id_dokter' => 2, 'nama' => 'Dr. Kamal', 'jk' => 'Laki-laki', 'spesialis' => 'Mata'],
            ['id_dokter' => 3, 'nama' => 'Dr. Rizal', 'jk' => 'Laki-laki', 'spesialis' => 'Umum'],
            ['id_dokter' => 4, 'nama' => 'Dr. Safiya', 'jk' => 'Perempuan', 'spesialis' => 'Kandungan'],
            ['id_dokter' => 5, 'nama' => 'Dr. Nurul', 'jk' => 'Perempuan', 'spesialis' => 'Umum'],
        ]);
    }
}
