<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\KK;

class KKSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kk = [
            [
                'code' => 'prpl',
                'name' => 'Pemrograman Rekayasa Perangkat Lunak',
                'logo' => 'prpl.png',
            ],
            [
                'code' => 'vksb',
                'name' => 'Visi Komputer dan Sistem Berintelegensia',
                'logo' => 'vskb.png',
            ],
            [
                'code' => 'mdsi',
                'name' => 'Manajemen Data dan Sistem Informasi',
                'logo' => 'mdsi.png',
            ],
            [
                'code' => 'skkt',
                'name' => 'Sistem Komputer dan Komputasi Terdistribusi',
                'logo' => 'skkt.png',
            ],
        ];

        foreach ($kk as $key => $value) {
            KK::create($value);
        }
    }
}
