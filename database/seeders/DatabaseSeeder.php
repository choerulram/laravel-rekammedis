<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            AdminSeeder::class,
            DokterSeeder::class,
            ObatSeeder::class,
            PasienSeeder::class,
            RekamMedisSeeder::class,
            ResepSeeder::class,
            UserSeeder::class,
        ]);
    }
}
