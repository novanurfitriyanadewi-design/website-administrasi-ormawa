<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            SuratMasukSeeder::class,
            SuratKeluarSeeder::class,
            UserSeeder::class,
        ]);
    }
}