<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutCountersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_counters', function (Blueprint $table) {
            $table->id();
            $table->string('user_icon')->nullable();
            $table->longText('user_name')->nullable();
            $table->integer('user_count')->nullable();
            $table->string('review_icon')->nullable();
            $table->longText('review_name')->nullable();
            $table->integer('review_count')->nullable();
            $table->string('country_icon')->nullable();
            $table->longText('country_name')->nullable();
            $table->integer('country_count')->nullable();
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
        Schema::dropIfExists('about_counters');
    }
}
