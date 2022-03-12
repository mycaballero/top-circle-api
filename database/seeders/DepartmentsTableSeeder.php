<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Department;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countryId = DB::table('countries')->where('name','Colombia')->value('id');
        $departments = [
            [
                'name' => 'Atlántcio',
                'countryId' => $countryId,
            ],
            [
                'name' => 'Bolivar',
                'countryId' => $countryId,
            ],
            [
                'name' => 'Magdalena',
                'countryId' => $countryId,
            ],

        ];
        foreach ($departments as $department) {
            Department::updateOrCreate([
                'name' => $department['name'],
                'countryId' => $department['countryId'],
                'created_at' => Carbon::now()
            ], $department);
        }
    }
}
