<?php

namespace Database\Seeders;

use App\Models\GeneralSetting;
use Illuminate\Database\Seeder;

class GeneralSettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GeneralSetting::create([
            'logo'                    => 'logo_seed.png',
            'front_logo'              => 'front_logo_seed.png',
            'favicon'                 => 'favicon_seed.png',
            'email_title'             => 'Email Address',
            'email_icon'              => '<i class="flaticon-message"></i>',
            'email'                   => 'admin@admin.com',
            'email_2'                 => 'jobs.webmail@mail.com',
            'phone_title'             => 'Phone Number',
            'phone_icon'              => '<i class="flaticon-phone"></i>',
            'phone'                   => '+ 97656 8675  7',
            'phone_2'                 => '+ 876 766 8675 6',
            'address_title'           => 'Office Address',
            'address_icon'            => '<i class="flaticon-home"></i>',
            'address'                 => '19/A, Cirikon City hall Tower New York, NYC',
            'address_2'               => 'Al-Ahsa, Saudi Arabia',
            'copyright'               => 'COPYRIGHT BY ANDROTHEMES',
            'footer_description'      => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed doing eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi.',
            'meta_title'         => 'Meta Title',
            'meta_description'   => 'Meta Description',
            'meta_keywords'      => 'Meta Keywords',
        ]);
    }
}
