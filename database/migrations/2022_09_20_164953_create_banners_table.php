<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBannersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banners', function (Blueprint $table) {
            $table->id();
            $table->longText('subtitle');
            $table->longText('title');
            $table->longText('button_text_1')->nullable();
            $table->string('button_url_1')->nullable();
            $table->longText('button_text_2')->nullable();
            $table->string('button_url_2')->nullable();
            $table->string('banner_image_1');
            $table->string('banner_image_2');
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
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
        Schema::dropIfExists('banners');
    }
}
