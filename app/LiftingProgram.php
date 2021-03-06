<?php

namespace App;

use App\LPBatch;
use Carbon\Carbon;
use Faker\Factory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class LiftingProgram extends Model
{
    protected $fillable = ['batch','date','production','cummulative_production','lifting','lifter','laycan','STARTDEEP','FAMFA','TAXOIL','PETROBRAS','NNPC-1',
		'STATOIL','NNPC-2','TNOS','STARTDEEP_CUMM','FAMFA_CUMM','TAXOIL_CUMM','PETROBRAS_CUMM','NNPC-1_CUMM','STATOIL_CUMM','TNOS_CUMM','NNPC-2_CUMM'];

	public function generateLiftingProgram($forecastVolume,$BOH,$STARTDEEPOB,$FAMAOB,$PETROBREASOB,$TAXOILOB,$STATOILOB,$TNOSOB,$NNPC_2OH,$forcastStartDate,$comment,$duration){
			
		
		
		$faker = Factory::create();
    	$batch_no = $faker->postcode;
    	$today = Carbon::parse($forcastStartDate);
    	$layCanDate = null;

    	$cumm_prod = $BOH;
    	$daily_pro = $forecastVolume;
    	
    	$stardeep_cumm = $STARTDEEPOB ;
    	$famfa_cumm = $FAMAOB;
    	$taxoil_cumm = $TAXOILOB;
        $petrobras_cumm = $PETROBREASOB;
    	$nnpc1_cumm = 0;
    	$statoil_cumm = $STATOILOB;
    	$tnos_cumm = $TNOSOB;
    	$nnpc2_cumm = $NNPC_2OH;

    	$lifterName = "";

    	$LP_Log = LPBatch::create([
        		'batch_id' => $batch_no,
        		'daily_production' => $daily_pro,
        		'STARDEEPBOH' => $STARTDEEPOB,
        		'FAMFABOH' => $FAMAOB,
        		'PETROBRASBOH' => $PETROBREASOB,
        		'TAXOILBOH' => $TAXOILOB,
        		'STATOILBOH' => $STATOILOB,
        		'TNOSBOH' => $TNOSOB,
        		'NNPC-1BOH' => $NNPC_2OH,
        		'forecast_start_date' => $forcastStartDate,
        		'user_id' => Auth::user()->id,
        		'comment' => $comment

        ]);

      

    	for ($i=0; $i < $duration; $i++) { 

    		$daily_pro = $forecastVolume;
    		$cumm_prod = $cumm_prod + $daily_pro;
    		$stardeep_cumm = $stardeep_cumm + ($daily_pro * 0.209537229000666);
	    	$famfa_cumm = $famfa_cumm +($daily_pro * 0.0806932363368615);
	    	$taxoil_cumm = $taxoil_cumm +($daily_pro * 0.282004227412306);
	    	$petrobras_cumm = $petrobras_cumm +($daily_pro * 0.0523843072501665);
	    	$nnpc1_cumm = $nnpc1_cumm +($daily_pro * 0.0);
	    	$statoil_cumm = $statoil_cumm +($daily_pro * 0.08353226739075585);
	    	$tnos_cumm = $tnos_cumm +($daily_pro * 0.0726712646295539);
	    	$nnpc2_cumm = $nnpc2_cumm +($daily_pro * 0.219177467979688);
	    	$productionDate = $today->addDay();


	    	$hasLifting = 0 ;

	    	if ($cumm_prod > 1500000) {
	    		$hasLifting = 1;
	    		$cumm_prod = $cumm_prod - 975000;
	    		$layCanDate = $productionDate;

                //Get the total volume for each OML for comparison
	    		$OML_127 = $stardeep_cumm + $famfa_cumm + $taxoil_cumm + $petrobras_cumm + $nnpc1_cumm;
	    		$OML_128 = $tnos_cumm + $statoil_cumm + $nnpc2_cumm;

	    		if ($OML_127 > $OML_128) { //Determine which OML should lift
	    			
                    //Check who should lift with OML 127
	    			$maxVolume = max($stardeep_cumm,$famfa_cumm,$taxoil_cumm,$petrobras_cumm);
	    			if ($maxVolume == $stardeep_cumm) {
	    				
	    				$lifterName = "OML 127-STARTDEEP";
	    				$stardeep_cumm = $stardeep_cumm - 975000;

	    			}elseif ($maxVolume == $famfa_cumm) {
	    				$lifterName = "OML 127-FAMFA";
	    				$famfa_cumm = $famfa_cumm - 975000;

	    			}elseif ($maxVolume == $taxoil_cumm) {
	    				$lifterName = "OML 127-TAXOIL";
	    				$taxoil_cumm = $taxoil_cumm - 975000;

	    			}elseif ($maxVolume == $petrobras_cumm) {
	    				$lifterName = "OML 127-PETROBRAS";
	    				$petrobras_cumm = $petrobras_cumm - 975000;
	    			}
	    		}else{
	    			$lifterName = "OML 128";

	    			//ADD NNPC OVERLIFT LOGIC TO SYSTEM
	    			$statOilShare = $nnpc2_cumm * 0.4615;
	    			$tnosShare = $nnpc2_cumm * 0.5385;

	    			$newStatOilShare = $statoil_cumm - $statOilShare;
	    			$newTNOSShare = $tnos_cumm - $tnosShare;

	    			$maxVolume = max($newStatOilShare,$newTNOSShare);

                    //A logic needs ot be here to give NNPC a cargo after every set of cargos

	    			if ($maxVolume == $newStatOilShare) {
	    				$lifterName = "OML 128-STATOIL";
	    				$statoil_cumm = $statoil_cumm - 975000;

	    			}elseif ($maxVolume == $newTNOSShare) {
	    				$lifterName = "OML 128-TNOS";
	    				$tnos_cumm = $tnos_cumm - 975000;

	    			}
	    		}

	    		
	    	}


    		LiftingProgram::create([
            	'batch' => $batch_no,
            	'date' => $productionDate,
            	'production' => $daily_pro ,
            	'cummulative_production' => $cumm_prod,
            	'STARTDEEP' => $daily_pro * 0.209537229000666,
            	'STARTDEEP_CUMM' => $stardeep_cumm,
            	'FAMFA' => $daily_pro * 0.0806932363368615,
            	'FAMFA_CUMM' => $famfa_cumm,
            	'TAXOIL' => $daily_pro * 0.282004227412306,
            	'TAXOIL_CUMM' => $taxoil_cumm,
            	'PETROBRAS' => $daily_pro * 0.0523843072501665,
            	'PETROBRAS_CUMM' => $petrobras_cumm,
            	'NNPC-1' => $daily_pro * 0.0,
            	'NNPC-1_CUMM' => $nnpc1_cumm,
            	'STATOIL' => $daily_pro * 0.08353226739075585,
            	'STATOIL_CUMM' => $statoil_cumm,
            	'NNPC-2' => $daily_pro * 0.0726712646295539,
            	'NNPC-2_CUMM' => $nnpc2_cumm,
            	'TNOS' => $daily_pro * 0.219177467979688,
            	'TNOS_CUMM' => $tnos_cumm,
            	'lifting' => $hasLifting,
            	'laycan' => $layCanDate,
            	'lifter' => $lifterName,
        	]);

        	

        	$layCanDate = null;
        	$lifterName ="";
		}

		
	}
}
