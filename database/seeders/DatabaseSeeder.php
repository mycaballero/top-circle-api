<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(CountriesTableSeeder::class);
        $this->call(DepartmentsTableSeeder::class);
        $this->call(CitiesTableSeeder::class);
        $this->call(VenuesTableSeeder::class);
    }
}
