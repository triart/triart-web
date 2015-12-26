<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('team', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 255);
            $table->string('position', 255);
            $table->text('description')->nullable();
            $table->string('image', 255)->nullable();
            $table->string('first_strength')->nullable();
            $table->integer('first_strength_bar')->nullable();
            $table->string('second_strength')->nullable();
            $table->integer('second_strength_bar')->nullable();
            $table->string('third_strength')->nullable();
            $table->integer('third_strength_bar')->nullable();
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
        Schema::drop('team');
    }
}
