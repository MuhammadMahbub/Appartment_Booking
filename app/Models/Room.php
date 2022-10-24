<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function roomPhoto()
    {
        return $this->hasMany(RoomPhoto::class, 'room_id', 'id');
    }

    public function roomType()
    {
        return $this->belongsTo(RoomType::class, 'room_type', 'id');
    }

    public function bedType()
    {
        return $this->belongsTo(BedType::class, 'bed_type', 'id');
    }

    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by', 'id');
    }

    public function updatedBy()
    {
        return $this->belongsTo(User::class, 'updated_by', 'id');
    }
}
