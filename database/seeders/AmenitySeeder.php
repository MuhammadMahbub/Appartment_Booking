<?php

namespace Database\Seeders;

use App\Models\Amenity;
use Illuminate\Database\Seeder;

class AmenitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Amenity::create([
            'name' => 'Air conditioner',
            'icon' => '<i class="fa fa-air-conditioner"></i>'
        ]);
        Amenity::create([
            'name' => 'Breakfast',
            'icon' => '<i class="fa fa-burrito"></i>'
        ]);
        Amenity::create([
            'name' => 'Cleaning',
            'icon' => '<i class="fa fa-bath"></i>'
        ]);
        Amenity::create([
            'name' => 'Grocery',
            'icon' => '<i class="fa fa-shop"></i>'
        ]);
        Amenity::create([
            'name' => 'shop near',
            'icon' => '<i class="fa fa-cart-shopping"></i>'
        ]);
        Amenity::create([
            'name' => 'High speed WiFi',
            'icon' => '<i class="fa fa-wifi"></i>'
        ]);
        Amenity::create([
            'name' => 'Kitchen',
            'icon' => '<i class="fa fa-air-conditioner"></i>'
        ]);
        Amenity::create([
            'name' => 'Shower',
            'icon' => '<i class="fa fa-shower"></i>'
        ]);
        Amenity::create([
            'name' => 'Single bed',
            'icon' => '<i class="fa fa-bed"></i>'
        ]);
        Amenity::create([
            'name' => 'Towels',
            'icon' => '<i class="fa fa-phone-arrow-down-left"></i>'
        ]);
        Amenity::create([
            'name' => 'Strong Locker',
            'icon' => '<i class="fa fa-square-terminal"></i>'
        ]);
        Amenity::create([
            'name' => 'Smart Security',
            'icon' => '<i class="fa fa-temperature-sun"></i>'
        ]);
        Amenity::create([
            'name' => '24/7 Online Support',
            'icon' => '<i class="fa fa-air-conditioner"></i>'
        ]);
        Amenity::create([
            'name' => 'Expert Team',
            'icon' => '<i class="fa fa-people-group"></i>'
        ]);
    }
}
