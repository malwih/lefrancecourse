<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Course;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Malwi Hidayat',
            'username' => 'malwihidayat',
            'email' => 'malwihidayatt@gmail.com',
            'password' => bcrypt('12345')
        ]);

        // User::factory(3)->create();

        Category::create([
            'name' => 'Daring',
            'slug' => 'daring'
        ]);

        Category::create([
            'name' => 'Tatap Muka',
            'slug' => 'tatap-muka'
        ]);

        Course::factory(20)->create();

    }
}
