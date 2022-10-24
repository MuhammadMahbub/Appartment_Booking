<?php

namespace Database\Seeders;

use App\Models\Food;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;

class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Food::create([
            'name'         => 'Eggs & Bacon',
            'slug'         => 'eggs-&-bacon',
            'type'         => '1',
            'image'        => '01.jpg',
            'description'  => 'Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.',
            'price'        => '100',
        ]);
        Food::create([
            'name'         => 'Tea or Coffee',
            'slug'         => 'tea-or-coffee',
            'type'         => '2',
            'image'        => '02.jpg',
            'description'  => 'Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.',
            'price'        => '99',
        ]);
        Food::create([
            'name'         => 'Chia Oatmeal',
            'slug'         => 'chia-oatmeal',
            'type'         => '3',
            'image'        => '03.jpg',
            'description'  => 'Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.',
            'price'        => '99',
        ]);
        Food::create([
            'name'         => 'Juice',
            'slug'         => 'juice',
            'type'         => '4',
            'image'        => '04.jpg',
            'description'  => 'Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.',
            'price'        => '99',
        ]);
        Food::create([
            'name'         => 'Chia Oatmeal',
            'slug'         => 'chia-oatweal',
            'type'         => '5',
            'image'        => '05.jpg',
            'description'  => 'Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.',
            'price'        => '99',
        ]);
        Food::create([
            'name'         => 'Avocado Toast',
            'slug'         => 'avocado-toast',
            'type'         => '2',
            'image'        => '06.jpg',
            'description'  => 'Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.',
            'price'        => '99',
        ]);
        Food::create([
            'name'         => 'Cheese Platen',
            'slug'         => 'cheese-platen',
            'type'         => '1',
            'image'        => '07.jpg',
            'description'  => 'Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod   tempor.',
            'price'        => '99',
        ]);
        Food::create([
            'name'         => 'Fruit Parfait',
            'slug'         => 'fruit-parfait',
            'type'         => '2',
            'image'        => '08.jpg',
            'description'  => 'Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod   tempor.',
            'price'        => '99',
        ]);
        Food::create([
            'name'         => 'Marmalade Selection',
            'slug'         => 'marmalade-selection',
            'type'         => '3',
            'image'        => '09.jpg',
            'description'  => 'Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod   tempor.',
            'price'        => '99',
        ]);
        Food::create([
            'name'         => 'Avocado Toast',
            'slug'         => 'avocado-toast-1',
            'type'         => '1',
            'image'        => '10.jpg',
            'description'  => 'Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod   tempor.',
            'price'        => '99',
        ]);
    }
}
