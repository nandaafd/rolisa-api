<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['nama'=>'admin'],
            ['nama'=>'customer'],
            ['nama'=>'karyawan'],
        ];
        foreach ($data as $key => $value) {
            Role::create($value);
        }
    }
}
