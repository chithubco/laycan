<?php

use App\LiftingProgram;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class LiftingProgramTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker\Factory::create();

    	$batch_no = $faker->postcode;
    	$today = Carbon::today();
    	$layCanDate = null;

    	$cumm_prod = 0;
    	$daily_pro = 0;
    	
    	$stardeep_cumm = 0;
    	$famfa_cumm = 0;
    	$taxoil_cumm = 0;
    	$petrobras_cumm = 0;
    	$nnpc1_cumm = 0;
    	$statoil_cumm = 0;
    	$tnos_cumm = 0;
    	$nnpc2_cumm = 0;

    	$lifterName = "";


    	for ($i=0; $i < 365; $i++) { 

    		$daily_pro = $faker->numberBetween(206000,209000);
    		$cumm_prod = $cumm_prod + $daily_pro;
    		$stardeep_cumm = $stardeep_cumm + ($daily_pro * 0.134);
	    	$famfa_cumm = $famfa_cumm +($daily_pro * 0.134);
	    	$taxoil_cumm = $taxoil_cumm +($daily_pro * 0.134);
	    	$petrobras_cumm = $petrobras_cumm +($daily_pro * 0.134);
	    	$nnpc1_cumm = $nnpc1_cumm +($daily_pro * 0.134);
	    	$statoil_cumm = $statoil_cumm +($daily_pro * 0.134);
	    	$tnos_cumm = $tnos_cumm +($daily_pro * 0.134);
	    	$nnpc2_cumm = $nnpc2_cumm +($daily_pro * 0.134);
	    	$productionDate = $today->addDay();


	    	$hasLifting = 0 ;

	    	if ($cumm_prod > 1400000) {
	    		$hasLifting = 1;
	    		$cumm_prod = $cumm_prod - 975000;
	    		$layCanDate = $productionDate;

	    		$OML_127 = $stardeep_cumm + $famfa_cumm + $taxoil_cumm + $petrobras_cumm + $nnpc1_cumm;
	    		$OML_128 = $tnos_cumm + $statoil_cumm;

	    		if ($OML_127 > $OML_128) {
	    			
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
	    			$statOilShare = $nnpc2_cumm * 0.58;
	    			$tnosShare = $nnpc2_cumm * 0.58;

	    			$newStatOilShare = $statoil_cumm - $statOilShare;
	    			$newTNOSShare = $tnos_cumm - $tnosShare;

	    			$maxVolume = max($newStatOilShare,$newTNOSShare);

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
        	'STARTDEEP' => $daily_pro * 0.134,
        	'STARTDEEP_CUMM' => $stardeep_cumm,
        	'FAMFA' => $daily_pro * 0.134,
        	'FAMFA_CUMM' => $famfa_cumm,
        	'TAXOIL' => $daily_pro * 0.134,
        	'TAXOIL_CUMM' => $taxoil_cumm,
        	'PETROBRAS' => $daily_pro * 0.134,
        	'PETROBRAS_CUMM' => $petrobras_cumm,
        	'NNPC-1' => $daily_pro * 0.134,
        	'NNPC-1_CUMM' => $nnpc1_cumm,
        	'STATOIL' => $daily_pro * 0.134,
        	'STATOIL_CUMM' => $statoil_cumm,
        	'NNPC-2' => $daily_pro * 0.134,
        	'NNPC-2_CUMM' => $nnpc2_cumm,
        	'TNOS' => $daily_pro * 0.134,
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
