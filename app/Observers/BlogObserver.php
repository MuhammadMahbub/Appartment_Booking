<?php

namespace App\Observers;

use App\Models\Blog;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class BlogObserver
{
    public function creating(Blog $blog)
    {
        $blog->slug = Str::slug($blog->title) . "-" . Str::random(9);;
        $blog->created_by = Auth::id();
    }

    public function updating(Blog $blog)
    {
        $blog->slug = Str::slug($blog->name) . "-" . Str::random(9);;
        $blog->updated_by = Auth::id();
    }
}
