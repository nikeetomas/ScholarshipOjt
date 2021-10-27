<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_records', function (Blueprint $table) {
            $table->increments('id')->index('id');
            $table->unsignedInteger('student_id')->index('student_id');
            $table->unsignedInteger('college_id')->nullable();
            $table->unsignedInteger('degree_id');
            $table->unsignedInteger('curricula_id');
            $table->unsignedInteger('ay_id')->nullable();
            $table->string('remarks', 100)->nullable();
            $table->timestamps();

            $table->index(['college_id', 'degree_id'], 'college_degree');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_records');
    }
}
