<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ExportTableMigration extends Migration
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
            $table->Integer('terminal_id');
            $table->Integer('product_id');
            $table->Integer('lifter_id');
            $table->Integer('cargo_type_id');

            $table->integer('norminated_cargo')->unsigned();
            $table->integer('actual_cargo')->unsigned();
            $table->date('bol_date')->nullable();
            $table->integer('ship_figure')->nullable();
            $table->string('nxp_no')->nullable();
            $table->string('vessel')->nullable();
            $table->date('date_range');
            $table->date('eta');
            $table->string('desination')->nullable();
            $table->string('inspector')->nullable();
            $table->string('vessel_agent')->nullable();
            $table->integer('consignee_id')->nullable();
            $table->string('dwt_of_vessel')->nullable();
            $table->string('flag_of_vessel')->nullable();
            $table->date('dpr_clearnace_date')->nullable();
            $table->date('nnpc_clearnace_date')->nullable();
            $table->date('di_date')->nullable();
            $table->date('nxp_date')->nullable();
            $table->boolean('ness_processed')->default(0);
            $table->string('ness_no')->nullable();
            $table->boolean('csc_processed')->default(0);
            $table->string('csc_no')->nullable();
            $table->boolean('cci_processed')->default(0);
            $table->string('cci_no')->nullable();
            $table->boolean('has_outturn')->default(0);
            $table->boolean('has_lossclaim')->default(0);
            $table->boolean('has_demurrage')->default(0);
            $table->integer('demurrage_amount')->nullable();
            $table->date('cpc_notification_date')->nullable();
            $table->date('demurrage_ws_ready_date')->nullable();
            $table->date('demurrage_approval_date')->nullable();
            $table->string('document_link')->nullable();
            $table->string('user');
            $table->string('comment')->nullable();
            $table->integer('outturn_cost')->nullable();
            $table->integer('loss_claim_amount')->nullable();
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
