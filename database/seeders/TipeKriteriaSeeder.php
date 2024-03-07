<?php

namespace Database\Seeders;

use App\Models\TipeKriteria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipeKriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipe_kriteria = [
            ['nama' => 'Benefit'],
            ['nama' => 'Cost'],
        ];

        foreach ($tipe_kriteria as $kriteria) {
            TipeKriteria::create($kriteria);
        }
    }
}
