<?php

namespace Database\Seeders;

use App\Models\ColorSetting;
use Illuminate\Database\Seeder;

class ColorSettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ColorSetting::create([
            'bg_color'              => '#f8f8f8',
            'secondary_bg_color'    => '#fff',
            'button_color'          => '#bead8e',
            'hover_color'           => '#222',
            'title_color'           => '#222',
            'text_color'            => '#777',
            'theme_color'           => '#bead8e',
        ]);
    }
}
