<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Seed Admin User
        \App\Models\User::updateOrCreate(
            ['email' => 'admin@ksp-consulting.com'],
            [
                'name' => 'Admin KSP',
                'password' => \Illuminate\Support\Facades\Hash::make('admin123'),
            ]
        );

        // 2. Call Page Update Seeders
        $this->call([
            HomeUpdateSeeder::class,
            AboutUpdateSeeder::class,
            ExperienceUpdateSeeder::class,
            PhilosophyUpdateSeeder::class,
            ServicesSettingsSeeder::class,
            TrainingSettingsSeeder::class,
            GlobalSettingsSeeder::class,
        ]);
    }
}

