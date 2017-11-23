<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->integer('zamestnanec_id')->unsigned();          
            $table->increments('id_aktivita');
            $table->string('ID')->nullable();  
            $table->string('date')->nullable();  
            $table->text('title')->nullable();  
            $table->string('country')->nullable();  
            $table->string('type')->nullable();  
            $table->text('category')->nullable();  
            $table->text('all_authors')->nullable();  
            $table->timestamps();
        });
    


       Schema::table('activities', function (Blueprint $table) {
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
        Schema::dropIfExists('activities');
    }
}
