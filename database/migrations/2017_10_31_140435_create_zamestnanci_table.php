<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateZamestnanciTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zamestnanci', function (Blueprint $table) {
            
            $table->increments('id');
            $table->string('name');
            $table->string('department');
            $table->string('dep_acronym');
            $table->string('faculty');
            $table->string('faculty_acronym');
            $table->string('description');
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
        Schema::dropIfExists('zamestnanci');
    }
}
