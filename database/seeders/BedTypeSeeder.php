<?php

namespace Database\Seeders;

use App\Models\BedType;
use Illuminate\Database\Seeder;

class BedTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BedType::create([
            'name' => 'Single Bed',
        ]);
        BedType::create([
            'name' => 'Double Bed',
        ]);
        BedType::create([
            'name' => 'Multiple Bed',
        ]);
    }
}
