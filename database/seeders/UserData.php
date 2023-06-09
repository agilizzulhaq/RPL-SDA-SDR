<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserData extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            [
                'name' => 'admin',
                'email' => 'admin@rosati.com',
                'password' => bcrypt('12345678'),
                'level' => '1',

            ],
            [
                'name' => 'ware',
                'email' => 'ware@rosati.com',
                'password' => bcrypt('12345678'),
                'level' => '2',

            ],
            [
                'name' => 'user',
                'email' => 'user@rosati.com',
                'password' => bcrypt('12345678'),
                'level' => '3',

            ],
            [
                'name' => 'alyzar',
                'email' => 'alyzaraviandi@gmail.com',
                'password' => bcrypt('12345678'),
                'level' => '1',
            ]
        ];
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
