<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            ColorSettingsSeeder::class,
            SocialUrlSeeder::class,
            GeneralSettingsSeeder::class,
            SubscriberSeeder::class,
            ContactSeeder::class,
            UserSeeder::class,
            FoodSeeder::class,
            FoodTypeSeeder::class,
            RoomSeeder::class,
            RoomTypeSeeder::class,
            BedTypeSeeder::class,
            RuleSeeder::class,
            RoomPhotoSeeder::class,
            AmenitySeeder::class,
            BannerSeeder::class,
            TitleAndBannerSettingSeeder::class,
            AboutSeeder::class,
            AboutFeatureSeeder::class,
            AboutFacilitySeeder::class,
            AboutCounterSeeder::class,
            TestimonialSeeder::class,
            BlogSeeder::class,
            BlogCategorySeeder::class,
        ]);
    }
}
