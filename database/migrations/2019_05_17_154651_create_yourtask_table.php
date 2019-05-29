<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateYourtaskTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('yourtask', function (Blueprint $table) {
            $table->increments('id');
            $table->text('Task');
            $table->text('Name');
            $table->text('SecondName');
            $table->text('Post');
            $table->integer('Price');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('yourtask');
    }
}
