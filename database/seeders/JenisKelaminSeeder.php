<?php

namespace Database\Seeders;

use App\Models\JenisKelamin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JenisKelaminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jenis_kelamin = [
            ['jenis_kelamin' => 'Laki-Laki'],
            ['jenis_kelamin' => 'Perempuan'],
        ];

        foreach ($jenis_kelamin as $kelamin) {
            JenisKelamin::create($kelamin);
        }
    }
}
