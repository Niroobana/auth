<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventExpensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_expenses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('program_id');
            $table->foreignId('user_id');
            $table->string('program_name');
            $table->string('stationary');
            $table->string('accommodation');
            $table->string('refreshment');
            $table->bigInteger('total_amount');

            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('program_id')->references('id')->on('training_programs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('event_expenses');
    }
}
