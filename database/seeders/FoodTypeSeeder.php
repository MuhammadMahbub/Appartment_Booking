<?php

namespace Database\Seeders;

use App\Models\FoodType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;

class FoodTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FoodType::create([
            'name'   => 'Chicken',
            'slug'   => 'chicken-chicken',
            'icon'   => '<i class="fa-solid fa-drumstick-bite"></i>',
        ]);
        FoodType::create([
            'name'   => 'Italian',
            'slug'   => 'italian-italian',
            'icon'   => '<i class="fa-solid fa-pizza-slice"></i>',
        ]);
        FoodType::create([
            'name'   => 'Coffee',
            'slug'   => 'coffee-coffee',
            'icon'   => '<i class="fa-solid fa-mug-hot"></i>',
        ]);
        FoodType::create([
            'name'   => 'BakeCake',
            'slug'   => 'bake-cake',
            'icon'   => '<i class="fa-solid fa-cake-candles"></i>',
        ]);
        FoodType::create([
            'name'   => 'Cokkies',
            'slug'   => 'cokkies-cokkies',
            'icon'   => '<i class="fa-solid fa-cookie-bite"></i>',
        ]);
        FoodType::create([
            'name'   => 'Cocktail',
            'slug'   => 'cocktail-cocktail',
            'icon'   => '<i class="fa-solid fa-martini-glass-citrus"></i>',
        ]);
    }
}
