<?php

use App\MasterNodeStatus;
use Illuminate\Database\Seeder;

class MasterMasterNodeStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
    	
        MasterNodeStatus::create([
        	'name' => 'NOT STARTED',
        	'description' => $faker->sentence(),
            'label' => 'primary',
            'state' => 'check'
        ]);
        MasterNodeStatus::create([
        	'name' => 'IN-QUEUE',
        	'description' => $faker->sentence(),
            'label' => 'info',
            'state' => 'check'
        ]);
        MasterNodeStatus::create([
        	'name' => 'IN PROGRESS',
        	'description' => $faker->sentence(),
            'label' => 'warning',
            'state' => 'unchecked'
        ]);
        MasterNodeStatus::create([
        	'name' => 'COMPLETED',
        	'description' => $faker->sentence(),
            'label' => 'success',
            'state' => 'unchecked'
        ]);
        MasterNodeStatus::create([
        	'name' => 'ON HOLD',
        	'description' => $faker->sentence(),
            'label' => 'danger',
            'state' => 'check'
        ]);
        MasterNodeStatus::create([
        	'name' => 'EXTERNAL BOTTLE NECK',
        	'description' => $faker->sentence(),
            'label' => 'danger',
            'state' => 'check'
        ]);
        MasterNodeStatus::create([
        	'name' => 'INTERNAL BOTTLE NECK',
        	'description' => $faker->sentence(),
            'label' => 'danger',
            'state' => 'check'
        ]);
        MasterNodeStatus::create([
        	'name' => 'ESCALATED',
        	'description' => $faker->sentence(),
            'label' => 'info',
            'state' => 'check'
        ]);
    }
}
