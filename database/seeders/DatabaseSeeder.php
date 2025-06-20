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
        $this->call([
            AdminUsersSeeder::class,
            ServicesTableSeeder::class,
            SpecialitiesTableSeeder::class,
            PropertiesTableSeeder::class,
            LandsTableSeeder::class,
            TeamMembersTableSeeder::class,
            FacilitiesTableSeeder::class,
        ]);
    }
}
