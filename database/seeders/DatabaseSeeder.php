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
            'username' => 'helmi',
            'email' => 'muhamadkelmi@gmail.com',
            'password' => bcrypt('Kelmi!@#')
        ]);

        User::factory()->create([
            'name' => 'Edwan Isrin',
            'username' => 'edwan',
            'email' => 'edwanisrin31@gmail.com',
            'password' => bcrypt('bandung')
        ]);

        User::factory()->create([
            'name' => 'Sunardi',
            'username' => 'sunardi',
            'email' => 'sunardi_cigadung@gmail.com',
            'password' => bcrypt('bandung')
        ]);

        User::factory()->create([
            'name' => 'Ana',
            'username' => 'ana',
            'email' => 'ana_cigadung@gmail.com',
            'password' => bcrypt('bandung')
        ]);
    }
}
