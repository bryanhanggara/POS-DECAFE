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

        \App\Models\User::factory()->createMany([
           [
            'name' => 'Admin Manajemen',
            'email' => 'admin@super.com',
            'password' => Hash::make('12345678'),
            'role' => 'ADMIN'
           ],
           [
            'name' => 'Robi Aulia',
            'email' => 'robi@cashier.com',
            'password' => Hash::make('12345678'),
            'role' => 'KASIR'
           ]
        ]);
    }
}
