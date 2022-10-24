<?php

namespace Database\Seeders;

use App\Models\About;
use App\Models\AboutCounter;
use Illuminate\Database\Seeder;

class AboutCounterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AboutCounter::create([
            'user_icon'  => '<i class="flaticon-user-1"></i>',
            'user_name'  => 'Happy Users',
            'user_count' => '8000',
            'review_icon'  => '<i class="flaticon-like"></i>',
            'review_name'  => 'Reviews & Appriciate',
            'review_count' => '10',
            'country_icon'  => '<i class="flaticon-suitcase"></i>',
            'country_name'  => 'Country Coverage',
            'country_count' => '100',
        ]);
    }
}
