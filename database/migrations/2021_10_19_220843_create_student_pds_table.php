<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentPdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_pds', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('student_id')->nullable()->unique();
            $table->integer('cfat_id')->nullable();
            $table->integer('mcat_id')->nullable();
            $table->string('fname', 60);
            $table->string('lname', 60);
            $table->string('mname', 60)->nullable();
            $table->string('contact_number', 11);
            $table->string('status', 10);
            $table->date('dob');
            $table->string('pob');
            $table->string('citizenship');
            $table->tinyInteger('sex');
            $table->integer('gender')->nullable();
            $table->integer('strand_id')->nullable();
            $table->unsignedInteger('indigenous_group_id')->nullable();
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
        Schema::dropIfExists('student_pds');
    }
}
