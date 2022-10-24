<?php

namespace Database\Seeders;

use App\Models\RoomType;
use Illuminate\Database\Seeder;

class RoomTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RoomType::create([
            'name' => 'Luxury',
        ]);
        RoomType::create([
            'name' => 'Family',
        ]);
        RoomType::create([
            'name' => 'Duplex',
        ]);
        RoomType::create([
            'name' => 'Relax',
        ]);
    }
}
