<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            WalletSeeder::class
        ]);
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Usuario 1',
            'email' => 'usuario1@gmail.com',
            'password' => Hash::make('password'),
            'wallet_id' => 1,
            'created_at' => now(),
        ]);
        
        \App\Models\User::factory()->create([
            'name' => 'Usuario 2',
            'email' => 'usuario2@gmail.com',
            'password' => Hash::make('password'),
            'wallet_id' => 1,
            'created_at' => now(),
        ]);
    }
}
