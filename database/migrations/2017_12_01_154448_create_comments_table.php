<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('commented_on_id')->unsigned();
            $table->integer('user_who_commented_id')->unsigned();        
            $table->text('comment');
            $table->timestamps();
        });

          Schema::table('comments', function (Blueprint $table) {
             $table->foreign('commented_on_id')->references('id')->on('zamestnanci');
        });
           Schema::table('comments', function (Blueprint $table) {
             $table->foreign('user_who_commented_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
