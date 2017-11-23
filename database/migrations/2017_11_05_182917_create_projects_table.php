<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->integer('zamestnanec_id')->unsigned();          
            $table->increments('id');
            $table->text('title')->nullable();  
            $table->text('year_from')->nullable();  
            $table->text('year_end')->nullable();  
            $table->text('reg_number')->nullable();  
            $table->timestamps();
        });

        Schema::table('projects', function (Blueprint $table) {
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
        Schema::dropIfExists('projects');
    }
}
