<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LPBatch extends Model
{
    protected $fillable = ['batch_id','daily_production','STARDEEPBOH','FAMFABOH','PETROBRASBOH','TAXOILBOH','STATOILBOH','TNOSBOH','NNPC-1BOH','forecast_start_date','user_id','comment'];

    protected $table = 'l_p_batches';

    public function liftingProgram(){
    	
    	return $this->belongsTo('App\LiftingProgram','batch_id');
    }
}
