<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
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
                'name' => 'Chaves',
                'email' => 'chaves@vila.com',
                'password' => Hash::make('password'),
                'photo' => 'chaves.jpg'
            ],
            [
                'name' => 'Chiquinha',
                'email' => 'chiquinha@vila.com',
                'password' => Hash::make('password'),
                'photo' => 'chiquinha.jpeg'
            ],
            [
                'name' => 'Kiko',
                'email' => 'kiko@vila.com',
                'password' => Hash::make('password'),
                'photo' => 'kiko.jpg'
            ]
        ];

        foreach ($users as $user) {
            DB::table('users')->insert($user);
        }
    }
}
