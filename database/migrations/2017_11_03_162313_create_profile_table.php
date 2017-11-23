<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile', function (Blueprint $table) {
            $table->integer('zamestnanec_id');
            $table->text('description'); 
            $table->text('consultation_hours'); 
            $table->text('education');             
            $table->timestamps();
        });

        Schema::table('profile', function (Blueprint $table) {
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
        Schema::dropIfExists('profile');
    }
}
