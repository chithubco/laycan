<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exports', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cargo_no');
            $table->string('terminal');
            $table->string('product');
            $table->string('lifter');
            $table->string('cargo_type');
            $table->integer('norminated_cargo')->unsigned();
            $table->integer('actual_cargo')->unsigned();
            $table->date('bol_date');
            $table->integer('ship_figure');
            $table->string('nxp_no');
            $table->string('vessel');
            $table->date('date_range');
            $table->date('eta');
            $table->string('desination');
            $table->string('inspector');
            $table->string('vessel_agent');
            $table->string('consignee');
            $table->string('dwt_of_vessel');
            $table->string('flag_of_vessel');
            $table->date('dpr_clearnace_date');
            $table->date('nnpc_clearnace_date');
            $table->date('di_date');
            $table->date('nxp_date');
            $table->boolean('ness_processed')->default(0);
            $table->boolean('csc_processed')->default(0);
            $table->boolean('has_outturn')->default(0);
            $table->boolean('has_lossclaim')->default(0);
            $table->boolean('has_demurrage')->default(0);
            $table->integer('demurrage_amount');
            $table->date('cpc_notification_date');
            $table->date('demurrage_ws_ready_date');
            $table->date('demurrage_approval_date');
            $table->string('document_link');
            $table->string('user');
            $table->string('comment');
            $table->integer('outturn_cost');
            $table->integer('loss_claim_amount');
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
        Schema::drop('exports');
    }
}
