<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

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
        $admin = User::find(1);
        $admin->role = User::ROLE_ADMIN;
        $admin->save();

        $superadmin = User::find(2);
        $superadmin->role = User::ROLE_SUPERADMIN;
        $superadmin->save();
    }
}