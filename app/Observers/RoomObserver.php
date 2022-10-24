<?php

namespace App\Observers;

use App\Models\Room;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class RoomObserver
{
    public function creating(Room $room)
    {
        $slug = Str::slug($room->name) . "-" . Str::random(9);
        $room->slug = $slug;
        $room->created_by = Auth::id();
    }

    public function updating(Room $room)
    {
        $slug = Str::slug($room->name) . "-" . Str::random(9);
        $room->slug = $slug;
        $room->updated_by = Auth::id();
    }
}
