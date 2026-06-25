<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'DPM SAINTEK',
            'email' => 'dpm@saintek.unipdu.ac.id',
            'password' => Hash::make('dpm123'),
            'role' => 'dpm',
        ]);

        User::create([
            'name' => 'BEM SAINTEK',
            'email' => 'bem@saintek.unipdu.ac.id',
            'password' => Hash::make('bem123'),
            'role' => 'bem',
        ]);

        User::create([
            'name' => 'HIMASI',
            'email' => 'himasi@unipdu.ac.id',
            'password' => Hash::make('himasi123'),
            'role' => 'himasi',
        ]);
    }
}