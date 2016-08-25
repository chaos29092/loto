<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTheNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('the_news', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('profile');
            $table->text('body');
            $table->string('image');
            $table->enum('tag',['news','cases']);
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
        Schema::drop('the_news');
    }
}
