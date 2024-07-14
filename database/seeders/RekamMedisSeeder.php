<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RekamMedisSeeder extends Seeder
{
    public function run()
    {
        DB::table('tb_rekam_medis')->insert([
            [
                'id_rekam' => 15,
                'id_pasien' => 12,
                'keluhan' => 'Sakit Jantung',
                'diagnosa' => '',
                'tanggal' => '2021-03-28',
                'id_dokter' => 1,
                'status' => 'pendaftaran',
            ],
            [
                'id_rekam' => 19,
                'id_pasien' => 13,
                'keluhan' => 'Sakit Gigi',
                'diagnosa' => '',
                'tanggal' => '2021-03-28',
                'id_dokter' => 5,
                'status' => 'pendaftaran',
            ],
            [
                'id_rekam' => 25,
                'id_pasien' => 12,
                'keluhan' => 'Sakit Jantung',
                'diagnosa' => '',
                'tanggal' => '2021-03-28',
                'id_dokter' => 1,
                'status' => 'pendaftaran',
            ],
            [
                'id_rekam' => 26,
                'id_pasien' => 13,
                'keluhan' => 'Sakit Jantung',
                'diagnosa' => '',
                'tanggal' => '2021-03-28',
                'id_dokter' => 1,
                'status' => 'pemeriksaan',
            ],
            [
                'id_rekam' => 34,
                'id_pasien' => 11,
                'keluhan' => 'Menggigil',
                'diagnosa' => 'Demam',
                'tanggal' => '2024-06-01',
                'id_dokter' => 3,
                'status' => 'selesai',
            ],
            [
                'id_rekam' => 35,
                'id_pasien' => 12,
                'keluhan' => 'Sakit Kepala',
                'diagnosa' => 'Migren',
                'tanggal' => '2024-06-01',
                'id_dokter' => 4,
                'status' => 'pemeriksaan',
            ],
            [
                'id_rekam' => 38,
                'id_pasien' => 15,
                'keluhan' => 'Sakit Hati',
                'diagnosa' => 'Habis Putus',
                'tanggal' => '2024-07-24',
                'id_dokter' => 1,
                'status' => 'selesai',
            ],
            [
                'id_rekam' => 40,
                'id_pasien' => 14,
                'keluhan' => 'Sakit Kepala',
                'diagnosa' => 'Migren',
                'tanggal' => '2024-07-11',
                'id_dokter' => 5,
                'status' => 'selesai',
            ],
            [
                'id_rekam' => 44,
                'id_pasien' => 15,
                'keluhan' => 'Sakit Mata',
                'diagnosa' => 'Mata Iritasi',
                'tanggal' => '2024-07-12',
                'id_dokter' => 4,
                'status' => 'selesai',
            ],
            [
                'id_rekam' => 45,
                'id_pasien' => 12,
                'keluhan' => 'Sakit Mata',
                'diagnosa' => 'Iritasi Mata',
                'tanggal' => '2024-07-16',
                'id_dokter' => 2,
                'status' => 'selesai',
            ],
            [
                'id_rekam' => 47,
                'id_pasien' => 13,
                'keluhan' => 'Sakit Gigi',
                'diagnosa' => 'Gigi Berlubang',
                'tanggal' => '2024-07-12',
                'id_dokter' => 5,
                'status' => 'selesai',
            ],
            [
                'id_rekam' => 48,
                'id_pasien' => 13,
                'keluhan' => 'Sakit Kepala',
                'diagnosa' => 'Migren',
                'tanggal' => '2024-07-13',
                'id_dokter' => 1,
                'status' => 'selesai',
            ],
            [
                'id_rekam' => 49,
                'id_pasien' => 11,
                'keluhan' => 'Sakit Gigi',
                'diagnosa' => NULL,
                'tanggal' => '2024-07-13',
                'id_dokter' => 1,
                'status' => 'pendaftaran',
            ],
            [
                'id_rekam' => 50,
                'id_pasien' => 14,
                'keluhan' => 'Sakit Mata',
                'diagnosa' => 'Iritasi',
                'tanggal' => '2024-07-13',
                'id_dokter' => 1,
                'status' => 'selesai',
            ],
            [
                'id_rekam' => 52,
                'id_pasien' => 11,
                'keluhan' => 'Sakit Mata',
                'diagnosa' => NULL,
                'tanggal' => '2024-07-13',
                'id_dokter' => 2,
                'status' => 'pemeriksaan',
            ],
            [
                'id_rekam' => 53,
                'id_pasien' => 13,
                'keluhan' => 'Sakit Mata',
                'diagnosa' => NULL,
                'tanggal' => '2024-07-13',
                'id_dokter' => 2,
                'status' => 'pemeriksaan',
            ],
            [
                'id_rekam' => 54,
                'id_pasien' => 13,
                'keluhan' => 'Pusing',
                'diagnosa' => NULL,
                'tanggal' => '2024-07-13',
                'id_dokter' => 3,
                'status' => 'pemeriksaan',
            ],
            [
                'id_rekam' => 55,
                'id_pasien' => 15,
                'keluhan' => 'Sakit Perut',
                'diagnosa' => NULL,
                'tanggal' => '2024-07-13',
                'id_dokter' => 3,
                'status' => 'pemeriksaan',
            ],
            [
                'id_rekam' => 56,
                'id_pasien' => 14,
                'keluhan' => 'Sakit Perut',
                'diagnosa' => NULL,
                'tanggal' => '2024-07-13',
                'id_dokter' => 4,
                'status' => 'pemeriksaan',
            ],
            [
                'id_rekam' => 57,
                'id_pasien' => 15,
                'keluhan' => 'Nyeri Perut',
                'diagnosa' => NULL,
                'tanggal' => '2024-07-13',
                'id_dokter' => 4,
                'status' => 'pemeriksaan',
            ],
            [
                'id_rekam' => 58,
                'id_pasien' => 14,
                'keluhan' => 'Demam',
                'diagnosa' => NULL,
                'tanggal' => '2024-07-13',
                'id_dokter' => 5,
                'status' => 'pemeriksaan',
            ],
        ]);
    }
}