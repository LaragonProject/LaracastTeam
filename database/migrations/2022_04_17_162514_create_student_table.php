<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->integer('enrollmentnumber');
            $table->string('semester');
            $table->integer('rollnumber');
            $table->string('division');
            $table->string('department');

            $table->foreign('user_id')->references('id')->on('users');
            // $table->string('studentname');
            // $table->string('email');
            // $table->string('password');
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
        Schema::dropIfExists('student');
    }
};
