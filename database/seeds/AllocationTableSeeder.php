<?php

use App\Allocation;
use Carbon\Carbon;
use Faker\Factory;
use Illuminate\Database\Seeder;

class AllocationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        $forecastDate = Carbon::today();

        for ($i=0; $i < 6 ; $i++) { 

        	Allocation::create([
	        	'date' => $forecastDate,
	        	'block' => 'OML_127',
	        	'label' => 'STARTDEEP_OML127',
	        	'value' => 0.209537229000666,
	        	'user_id' => $faker->numberBetween(1,2)
	        ]);

	        Allocation::create([
	        	'date' => $forecastDate,
	        	'block' => 'OML_127',
	        	'label' => 'PETROBRAS_OML127',
	        	'value' => 0.0523843072501665,
	        	'user_id' => $faker->numberBetween(1,2)
	        ]);
	        Allocation::create([
	        	'date' => $forecastDate,
	        	'block' => 'OML_127',
	        	'label' => 'FAMFA_OML127',
	        	'value' => 0.0806932363368615,
	        	'user_id' => $faker->numberBetween(1,2)
	        ]);

	        Allocation::create([
	        	'date' => $forecastDate,
	        	'block' => 'OML_127',
	        	'label' => 'TAXOIL_OML127',
	        	'value' => 0.282004227412306,
	        	'user_id' => $faker->numberBetween(1,2)
	        ]);

	        //OML 128

	        Allocation::create([
	        	'date' => $forecastDate,
	        	'block' => 'OML_128',
	        	'label' => 'STATOIL_OML128',
	        	'value' => 0.08353226739075585,
	        	'user_id' => $faker->numberBetween(1,2)
	        ]);
	        Allocation::create([
	        	'date' => $forecastDate,
	        	'block' => 'OML_128',
	        	'label' => 'TNOS_OML128',
	        	'value' => 0.0726712646295539,
	        	'user_id' => $faker->numberBetween(1,2)
	        ]);

	        Allocation::create([
	        	'date' => $forecastDate,
	        	'block' => 'OML_128',
	        	'label' => 'NNPC-2_OML_128',
	        	'value' => 0.219177467979688,
	        	'user_id' => $faker->numberBetween(1,2)
	        ]);

	        /****
	        ***
	        **/

	        Allocation::create([
	        	'date' => $forecastDate,
	        	'block' => 'GENERAL',
	        	'label' => 'STARTDEEP_OML127',
	        	'value' => 0.209537229000666,
	        	'user_id' => $faker->numberBetween(1,2)
	        ]);

	        Allocation::create([
	        	'date' => $forecastDate,
	        	'block' => 'GENERAL',
	        	'label' => 'PETROBRAS_OML127',
	        	'value' => 0.0523843072501665,
	        	'user_id' => $faker->numberBetween(1,2)
	        ]);
	        Allocation::create([
	        	'date' => $forecastDate,
	        	'block' => 'GENERAL',
	        	'label' => 'FAMFA_OML127',
	        	'value' => 0.0806932363368615,
	        	'user_id' => $faker->numberBetween(1,2)
	        ]);

	        Allocation::create([
	        	'date' => $forecastDate,
	        	'block' => 'GENERAL',
	        	'label' => 'TAXOIL_OML127',
	        	'value' => 0.282004227412306,
	        	'user_id' => $faker->numberBetween(1,2)
	        ]);

	        //OML 128

	        Allocation::create([
	        	'date' => $forecastDate,
	        	'block' => 'GENERAL',
	        	'label' => 'STATOIL_OML128',
	        	'value' => 0.08353226739075585,
	        	'user_id' => $faker->numberBetween(1,2)
	        ]);
	        Allocation::create([
	        	'date' => $forecastDate,
	        	'block' => 'GENERAL',
	        	'label' => 'TNOS_OML128',
	        	'value' => 0.0726712646295539,
	        	'user_id' => $faker->numberBetween(1,2)
	        ]);

	        Allocation::create([
	        	'date' => $forecastDate,
	        	'block' => 'GENERAL',
	        	'label' => 'NNPC-2_OML_128',
	        	'value' => 0.219177467979688,
	        	'user_id' => $faker->numberBetween(1,2)
	        ]);

	        $forecastDate->addMonth(1);

        }

    }
}
