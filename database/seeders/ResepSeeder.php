<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResepSeeder extends Seeder
{
    public function run()
    {
        DB::table('tb_resep')->insert([
            [
                'id_resep' => 15,
                'id_rekam' => 34,
                'id_obat' => 12,
                'keterangan' => 'Minum 3 kali sehari setelah makan',
            ],
            [
                'id_resep' => 16,
                'id_rekam' => 38,
                'id_obat' => 12,
                'keterangan' => 'Move on',
            ],
            [
                'id_resep' => 17,
                'id_rekam' => 40,
                'id_obat' => 12,
                'keterangan' => 'Minum 2 kali sehari setelah makan',
            ],
            [
                'id_resep' => 20,
                'id_rekam' => 44,
                'id_obat' => 11,
                'keterangan' => 'Teteskan 1-2 tetes di mata 3-4x kali sehari',
            ],
            [
                'id_resep' => 21,
                'id_rekam' => 45,
                'id_obat' => 11,
                'keterangan' => 'Teteskan 1-2 tetes di mata 3-4x kali sehari',
            ],
            [
                'id_resep' => 22,
                'id_rekam' => 47,
                'id_obat' => 10,
                'keterangan' => 'Sikat gigi 2 kali sehari',
            ],
            [
                'id_resep' => 23,
                'id_rekam' => 48,
                'id_obat' => 12,
                'keterangan' => 'Minum 2 kali sehari setelah makan',
            ],
            [
                'id_resep' => 24,
                'id_rekam' => 50,
                'id_obat' => 11,
                'keterangan' => 'Teteskan 1-2 tetes di mata 3-4x kali sehari',
            ],
        ]);
    }
}
