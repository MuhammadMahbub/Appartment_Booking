<?php

namespace Database\Seeders;

use App\Models\AboutFeature;
use Illuminate\Database\Seeder;

class AboutFeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AboutFeature::create([
            'link_1' => '#!',
            'name_1' => 'breakfast',
            'feature_icon_1' => 'flaticon-coffee',
            'link_2' => '#!',
            'name_2' => 'Airport Pickup',
            'feature_icon_2' => 'flaticon-air-freight',
            'link_3' => '#!',
            'name_3' => 'city guide',
            'feature_icon_3' => 'flaticon-marker',
            'link_4' => '#!',
            'name_4' => 'bbq party',
            'feature_icon_4' => 'flaticon-barbecue',
            'link_5' => '#!',
            'name_5' => 'luxury room',
            'feature_icon_5' => 'flaticon-hotel',
        ]);

    }
}
