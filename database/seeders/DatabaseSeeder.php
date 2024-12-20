<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'nik' => '12345678',
            'no_hp' => '085213298664',
            'alamat' => 'iugerwfi wf',
            'jenis_dagangan' => 'Buah',
            'role' => 'pedagang',
        ]);
    }
}
