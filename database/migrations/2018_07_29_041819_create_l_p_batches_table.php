<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLPBatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('l_p_batches', function (Blueprint $table) {
            $table->increments('id');
            $table->string('batch_id');
            $table->integer('daily_production');
            $table->integer('STARDEEPBOH');
            $table->integer('FAMFABOH');
            $table->integer('PETROBRASBOH');
            $table->integer('TAXOILBOH');
            $table->integer('STATOILBOH');
            $table->integer('TNOSBOH');
            $table->integer('NNPC-1BOH');
            $table->date('forecast_start_date');
            $table->integer('user_id');
            $table->text('comment')->nullable();
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
        Schema::drop('l_p_batches');
    }
}
