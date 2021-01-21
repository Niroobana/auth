<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainingProgramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('training_programs', function (Blueprint $table) {
              $table->bigIncrements('id');
              $table->foreignId('user_id');
              $table->string('program_name');
              $table->string('date');
              $table->string('location');
              $table->enum('program_type',['diploma','certificate','other']);
              $table->string('duration');
              $table->string('content');
              $table->string('target_group');
              $table->integer('no_of_trainees');
              $table->integer('no_of_resources');
              $table->integer('no_of_staffs');
              $table->timestamps();

              $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('training_programs');
    }
}
