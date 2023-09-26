<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{

    public function run(): void
    {
        $data = [
            [
                'nickname'=>'nanda',
                'fullname'=>'admin-nanda',
                'email'=>'nanda@rolisa.com',
                'password'=>bcrypt('nanda123'),
                'role_id'=>1
            ],
            [
                'nickname'=>'ilul',
                'fullname'=>'admin-ilul',
                'email'=>'ilul@rolisa.com',
                'password'=>bcrypt('ilul123'),
                'role_id'=>1
            ]
        ];
        foreach ($data as $key => $value) {
            User::create($data);
        }

    }
}
