<?php

namespace Database\Seeders;

use App\Models\Jenis;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JenisSeeder extends Seeder
{

    public function run(): void
    {
        $jenis = [
            ['nama'=>'power'],
            ['nama'=>'mixer'],
            ['nama'=>'speaker'],
            ['nama'=>'microphone'],
            ['nama'=>'kabel'],
            ['nama'=>'stand mic'],
            ['nama'=>'lampu'],
            ['nama'=>'mobil'],
            ['nama'=>'pembangkit listrik'],
            ['nama'=>'power'],
            ['nama'=>'box'],
            ['nama'=>'management'],
        ];
        foreach ($jenis as $key => $value) {
            Jenis::create($value);
        }
    }
}
