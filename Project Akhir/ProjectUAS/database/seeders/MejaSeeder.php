<?php

namespace Database\Seeders;

use App\Models\Meja;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MejaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Meja::factory(5)->create();
        Meja::create([
            'no_meja' => 1,
            'status_meja' => 'Kosong',
        ]);
        Meja::create([
            'no_meja' => 2,
            'status_meja' => 'Kosong',
        ]);
        Meja::create([
            'no_meja' => 3,
            'status_meja' => 'Kosong',
        ]);
        Meja::create([
            'no_meja' => 4,
            'status_meja' => 'Kosong',
        ]);
        Meja::create([
            'no_meja' => 5,
            'status_meja' => 'Kosong',
        ]);
    }
}
