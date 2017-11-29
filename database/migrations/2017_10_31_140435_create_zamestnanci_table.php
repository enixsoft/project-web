<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

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


        DB::statement('ALTER TABLE zamestnanci ADD FULLTEXT fulltext_index (name, department, faculty, description)');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
      {
         Schema::table('zamestnanci', function($table) {

            $table->dropIndex('fulltext_index');

        });

        Schema::dropIfExists('zamestnanci');

    }
}
