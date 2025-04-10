<?php

namespace Database\Seeders;

use App\Models\kategoriak;
use App\Models\tevekenysegek;
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

        /*User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);*/

        User::factory(2)->create();
        kategoriak::factory(5)->create();
        tevekenysegek::factory(10)->create();
        
    }
}
