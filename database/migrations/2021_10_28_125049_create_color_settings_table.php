<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateColorSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('color_settings', function (Blueprint $table) {
            $table->id();
            $table->string('bg_color');
            $table->string('secondary_bg_color');
            $table->string('button_color');
            $table->string('hover_color');
            $table->string('title_color');
            $table->string('text_color');
            $table->string('theme_color');
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
        Schema::dropIfExists('color_settings');
    }
}
