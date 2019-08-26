<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDebitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('debits', function (Blueprint $table) {
            $table->increments('id');
            $table->date('debit_date');
            $table->string('refering_mounth');
            $table->mediumText('obs')->nullable();
            $table->timestamps();

            $table->unsignedInteger('student_id');
            $table->unsignedInteger('debit_type_id');

            $table->foreign('student_id')->references('id')->on('students');
            $table->foreign('debit_type_id')->references('id')->on('debit_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('debits');
    }
}
