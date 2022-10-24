<?php

namespace Database\Seeders;

use App\Models\BlogCategory;
use Illuminate\Database\Seeder;

class BlogCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $blogCategories = ['Business','Consultant', 'Creative','UI/UX', 'Technology'];

        foreach ($blogCategories as $category) {
            BlogCategory::create([
                'name' => $category,
            ]);
        }
    }
}
