<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // role admin = 1
        // role mentor = 2
        // role user = 3
        $admin = [
            [
                'name' => 'dioz',
                'email' => 'diozwuelek@gmail.com',
                'password' => bcrypt('wuelek'),
                'role' => 1
            ],
            [
                'name' => 'gopal',
                'email' => 'gopalzzz@gmail.com',
                'password' => bcrypt('cekrik'),
                'role' => 1
            ],
            [
                'name' => 'syanzz',
                'email' => 'syanda@gmail.com',
                'password' => bcrypt('cakep'),
                'role' => 1
            ],
        ];

        $mentor = [
            [
                'name' => 'hamm',
                'email' => 'strux@gmail.com',
                'password' => bcrypt('ilhxm'),
                'role' => 2
            ]
        ];

        $user = [
            [
                'name' => 'user',
                'email' => 'serr@gmail.com',
                'password' => bcrypt('123'),
                'role' => 3
            ]
        ];
        

        User::insert($admin);
        User::insert($mentor);
        User::insert($user);
    }
}
