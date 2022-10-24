<?php

namespace App\Observers;

use Illuminate\Support\Str;
use App\Models\AboutFacility;
use Illuminate\Support\Facades\Auth;

class AboutFacilityObserver
{
    public function creating(AboutFacility $facility)
    {
        $slug = Str::slug($facility->title) . "-" . Str::random(9);
        $facility->slug = $slug;
        $facility->created_by = Auth::id();
    }

    public function updating(AboutFacility $facility)
    {
        $slug = Str::slug($facility->title) . "-" . Str::random(9);
        $facility->slug = $slug;
        $facility->updated_by = Auth::id();
    }
}
