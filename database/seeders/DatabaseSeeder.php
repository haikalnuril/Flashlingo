<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $admin = User::create([
            'email' => 'admin@example.com',
            'name' => 'admin',
            'username' => 'admin',
            'password' => bcrypt('password'),
            'isAdmin' => '1',
            'no_telepon' => '6285555555'
        ]);
        $user1 = User::create([
            'email' => 'user1@example.com',
            'name' => 'user1',
            'username' => 'user1',
            'password' => bcrypt('password'),
            'isAdmin' => '0',
            'no_telepon' => '6285555555'
        ]);

    }
}
