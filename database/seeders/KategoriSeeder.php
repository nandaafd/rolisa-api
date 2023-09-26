<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['nama'=>'soundsystem'],
            ['nama'=>'kursi'],
            ['nama'=>'terop'],
            ['nama'=>'photographer'],
            ['nama'=>'panggung'],
            ['nama'=>'dekorasi'],
            ['nama'=>'lighting'],
        ];
        foreach ($data as $key => $value) {
            Kategori::create($value);
        }
    }
}
