<?php

namespace App\Observers;

use App\Models\BlogCategory;
use Illuminate\Support\Facades\Auth;

class BlogCategoryObserver
{
    public function creating(BlogCategory $category)
    {
        $category->created_by = Auth::id();
    }

    public function updating(BlogCategory $category)
    {
        $category->updated_by = Auth::id();
    }
}
