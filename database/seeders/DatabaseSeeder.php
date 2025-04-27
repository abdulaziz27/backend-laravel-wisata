<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Category;
use App\Models\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Abdul Aziz',
            'email' => 'itsdulziz@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'admin'
        ]);

        User::factory()->create([
            'name' => 'Admin Dolankuy',
            'email' => 'admin@dolankuy.com',
            'password' => Hash::make('password'),
            'role' => 'admin'
        ]);

        User::factory()->create([
            'name' => 'user',
            'email' => 'user@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'user'
        ]);

        $this->call([
            CategoriesTableSeeder::class,
            ProductsTableSeeder::class,
        ]);
    }
}
