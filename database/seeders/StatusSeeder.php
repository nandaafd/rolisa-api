<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['nama'=>'menunggu'],
            ['nama'=>'selesai'],
            ['nama'=>'batal'],
            ['nama'=>'ditolak'],
        ];
        foreach ($data as $key => $value) {
            Status::create($value);
        }
    }
}
