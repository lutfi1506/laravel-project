<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\History;
use App\Models\Hutangs;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Lists;
use App\Models\Paket;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(5)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     "name" => "lutfi",
        //     "email" => "lutfi@gmail.com",
        //     "password" => bcrypt("12345")
        // ]);

        Paket::factory(3)->create();
        History::factory(20)->create();
        Hutangs::factory(3)->create();
    }
}
