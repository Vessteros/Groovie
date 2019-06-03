<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ReviewList extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_reviews', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id', false, true);
            $table->integer('review_id', false, true);
            $table->timestamps();
        });

        Schema::create('reviews', function (Blueprint $table) {
            $table->increments('id');
            $table->string('review_title', 256);
            $table->text('review_text');
            $table->boolean('is_bugreport');
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
        Schema::dropIfExists('user_reviews');
        Schema::dropIfExists('reviews');
    }
}
