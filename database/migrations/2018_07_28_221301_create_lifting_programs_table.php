<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLiftingProgramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lifting_programs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('batch');
            $table->date('date');
            $table->integer('production');
            $table->integer('cummulative_production')->nullable();
            $table->integer('STARTDEEP');
            $table->integer('STARTDEEP_CUMM');
            $table->integer('FAMFA');
            $table->integer('FAMFA_CUMM');
            $table->integer('TAXOIL');
            $table->integer('TAXOIL_CUMM');
            $table->integer('PETROBRAS');
            $table->integer('PETROBRAS_CUMM');
            $table->integer('NNPC-1');
            $table->integer('NNPC-1_CUMM');
            $table->integer('STATOIL');
            $table->integer('STATOIL_CUMM');
            $table->integer('TNOS');
            $table->integer('TNOS_CUMM');
            $table->integer('NNPC-2');
            $table->integer('NNPC-2_CUMM');
            $table->boolean('lifting')->default(0);
            $table->string('lifter')->nullable();
            $table->date('laycan')->nullable();
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
        Schema::drop('lifting_programs');
    }
}
