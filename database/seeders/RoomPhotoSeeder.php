<?php

namespace Database\Seeders;

use App\Models\RoomPhoto;
use Illuminate\Database\Seeder;

class RoomPhotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RoomPhoto::create([
            'room_id'    => '1',
            'room_thumb' => '1-sm.jpg',
        ]);
        RoomPhoto::create([
            'room_id'    => '1',
            'room_thumb' => '2-sm.jpg',
        ]);
        RoomPhoto::create([
            'room_id'    => '1',
            'room_thumb' => '3-sm.jpg',
        ]);
        RoomPhoto::create([
            'room_id'    => '1',
            'room_thumb' => '4-sm.jpg',
        ]);

        RoomPhoto::create([
            'room_id'    => '2',
            'room_thumb' => '7-sm.jpg',
        ]);
        RoomPhoto::create([
            'room_id'    => '2',
            'room_thumb' => '2-sm.jpg',
        ]);
        RoomPhoto::create([
            'room_id'    => '2',
            'room_thumb' => '3-sm.jpg',
        ]);
        RoomPhoto::create([
            'room_id'    => '2',
            'room_thumb' => '4-sm.jpg',
        ]);
    }
}
