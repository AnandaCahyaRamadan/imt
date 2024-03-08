<?php

namespace Database\Seeders;

use App\Models\Aktivitas;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AktivitasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $aktivitas = [
            ['nama' => 'Sedang'],
            ['nama' => 'Berat'],
        ];

        foreach ($aktivitas as $value) {
            Aktivitas::create($value);
        }
    }
}
