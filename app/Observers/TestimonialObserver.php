<?php

namespace App\Observers;

use App\Models\Testimonial;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class TestimonialObserver
{
    public function creating(Testimonial $testimonial)
    {
        $slug = Str::slug($testimonial->name) . "-" . Str::random(9);
        $testimonial->slug = $slug;
        $testimonial->created_by = Auth::id();
    }

    public function updating(Testimonial $testimonial)
    {
        $slug = Str::slug($testimonial->name) . "-" . Str::random(9);
        $testimonial->slug = $slug;
        $testimonial->updated_by = Auth::id();
    }
}
