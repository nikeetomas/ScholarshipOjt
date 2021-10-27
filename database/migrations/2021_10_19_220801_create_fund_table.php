<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFundTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fund', function (Blueprint $table) {
            $table->increments('fund_id');
            $table->string('fund', 10);
            $table->tinyInteger('part')->default(2);
            $table->string('fund_desc', 150);
            $table->tinyInteger('opt')->default(0);
            $table->unsignedTinyInteger('course_type_id')->default('0');
            $table->integer('college_id')->default(0);
            $table->integer('degree_id')->default(0);
            $table->integer('standing')->default(0);
            $table->integer('degree_type')->default(0);
            $table->tinyInteger('free_educ')->default(0);
            $table->integer('nef')->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fund');
    }
}
