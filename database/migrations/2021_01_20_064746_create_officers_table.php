<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfficersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('officers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('user_id');
            $table->enum('employee_role',['resources','coordinators','trainees','staffs'])->default('resources');
            $table->string('first_name');
            $table->string('last_name');
            $table->enum('gender',['male','female'])->default('male');
            $table->string('nic');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('designation');
            $table->string('address');
            $table->string('department');
            $table->string('mobile_no');
            $table->tinyInteger('grade');
            $table->string('experience');
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
        Schema::dropIfExists('officers');
    }
}
