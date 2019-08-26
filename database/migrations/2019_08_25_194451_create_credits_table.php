<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCreditsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('credits', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('amount', 10, 2);
            $table->date('credit_date');
            $table->timestamps();

            $table->unsignedInteger('debits_id');
            $table->unsignedInteger('students_id');

            $table->foreign('debits_id')->references('id')->on('debits');
            $table->foreign('students_id')->references('id')->on('students');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('credits');
    }
}
