<?php

namespace Database\Seeders;

use App\Models\Makanan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JenisMakananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $makanan = [
            ['kode' => 'A01', 'alternatif' => 'Menu 01'],
            ['kode' => 'A02', 'alternatif' => 'Menu 02'],
        ];

        foreach ($makanan as $value) {
            Makanan::create($value);
        }
    }
}
