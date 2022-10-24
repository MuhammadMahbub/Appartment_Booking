<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function allBlogs()
    {
        return $this->hasMany(Blog::class, 'category_id', 'id');
    }
}
