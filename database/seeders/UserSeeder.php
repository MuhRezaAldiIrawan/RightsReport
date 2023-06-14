<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $currentTimestamp = Carbon::now();
        $users = [
            [
                'nama' => 'Admin',
                'email' => 'admin@gmail.com',
                'hp' => '082393169811',
                'role' => 'Admin', 
                'password' => bcrypt('admin'),
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp,
            ],
            [
                'nama' => 'eksekutor',
                'email' => 'eksekutor@gmail.com',
                'hp' => '085255279996',
                'role' => 'eksekutor', 
                'password' => bcrypt('eksekutor'),
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp,
            ],
            [
                'nama' => 'user',
                'email' => 'user@gmail.com',
                'hp' => '082123234423',
                'role' => 'user', 
                'password' => bcrypt('user'),
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp,
            ], 
        ];
        User::insert($users);
    }
}
