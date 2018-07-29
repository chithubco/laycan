<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LiftingProgram extends Model
{
    protected $fillable = ['batch','date','production','cummulative_production','lifting','lifter','laycan','STARTDEEP','FAMFA','TAXOIL','PETROBRAS','NNPC-1',
		'STATOIL','NNPC-2','TNOS','STARTDEEP_CUMM','FAMFA_CUMM','TAXOIL_CUMM','PETROBRAS_CUMM','NNPC-1_CUMM','STATOIL_CUMM','TNOS_CUMM','NNPC-2_CUMM'];
}
