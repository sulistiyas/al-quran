<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'id' => 1,
                'name' => 'Administrator',
                'email' => 'admin@mail.com',
                'password' => Hash::make('semangat'),
                'user_level'    => '0',
                'created_at'   => date('Y-m-d'),
                'updated_at'   => date('Y-m-d'),
            ],
            [
                'id' => 2,
                'name' => 'Jonathan',
                'email' => 'jona@mail.com',
                'password' => Hash::make('semangat'),
                'user_level'    => '1',
                'created_at'   => date('Y-m-d'),
                'updated_at'   => date('Y-m-d'),
            ],
        ];
        DB::table('users')->insert($users);

        $detail_users = [
            [
                'id_detail_users' => 1,
                'id_users' => 1,
                'phone_num' => '08123456798',
                'address' => 'Jakarta',
                'created_at'   => date('Y-m-d'),
                'updated_at'   => date('Y-m-d'),
            ],
            [
                'id_detail_users' => 2,
                'id_users' => 2,
                'phone_num' => '08987456123',
                'address' => 'Tangerang',
                'created_at'   => date('Y-m-d'),
                'updated_at'   => date('Y-m-d'),
            ],
        ];

        DB::table('detail_users')->insert($detail_users);
    }
}
