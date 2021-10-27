<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDegreesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('degrees', function (Blueprint $table) {
            $table->increments('id')->unique('id');
            $table->unsignedInteger('college_id')->index('degrees_college_id_foreign');
            $table->string('degree', 150);
            $table->string('abbr', 30);
            $table->integer('type')->default(0);
            $table->unsignedTinyInteger('years');
            $table->unsignedTinyInteger('active');
            $table->tinyInteger('admission')->nullable();
            $table->unsignedTinyInteger('strand_id')->nullable()->default('4');
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
        Schema::dropIfExists('degrees');
    }
}
