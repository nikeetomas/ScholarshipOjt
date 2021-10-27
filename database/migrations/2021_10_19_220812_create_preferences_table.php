<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreferencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('preferences', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cy_id');
            $table->tinyInteger('sem');
            $table->tinyInteger('status')->nullable()->default(0);
            $table->unsignedTinyInteger('flag')->nullable();
            $table->tinyInteger('schedule')->nullable();
            $table->tinyInteger('enlistment')->nullable();
            $table->date('deadline')->nullable();
            $table->date('gs_deadline')->nullable();
            $table->date('com_deadline')->nullable();
            $table->date('nstp_deadline')->nullable();
            $table->date('enl_deadline')->nullable();
            $table->date('gs_enl_deadline')->nullable();
            $table->date('cad_deadline')->nullable();
            $table->date('ac_deadline')->nullable();
            $table->tinyInteger('admission')->nullable();

            $table->index(['cy_id', 'sem', 'status'], 'cy_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('preferences');
    }
}
