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
            $table->text('ISBN');
            $table->text('title');
            $table->text('sub_title');
            $table->text('all_authors');
            $table->text('type');
            $table->text('publisher');
            $table->text('pages');
            $table->text('year');
            $table->text('code');
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
