<?php

use App\NodeElement;
use Illuminate\Database\Seeder;

class NodeElementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker\Factory::create();
    	
        NodeElement::create([
        	'export_id' => $faker->numberBetween(1,100),
        	'node_id' => 1,
        	'title' => 'Curtailment Pakage Created',
        	'description' => $faker->sentence(),
        	'user_id' => 1,
        	'status_id' => $faker->numberBetween(1,8),
        ]);

        NodeElement::create([
        	'export_id' => $faker->numberBetween(1,100),
        	'node_id' => 1,
        	'title' => 'Curtailment Pakage Presented',
        	'description' => $faker->sentence(),
        	'user_id' => 1,
        	'status_id' => $faker->numberBetween(1,8),
        ]);

        NodeElement::create([
        	'export_id' => $faker->numberBetween(1,100),
        	'node_id' => 1,
        	'title' => 'Curtailment Pakage Approved',
        	'description' => $faker->sentence(),
        	'user_id' => 1,
        	'status_id' => $faker->numberBetween(1,8),
        ]);

        NodeElement::create([
        	'export_id' => $faker->numberBetween(1,100),
        	'node_id' => 1,
        	'title' => 'Curtailment Pakage Approval Notification Sent',
        	'description' => $faker->sentence(),
        	'user_id' => 1,
        	'status_id' => $faker->numberBetween(1,8),
        ]);
    }
}
