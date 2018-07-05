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
    	
        //Curtailment Package Node
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

        //Nomination Letter Node
        NodeElement::create([
            'export_id' => $faker->numberBetween(1,100),
            'node_id' => 2,
            'title' => 'Generate Nomination Letter',
            'description' => $faker->sentence(),
            'user_id' => 1,
            'status_id' => $faker->numberBetween(1,8),
        ]);

        NodeElement::create([
            'export_id' => $faker->numberBetween(1,100),
            'node_id' => 2,
            'title' => 'Nomination Letter Signed',
            'description' => $faker->sentence(),
            'user_id' => 1,
            'status_id' => $faker->numberBetween(1,8),
        ]);

        NodeElement::create([
            'export_id' => $faker->numberBetween(1,100),
            'node_id' => 2,
            'title' => 'Nomination Letter Send to NNPC',
            'description' => $faker->sentence(),
            'user_id' => 1,
            'status_id' => $faker->numberBetween(1,8),
        ]);

        NodeElement::create([
            'export_id' => $faker->numberBetween(1,100),
            'node_id' => 2,
            'title' => 'Nomination Letter Send to DPR and Acknowledged',
            'description' => $faker->sentence(),
            'user_id' => 1,
            'status_id' => $faker->numberBetween(1,8),
        ]);

        //Clearances Recieved
        NodeElement::create([
            'export_id' => $faker->numberBetween(1,100),
            'node_id' => 3,
            'title' => 'NNPC Clearnace Recieved',
            'description' => $faker->sentence(),
            'user_id' => 1,
            'status_id' => $faker->numberBetween(1,8),
        ]);

        NodeElement::create([
            'export_id' => $faker->numberBetween(1,100),
            'node_id' => 3,
            'title' => 'DPR Clerance Recieved',
            'description' => $faker->sentence(),
            'user_id' => 1,
            'status_id' => $faker->numberBetween(1,8),
        ]);

        NodeElement::create([
            'export_id' => $faker->numberBetween(1,100),
            'node_id' => 3,
            'title' => 'Clearances Recieved at Terminal',
            'description' => $faker->sentence(),
            'user_id' => 1,
            'status_id' => $faker->numberBetween(1,8),
        ]);

        //NXP Node
        NodeElement::create([
            'export_id' => $faker->numberBetween(1,100),
            'node_id' => 4,
            'title' => 'NXP Form Filled and Send to Finance',
            'description' => $faker->sentence(),
            'user_id' => 1,
            'status_id' => $faker->numberBetween(1,8),
        ]);

        NodeElement::create([
            'export_id' => $faker->numberBetween(1,100),
            'node_id' => 4,
            'title' => 'NXP Form Recieved from Finance',
            'description' => $faker->sentence(),
            'user_id' => 1,
            'status_id' => $faker->numberBetween(1,8),
        ]);

        NodeElement::create([
            'export_id' => $faker->numberBetween(1,100),
            'node_id' => 4,
            'title' => 'NXP Sent to Terminal',
            'description' => $faker->sentence(),
            'user_id' => 1,
            'status_id' => $faker->numberBetween(1,8),
        ]);

        //Cargo DOcuments Node
        NodeElement::create([
            'export_id' => $faker->numberBetween(1,100),
            'node_id' => 5,
            'title' => 'All Cargo Documents Recieved from Terminal',
            'description' => $faker->sentence(),
            'user_id' => 1,
            'status_id' => $faker->numberBetween(1,8),
        ]);

        NodeElement::create([
            'export_id' => $faker->numberBetween(1,100),
            'node_id' => 5,
            'title' => 'Cargo Documents Filled in Right Folders',
            'description' => $faker->sentence(),
            'user_id' => 1,
            'status_id' => $faker->numberBetween(1,8),
        ]);

        NodeElement::create([
            'export_id' => $faker->numberBetween(1,100),
            'node_id' => 5,
            'title' => 'Data and Records Updated',
            'description' => $faker->sentence(),
            'user_id' => 1,
            'status_id' => $faker->numberBetween(1,8),
        ]);

        //Outturn Verification
        NodeElement::create([
            'export_id' => $faker->numberBetween(1,100),
            'node_id' => 6,
            'title' => 'Outturn Undertaken Letter Send to DPR',
            'description' => $faker->sentence(),
            'user_id' => 1,
            'status_id' => $faker->numberBetween(1,8),
        ]);

        NodeElement::create([
            'export_id' => $faker->numberBetween(1,100),
            'node_id' => 6,
            'title' => 'FCPA for Outturn Activities Completed',
            'description' => $faker->sentence(),
            'user_id' => 1,
            'status_id' => $faker->numberBetween(1,8),
        ]);

        NodeElement::create([
            'export_id' => $faker->numberBetween(1,100),
            'node_id' => 6,
            'title' => 'Visa Processing Completed',
            'description' => $faker->sentence(),
            'user_id' => 1,
            'status_id' => $faker->numberBetween(1,8),
        ]);

        NodeElement::create([
            'export_id' => $faker->numberBetween(1,100),
            'node_id' => 6,
            'title' => 'Outturn Activities Completed',
            'description' => $faker->sentence(),
            'user_id' => 1,
            'status_id' => $faker->numberBetween(1,8),
        ]);

        //Loss Clain Activity Node
        NodeElement::create([
            'export_id' => $faker->numberBetween(1,100),
            'node_id' => 7,
            'title' => 'Loss Claim Activities Completed',
            'description' => $faker->sentence(),
            'user_id' => 1,
            'status_id' => $faker->numberBetween(1,8),
        ]);

        //CCI Activities Completed
        NodeElement::create([
            'export_id' => $faker->numberBetween(1,100),
            'node_id' => 8,
            'title' => 'CCI Activities Completed',
            'description' => $faker->sentence(),
            'user_id' => 1,
            'status_id' => $faker->numberBetween(1,8),
        ]);
    }
}
