<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('level');
            $table->string('contacto')->nullable();
            $table->boolean('scholarship');
            $table->enum('scholarship_type', ['12.5%', '15%', '25%', '100%'])->nullable();
            $table->mediumText('obs')->nullable();
            $table->timestamps();

            $table->unsignedInteger('courses_id');

            $table->foreign('courses_id')->references('id')->on('courses');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
