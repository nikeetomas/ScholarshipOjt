<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScholarshipDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scholarship_details', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('scholarship_id')->index('scholarship_id');
            $table->string('appli_poli', 255);
            $table->string('qualification', 255);
            $table->string('amount_of_grant', 255);
            $table->string('gen_guideline', 255);
            $table->string('contact_info',255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('scholarship_details');
    }
}
