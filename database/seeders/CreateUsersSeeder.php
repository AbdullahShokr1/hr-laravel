<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Admin = [
            [
                'name'=>'Admin',
                'email'=>'admin@gmail.com',
                'password'=> bcrypt('smsm2000'),
            ],
        ];
        $user = [
            [
                'name'=>'Asmaa',
                'email'=>'Asmaa@gmail.com',
                'password'=> bcrypt('Asmaa2000'),
            ],
        ];
        foreach ($Admin as $key => $value) {
            Admin::create($value);
        }
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
