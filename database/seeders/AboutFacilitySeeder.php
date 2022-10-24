<?php

namespace Database\Seeders;

use App\Models\AboutFacility;
use Illuminate\Database\Seeder;

class AboutFacilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AboutFacility::create([
            'icon' => '<i class="flaticon-rating"></i>',
            'title' => 'Have High Rating',
            'link' => '#!',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna..',
            'count' => '01',
        ]);
        AboutFacility::create([
            'icon' => '<i class="flaticon-clock"></i>',
            'title' => 'Quiet Hours',
            'link' => '#!',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna..',
            'count' => '02',
        ]);
        AboutFacility::create([
            'icon' => '<i class="flaticon-location-pin"></i>',
            'title' => 'Best Locations',
            'link' => '#!',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna..',
            'count' => '03',
        ]);
        AboutFacility::create([
            'icon' => '<i class="flaticon-clock-1"></i>',
            'title' => 'Free Cancellation',
            'link' => '#!',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna..',
            'count' => '04',
        ]);
        AboutFacility::create([
            'icon' => '<i class="flaticon-credit-card"></i>',
            'title' => 'Payment Options',
            'link' => '#!',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna..',
            'count' => '05',
        ]);
        AboutFacility::create([
            'icon' => '<i class="flaticon-discount"></i>',
            'title' => 'Special Offers',
            'link' => '#!',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna..',
            'count' => '06',
        ]);
    }
}
