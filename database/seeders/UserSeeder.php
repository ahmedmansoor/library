<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
                'name' => 'Ahmed Mansoor',
                'username' => 'admin',
                'staff_id' => '288222',
                'phone_number' => '9999333',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('Admin321*'),
                'remember_token' => Str::random(10)
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
