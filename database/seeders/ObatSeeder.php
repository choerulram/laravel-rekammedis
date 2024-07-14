<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ObatSeeder extends Seeder
{
    public function run()
    {
        DB::table('tb_obat')->insert([
            ['id_obat' => 9, 'nama' => 'Nitroglycerin'],
            ['id_obat' => 10, 'nama' => 'Aspirin 81MG'],
            ['id_obat' => 11, 'nama' => 'Tetrahydrozoline (Visine)'],
            ['id_obat' => 12, 'nama' => 'Paracetamol 500MG'],
            ['id_obat' => 13, 'nama' => 'Ibuprofen 400MG'],
        ]);
    }
}
