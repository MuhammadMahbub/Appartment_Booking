<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeneralSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('general_settings', function (Blueprint $table) {
            $table->id();
            $table->string('logo')->nullable();
            $table->string('front_logo')->nullable();
            $table->string('favicon')->nullable();
            $table->longText('email_title')->nullable();
            $table->string('email_icon')->nullable();
            $table->string('email')->nullable();
            $table->string('email_2')->nullable();
            $table->longText('phone_title')->nullable();
            $table->string('phone_icon')->nullable();
            $table->string('phone')->nullable();
            $table->string('phone_2')->nullable();
            $table->longText('address_title')->nullable();
            $table->string('address_icon')->nullable();
            $table->string('address')->nullable();
            $table->string('address_2')->nullable();
            $table->longText('footer_description')->nullable();
            $table->longText('copyright')->nullable();
            $table->string('meta_title')->nullable();
            $table->string('meta_tags')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->string('meta_description')->nullable();
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
        Schema::dropIfExists('general_settings');
    }
}
