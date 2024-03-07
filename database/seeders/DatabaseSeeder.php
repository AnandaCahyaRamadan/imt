<?php

namespace Database\Seeders;

use App\Models\TipeKriteria;
use Illuminate\Database\Seeder;
use Database\Seeders\AktifitasSeeder;
use Database\Seeders\JenisKelaminSeeder;
use Database\Seeders\JenisMakananSeeder;
use Database\Seeders\TipeKriteriaSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(AktifitasSeeder::class);
        $this->call(JenisKelaminSeeder::class);
        $this->call(JenisMakananSeeder::class);
        $this->call(TipeKriteriaSeeder::class);
    }
}
