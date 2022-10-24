<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTitleAndBannerSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('title_and_banner_settings', function (Blueprint $table) {
            $table->id();
            $table->longText('testimonial_section_subtitle')->nullable();
            $table->longText('testimonial_section_title')->nullable();

            $table->longText('blog_section_subtitle')->nullable();
            $table->longText('blog_section_title')->nullable();

            $table->longText('room_section_subtitle')->nullable();
            $table->longText('room_section_title')->nullable();
            $table->string('room_section_bg_image')->nullable();

            $table->longText('about_page_subtitle')->nullable();
            $table->longText('about_page_title')->nullable();
            $table->string('about_page_banner')->nullable();

            $table->longText('contact_page_subtitle')->nullable();
            $table->longText('contact_page_title')->nullable();
            $table->string('contact_page_banner')->nullable();

            $table->longText('food_page_subtitle')->nullable();
            $table->longText('food_page_title')->nullable();
            $table->string('food_page_banner')->nullable();

            $table->longText('restaurant_page_subtitle')->nullable();
            $table->longText('restaurant_page_title')->nullable();
            $table->string('restaurant_page_banner')->nullable();

            $table->longText('places_page_subtitle')->nullable();
            $table->longText('places_page_title')->nullable();
            $table->string('places_page_banner')->nullable();

            $table->longText('offers_page_subtitle')->nullable();
            $table->longText('offers_page_title')->nullable();
            $table->string('offers_page_banner')->nullable();

            $table->longText('room_page_subtitle')->nullable();
            $table->longText('room_page_title')->nullable();
            $table->string('room_page_banner')->nullable();

            $table->longText('gallery_page_subtitle')->nullable();
            $table->longText('gallery_page_title')->nullable();
            $table->string('gallery_page_banner')->nullable();

            $table->longText('news_page_subtitle')->nullable();
            $table->longText('news_page_title')->nullable();
            $table->string('news_page_banner')->nullable();

            $table->longText('search_page_subtitle')->nullable();
            $table->longText('search_page_title')->nullable();
            $table->string('search_page_banner')->nullable();

            $table->longText('booking_page_subtitle')->nullable();
            $table->longText('booking_page_title')->nullable();
            $table->string('booking_page_banner')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('title_and_banner_settings');
    }
}
