<?php

namespace App\Observers;

use App\Models\FoodType;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class FoodTypeOvserver
{
    public function creating(FoodType $foodType)
    {
        $slug = Str::slug($foodType->name) . "-" . Str::random(9);
        $foodType->slug = $slug;
        $foodType->created_by = Auth::id();
    }

    public function updating(FoodType $foodType)
    {
        $slug = Str::slug($foodType->name) . "-" . Str::random(9);
        $foodType->slug = $slug;
        $foodType->updated_by = Auth::id();
    }
}
