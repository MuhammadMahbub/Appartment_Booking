<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutFeaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_features', function (Blueprint $table) {
            $table->id();
            $table->longText('link_1')->nullable();
            $table->longText('name_1');
            $table->string('feature_icon_1');
            $table->longText('link_2')->nullable();
            $table->longText('name_2');
            $table->string('feature_icon_2');
            $table->longText('link_3')->nullable();
            $table->longText('name_3');
            $table->string('feature_icon_3');
            $table->longText('link_4')->nullable();
            $table->longText('name_4');
            $table->string('feature_icon_4');
            $table->longText('link_5')->nullable();
            $table->longText('name_5');
            $table->string('feature_icon_5');
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
        Schema::dropIfExists('about_features');
    }
}
