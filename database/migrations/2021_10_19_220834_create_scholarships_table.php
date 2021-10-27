<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScholarshipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scholarships', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('scholarship_type')->index('scholarship_type');
            $table->string('scholarship', 150)->index('scholarship');
            $table->double('discount', 6, 2);
            $table->string('sem_charged', 3);
            $table->string('funded_by', 200);
            $table->tinyInteger('chargedfull')->default(0);
            $table->tinyInteger('active')->nullable()->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('scholarships');
    }
}
