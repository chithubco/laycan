<?php

use Illuminate\Database\Seeder;

class NodeElementStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker\Factory::create();
    	
        NodeStatus::create([
        	'name' => 'NOT STARTED',
        	'description' => $faker->sentence()
        ]);
        NodeStatus::create([
        	'name' => 'IN-QUEUE',
        	'description' => $faker->sentence()
        ]);
        NodeStatus::create([
        	'name' => 'IN PROGRESS',
        	'description' => $faker->sentence()
        ]);
        NodeStatus::create([
        	'name' => 'COMPLETED',
        	'description' => $faker->sentence()
        ]);
        NodeStatus::create([
        	'name' => 'ON HOLD',
        	'description' => $faker->sentence()
        ]);
        NodeStatus::create([
        	'name' => 'EXTERNAL BOTTLE NECK',
        	'description' => $faker->sentence()
        ]);
        NodeStatus::create([
        	'name' => 'INTERNAL BOTTLE NECK',
        	'description' => $faker->sentence()
        ]);
        NodeStatus::create([
        	'name' => 'ESCALATED',
        	'description' => $faker->sentence()
        ]);
    }
}
