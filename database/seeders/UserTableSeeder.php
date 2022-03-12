<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'firstName' => 'Super',
                'lastName' => 'Administrador',
                'email' => 'miguelcaballeros.mc@gmail.com',
                'password' => 'miguel7466953',
                'status' => true
            ],
            [
                'firstName' => 'primer',
                'lastName' => 'jugador',
                'email' => 'miguelcaballeros@hotmail.com',
                'password' => 'miguel7466953',
                'status' => true
            ]
        ];
        foreach ($users as $user) {
            User::updateOrCreate(['email' => $user['email']], [
                'firstName' => $user['firstName'],
                'lastName' => $user['lastName'],
                'email' => $user['email'],
                'password' => app("hash")->make($user['password']),
                'status' => $user['status'],
                'created_at' => Carbon::now()
            ],$user);
        }
    }
}
