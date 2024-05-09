<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Station;

class StationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Station::create([
            'name' => 'HYDRATION MEMORY GAME',
        ]);

        Station::create([
            'name' => 'SKIN CONSULTATION',
        ]);

        Station::create([
            'name' => 'PRODUCT EXPERIENCE ZONE',
        ]);

        Station::create([
            'name' => 'PERFECT REGIME',
        ]);
        
        Station::create([
            'name' => 'PHOTO OP',
        ]);

        Station::create([
            'name' => 'GIFT REDEMPTION',
        ]); 
    }
}
