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
            $table->integer('lifting')->nullable();
            $table->string('lifter')->nullable();
            $table->string('laycan')->nullable();
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
