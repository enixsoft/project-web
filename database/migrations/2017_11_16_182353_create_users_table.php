<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('zamestnanec_id')->unsigned()->nullable();
            $table->string('username');
            $table->string('password');
            $table->string('email');
            $table->string('role');
            $table->string('remember_token')->nullable();
            $table->binary('profile_picture');
            $table->string('profile_picture_type');        
            $table->timestamps();
        });

        Schema::table('users', function (Blueprint $table) {
             $table->foreign('zamestnanec_id')->references('id')->on('zamestnanci');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
