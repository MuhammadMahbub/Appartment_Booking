<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Testimonial::create([
            'name' => 'Rosalina D. William',
            'designation' => 'Founder, qux co.',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
            incididunt ut labore et dolore.',
            'image' => '01.png',
        ]);
        Testimonial::create([
            'name' => 'Donald H. Hilixer',
            'designation' => 'Founder, hilix',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
            incididunt ut labore et dolore.',
            'image' => '02.png',
        ]);
        Testimonial::create([
            'name' => 'Browfish Dumble',
            'designation' => 'Founder, Condo',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
            incididunt ut labore et dolore.',
            'image' => '03.png',
        ]);
        Testimonial::create([
            'name' => 'Donald H. Hilixer',
            'designation' => 'Founder, hilix',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
            incididunt ut labore et dolore.',
            'image' => '02.png',
        ]);
        Testimonial::create([
            'name' => 'Rosalina D. William',
            'designation' => 'Founder, qux co.',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
            incididunt ut labore et dolore.',
            'image' => '03.png',
        ]);
    }
}
