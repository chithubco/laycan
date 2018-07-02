<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNodeElementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('node_elements', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('export_id');
            $table->integer('node_id');
            $table->string('title');
            $table->text('description');
            $table->integer('user_id');
            $table->integer('status_id');
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
        Schema::drop('node_elements');
    }
}
