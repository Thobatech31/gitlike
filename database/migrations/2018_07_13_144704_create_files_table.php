<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('files', function (Blueprint $table) {
            $table->increments('id');
             $table->string('name')->unique();
              $table->string('size');

//start here
      $table->integer('user_id')->unsigned();
          $table->integer('project_id')->unsigned();

         $table->foreign('user_id')->references('id')->on('users');
         $table->foreign('project_id')->references('id')->on('projects');
            //stop here
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
        Schema::dropIfExists('files');
    }
}
