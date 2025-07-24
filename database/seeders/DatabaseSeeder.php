<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Jalankan seeder admin
        $this->call([
        AdminSeeder::class,
        LayananSeeder::class,
       ]);

        // Optional: data dummy user
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
