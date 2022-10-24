<?php

namespace App\Observers;

use App\Models\Food;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Request;

class FoodObserver
{
    /**
     * Handle the Food "created" event.
     *
     * @param  \App\Models\Food  $food
     * @return void
     */
    public function creating(Food $food)
    {
        $slug = Str::slug($food->name) . "-" . Str::random(9);
        $food->slug = $slug;
        $food->created_by = Auth::id();
    }

    /**
     * Handle the Food "updated" event.
     *
     * @param  \App\Models\Food  $food
     * @return void
     */
    public function updating(Food $food)
    {
        $slug = Str::slug($food->name) . "-" . Str::random(9);
        $food->slug = $slug;
        $food->updated_by = Auth::id();
    }

    /**
     * Handle the Food "deleted" event.
     *
     * @param  \App\Models\Food  $food
     * @return void
     */
    public function deleted(Food $food)
    {
        //
    }

    /**
     * Handle the Food "restored" event.
     *
     * @param  \App\Models\Food  $food
     * @return void
     */
    public function restored(Food $food)
    {
        //
    }

    /**
     * Handle the Food "force deleted" event.
     *
     * @param  \App\Models\Food  $food
     * @return void
     */
    public function forceDeleted(Food $food)
    {
        //
    }
}
