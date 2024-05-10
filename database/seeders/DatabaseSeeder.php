<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Helmi',
            'email' => 'muhamadkelmi@gmail.com',
            'password' => bcrypt('Kelmi!@#')
        ]);

        User::factory()->create([
            'name' => 'Edwan Isrin',
            'email' => 'edwanisrin31@gmail.com',
            'password' => bcrypt('cigadung')
        ]);
    }
}
