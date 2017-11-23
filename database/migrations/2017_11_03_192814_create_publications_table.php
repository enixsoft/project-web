<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePublicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publications', function (Blueprint $table) {
            $table->integer('zamestnanec_id')->unsigned();
            $table->increments('id');
            $table->text('ISBN')->nullable();
            $table->text('title')->nullable();  
            $table->text('sub_title')->nullable();  
            $table->text('all_authors')->nullable();  
            $table->text('type')->nullable();  
            $table->text('publisher')->nullable();  
            $table->text('pages')->nullable();  
            $table->text('year')->nullable();  
            $table->text('code')->nullable();  
            $table->timestamps();
        });

        Schema::table('publications', function (Blueprint $table) {
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
        Schema::dropIfExists('publications');
    }
}
