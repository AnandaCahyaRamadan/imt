<?php

namespace Database\Seeders;

use App\Models\Aktifitas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AktifitasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $aktifitas = [
            ['nama' => 'Sedang'],
            ['nama' => 'Berat'],
        ];

        foreach ($aktifitas as $value) {
            Aktifitas::create($value);
        }
    }
}
