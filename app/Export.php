<?php

namespace App;

use App\Export;
use Illuminate\Database\Eloquent\Model;

class Export extends Model
{
    protected $fillable = [

    	'cargo_no','terminal_id','product_id','lifter_id',
    	'cargo_type_id','norminated_cargo','actual_cargo',
    	'bol_date','ship_figure','nxp_no','vessel',
    	'date_range','eta','desination','inspector',
    	'vessel_agent','consignee_id','dwt_of_vessel','flag_of_vessel','dpr_clearnace_date','nnpc_clearnace_date','di_date','nxp_date',
    	'ness_processed','csc_processed','has_outturn',
    	'has_lossclaim','has_demurrage','demurrage_amount','cpc_notification_date','demurrage_ws_ready_date','demurrage_approval_date','document_link','user','comment','outturn_cost','loss_claim_amount'
    ];

    public function getAll(){
    	$exports = Export::all();
    	return $exports;
    }

    public function terminal(){

        return $this->belongsTo('App\Terminal') ;
    }
    public function product(){

        return $this->belongsTo('App\Product') ;
    }
    public function lifter(){

        return $this->belongsTo('App\Lifter') ;
    }
    public function cargoType(){

        return $this->belongsTo('App\CargoType') ;
    }
    public function consignee(){

        return $this->belongsTo('App\Consignee') ;
    }
    
}
