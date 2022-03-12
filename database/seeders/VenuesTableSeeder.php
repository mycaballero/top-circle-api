<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Venue;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VenuesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $venues = [
            [
                'name' => 'Empresa abc Barranquilla-centro',
                'cityId' => DB::table('cities')->where('name','Barranquilla')->value('id'),
                'code' => 'ABCB'
            ],
            [
                'name' => 'Empresa abc Soledad-arg',
                'cityId' => DB::table('cities')->where('name','Soledad')->value('id'),
                'code' => 'ABCS'
            ],

        ];
        foreach ($venues as $venue) {
            Venue::updateOrCreate([
                'name' => $venue['name'],
                'cityId' => $venue['cityId'],
                'created_at' => Carbon::now()
            ], $venue);
        }
    }
}
