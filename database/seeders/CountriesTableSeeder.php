<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Country;
use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = [
            [
                'name' => 'Colombia',
            ],

        ];
        foreach ($countries as $country) {
            Country::updateOrCreate([
                'name' => $country['name'],
                'created_at' => Carbon::now()
            ], $country);
        }
    }
}
