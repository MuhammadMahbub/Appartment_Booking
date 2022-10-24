<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        About::create([
            'start_year' => '1994',
            'front_page_heading' => 'Hello. Our hotel has been present for over 20 years. We make the best or all our customers.',
            'internal_page_heading' => 'Situated In Prime Position At The Foot Of The Slopes Of Courchevel Moriond.',
            'short_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia reiciendis illo ipsa asperiores, perspiciatis corrupti veritatis assumenda architecto commodi provident quas necessitatibus consequatur praesentium magnam optio deserunt fugiat repellat culpa.',
            'video_back_image' => 'video_back_image.jpg',
            'video_link' => 'https://www.youtube.com/watch?v=EEJFMdfraVY',
            'facility_subtitle' => 'FACILITIES',
            'facility_title' => 'Core Features',
            'counter_subtitle' => 'COUNTER',
            'counter_title' => 'Some Fun Facts',
            'blog_subtitle' => 'BLOG',
            'blog_title' => 'News Feeds',
        ]);
    }
}
