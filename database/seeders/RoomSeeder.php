<?php

namespace Database\Seeders;

use App\Models\Room;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Room::create([
            'name'              => 'Minimal Duplex Room',
            'slug'              => 'minimal-duplex-room-1',
            'room_type'         => '4',
            'bed_type'          => '1',
            'room_photo'        => '01.jpg',
            'short_description' => 'Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.',
            'long_description'  => 'Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.',
            'room_cost'         => '399',
            'cancellation'      => 'Phasellus volutpat neque a tellus venenatis, a euismod augue facilisis. Fusce ut metus mattis, consequat metus nec, luctus lectus. Pellentesque orci quis hendrerit sed eu dolor. Cancel up to 14 days to get a full refund.',
            'created_at'        => Carbon::now(),
        ]);
        Room::create([
            'name'              => 'Minimal Duplex Room',
            'slug'              => 'minimal-duplex-room-2',
            'room_type'         => '3',
            'bed_type'          => '3',
            'room_photo'        => '02.jpg',
            'short_description' => 'Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.',
            'long_description'  => 'Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.',
            'room_cost'         => '399',
            'cancellation'      => 'Phasellus volutpat neque a tellus venenatis, a euismod augue facilisis. Fusce ut metus mattis, consequat metus nec, luctus lectus. Pellentesque orci quis hendrerit sed eu dolor. Cancel up to 14 days to get a full refund.',
            'created_at'        => Carbon::now(),
        ]);
        Room::create([
            'name'              => 'Minimal Duplex Room',
            'slug'              => 'minimal-duplex-room-3',
            'room_type'         => '4',
            'bed_type'          => '3',
            'room_photo'        => '03.jpg',
            'short_description' => 'Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.',
            'long_description'  => 'Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.',
            'room_cost'         => '399',
            'cancellation'      => 'Phasellus volutpat neque a tellus venenatis, a euismod augue facilisis. Fusce ut metus mattis, consequat metus nec, luctus lectus. Pellentesque orci quis hendrerit sed eu dolor. Cancel up to 14 days to get a full refund.',
            'created_at'        => Carbon::now(),
        ]);
        Room::create([
            'name'              => 'Minimal Duplex Room',
            'slug'              => 'minimal-duplex-room-4',
            'room_type'         => '1',
            'bed_type'          => '1',
            'room_photo'        => '04.jpg',
            'short_description' => 'Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.',
            'long_description'  => 'Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.',
            'room_cost'         => '399',
            'cancellation'      => 'Phasellus volutpat neque a tellus venenatis, a euismod augue facilisis. Fusce ut metus mattis, consequat metus nec, luctus lectus. Pellentesque orci quis hendrerit sed eu dolor. Cancel up to 14 days to get a full refund.',
            'created_at'        => Carbon::now(),
        ]);
        Room::create([
            'name'              => 'Minimal Duplex Room',
            'slug'              => 'minimal-duplex-room-5',
            'room_type'         => '2',
            'bed_type'          => '3',
            'room_photo'        => '05.jpg',
            'short_description' => 'Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.',
            'long_description'  => 'Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.',
            'room_cost'         => '399',
            'cancellation'      => 'Phasellus volutpat neque a tellus venenatis, a euismod augue facilisis. Fusce ut metus mattis, consequat metus nec, luctus lectus. Pellentesque orci quis hendrerit sed eu dolor. Cancel up to 14 days to get a full refund.',
            'created_at'        => Carbon::now(),
        ]);
        Room::create([
            'name'              => 'Minimal Duplex Room',
            'slug'              => 'minimal-duplex-room-6',
            'room_type'         => '4',
            'bed_type'          => '3',
            'room_photo'        => '06.jpg',
            'short_description' => 'Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.',
            'long_description'  => 'Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.',
            'room_cost'         => '399',
            'cancellation'      => 'Phasellus volutpat neque a tellus venenatis, a euismod augue facilisis. Fusce ut metus mattis, consequat metus nec, luctus lectus. Pellentesque orci quis hendrerit sed eu dolor. Cancel up to 14 days to get a full refund.',
            'created_at'        => Carbon::now(),
        ]);
        Room::create([
            'name'              => 'Minimal Duplex Room',
            'slug'              => 'minimal-duplex-room-7',
            'room_type'         => '1',
            'bed_type'          => '2',
            'room_photo'        => '07.jpg',
            'short_description' => 'Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.',
            'long_description'  => 'Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.',
            'room_cost'         => '399',
            'cancellation'      => 'Phasellus volutpat neque a tellus venenatis, a euismod augue facilisis. Fusce ut metus mattis, consequat metus nec, luctus lectus. Pellentesque orci quis hendrerit sed eu dolor. Cancel up to 14 days to get a full refund.',
            'created_at'        => Carbon::now(),
        ]);
        Room::create([
            'name'              => 'Minimal Duplex Room',
            'slug'              => 'minimal-duplex-room-8',
            'room_type'         => '1',
            'bed_type'          => '3',
            'room_photo'        => '08.jpg',
            'short_description' => 'Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.',
            'long_description'  => 'Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.',
            'room_cost'         => '399',
            'cancellation'      => 'Phasellus volutpat neque a tellus venenatis, a euismod augue facilisis. Fusce ut metus mattis, consequat metus nec, luctus lectus. Pellentesque orci quis hendrerit sed eu dolor. Cancel up to 14 days to get a full refund.',
            'created_at'        => Carbon::now(),
        ]);
        Room::create([
            'name'              => 'Minimal Duplex Room',
            'slug'              => 'minimal-duplex-room-9',
            'room_type'         => '3',
            'bed_type'          => '1',
            'room_photo'        => '09.jpg',
            'short_description' => 'Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.',
            'long_description'  => 'Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.',
            'room_cost'         => '399',
            'cancellation'      => 'Phasellus volutpat neque a tellus venenatis, a euismod augue facilisis. Fusce ut metus mattis, consequat metus nec, luctus lectus. Pellentesque orci quis hendrerit sed eu dolor. Cancel up to 14 days to get a full refund.',
            'created_at'        => Carbon::now(),
        ]);
        Room::create([
            'name'              => 'Minimal Duplex Room',
            'slug'              => 'minimal-duplex-room-10',
            'room_type'         => '2',
            'bed_type'          => '2',
            'room_photo'        => '10.jpg',
            'short_description' => 'Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.',
            'long_description'  => 'Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.',
            'room_cost'         => '399',
            'cancellation'      => 'Phasellus volutpat neque a tellus venenatis, a euismod augue facilisis. Fusce ut metus mattis, consequat metus nec, luctus lectus. Pellentesque orci quis hendrerit sed eu dolor. Cancel up to 14 days to get a full refund.',
            'created_at'        => Carbon::now(),
        ]);
        Room::create([
            'name'              => 'Minimal Duplex Room',
            'slug'              => 'minimal-duplex-room-11',
            'room_type'         => '2',
            'bed_type'          => '2',
            'room_photo'        => '11.jpg',
            'short_description' => 'Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.',
            'long_description'  => 'Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.',
            'room_cost'         => '399',
            'cancellation'      => 'Phasellus volutpat neque a tellus venenatis, a euismod augue facilisis. Fusce ut metus mattis, consequat metus nec, luctus lectus. Pellentesque orci quis hendrerit sed eu dolor. Cancel up to 14 days to get a full refund.',
            'created_at'        => Carbon::now(),
        ]);
        Room::create([
            'name'              => 'Minimal Duplex Room',
            'slug'              => 'minimal-duplex-room-12',
            'room_type'         => '1',
            'bed_type'          => '1',
            'room_photo'        => '12.jpg',
            'short_description' => 'Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.',
            'long_description'  => 'Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.',
            'room_cost'         => '399',
            'cancellation'      => 'Phasellus volutpat neque a tellus venenatis, a euismod augue facilisis. Fusce ut metus mattis, consequat metus nec, luctus lectus. Pellentesque orci quis hendrerit sed eu dolor. Cancel up to 14 days to get a full refund.',
            'created_at'        => Carbon::now(),
        ]);
    }
}
