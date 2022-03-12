<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\City;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cities = [
            [
                'name' => 'Barranquilla',
                'departmentId' => DB::table('departments')->where('name','Atlántcio')->value('id'),
            ],
            [
                'name' => 'Soledad',
                'departmentId' => DB::table('departments')->where('name','Atlántcio')->value('id'),
            ],
            [
                'name' => 'Cartagena',
                'departmentId' => DB::table('departments')->where('name','Bolivar')->value('id'),
            ],
            [
                'name' => 'Santa Marta',
                'departmentId' => DB::table('departments')->where('name','Magdalena')->value('id'),
            ],
        ];
        foreach ($cities as $city) {
            City::updateOrCreate([
                'name' => $city['name'],
                'departmentId' => $city['departmentId'],
                'created_at' => Carbon::now()
            ], $city);
        }
    }
}
