<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UpdateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call([
            HomeUpdateSeeder::class,
            AboutUpdateSeeder::class,
            ExperienceUpdateSeeder::class,
            PhilosophyUpdateSeeder::class,
            ServicesSettingsSeeder::class,
            TrainingSettingsSeeder::class,
        ]);
    }
}
