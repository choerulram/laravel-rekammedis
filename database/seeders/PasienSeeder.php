<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PasienSeeder extends Seeder
{
    public function run()
    {
        DB::table('tb_pasien')->insert([
            ['id_pasien' => 11, 'no_kartu' => '01', 'nama' => 'Rasyid', 'jk' => 'Laki - laki', 'umur' => 30],
            ['id_pasien' => 12, 'no_kartu' => '02', 'nama' => 'Matrui', 'jk' => 'Laki - laki', 'umur' => 58],
            ['id_pasien' => 13, 'no_kartu' => '03', 'nama' => 'Kholil', 'jk' => 'Laki - laki', 'umur' => 20],
            ['id_pasien' => 14, 'no_kartu' => '04', 'nama' => 'Shasa', 'jk' => 'Perempuan', 'umur' => 35],
            ['id_pasien' => 15, 'no_kartu' => '05', 'nama' => 'Yanti', 'jk' => 'Perempuan', 'umur' => 70],
        ]);
    }
}
