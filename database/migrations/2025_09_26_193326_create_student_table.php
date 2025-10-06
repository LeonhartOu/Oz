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
        Schema::create('student_table', function (Blueprint $table) {
            $table->id();
            $table->string('nim');
            $table->string('nik');
            $table->string('name');
            $table->date('dob');
            $table->string('gender');
            $table->string('address');
            $table->string('phone_number');
            $table->string('email');
            $table->string('status');
            $table->string('deleted');
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
        Schema::dropIfExists('student_table');
    }
};
