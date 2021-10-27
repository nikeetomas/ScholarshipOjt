<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScholarshipDeductionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scholarship_deductions', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('scholarship_id');
            $table->integer('fund_id');
            $table->decimal('percent', 10);
            $table->string('fund', 45);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('scholarship_deductions');
    }
}
