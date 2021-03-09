<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->string('user_id');
            $table->string('ropes')->default('Infinty Ropes');
            $table->string('workouts')->default('New Workout');
            $table->boolean('warm_ups')->default(false);
            $table->boolean('videos')->default(false);
            $table->boolean('reviews')->default(false);
            $table->boolean('sound')->default(false);
            $table->string('voice_gender');
            $table->integer('voice_level');
            $table->integer('beep');

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
        Schema::dropIfExists('settings');
    }
}
