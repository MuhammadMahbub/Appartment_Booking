<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->integer('start_year');
            $table->longText('front_page_heading');
            $table->longText('internal_page_heading');
            $table->longText('short_description');
            $table->string('video_back_image');
            $table->string('video_link')->nullable();
            $table->longText('facility_subtitle')->nullable();
            $table->longText('facility_title')->nullable();
            $table->longText('counter_subtitle')->nullable();
            $table->longText('counter_title')->nullable();
            $table->longText('blog_subtitle')->nullable();
            $table->longText('blog_title')->nullable();
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
        Schema::dropIfExists('abouts');
    }
}
