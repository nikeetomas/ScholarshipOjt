<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnrollmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enrollments', function (Blueprint $table) {
            $table->increments('id')->unique('enrollment_id');
            $table->unsignedInteger('student_rec_id');
            $table->string('section', 1)->nullable();
            $table->unsignedInteger('pref_id')->nullable()->default('13')->index('pref');
            $table->unsignedTinyInteger('standing')->nullable();
            $table->unsignedTinyInteger('status_id')->nullable();
            $table->unsignedInteger('scholarship_id')->nullable()->default('0');
            $table->integer('free_tuition')->default(0);
            $table->unsignedInteger('fee_sched_id')->nullable();
            $table->integer('voluntary_contribution')->nullable();
            $table->string('updated_at', 30)->nullable();
            $table->string('created_at', 30)->nullable();
            $table->string('deleted_at', 30)->nullable();

            $table->index(['pref_id', 'student_rec_id'], 'student_rec');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enrollments');
    }
}
