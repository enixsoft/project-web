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
            $table->text('title');
            $table->text('year_from');
            $table->text('year_end');
            $table->text('reg_number');
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
