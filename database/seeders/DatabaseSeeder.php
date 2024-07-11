<?php

namespace Database\Seeders;

use App\Models\Catalog;
use App\Models\Category;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $farid = User::factory()->create([
            'name' => 'Farid',
            'email' => 'farid@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
        ]);

        Catalog::factory(100)->recycle([
            Category::factory(3)->create(),
            $farid
        ])->create();
    }
}
