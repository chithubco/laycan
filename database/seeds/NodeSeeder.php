<?php

use App\Node;
use Illuminate\Database\Seeder;

class NodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        
        Node::create([
        	'name' => 'CURTAILMENT PACKAGE',
            'master_node_status_id' => $faker->numberBetween(1,8),
            'user_id' => 1
        ]);
        Node::create([
        	'name' => 'NOMINATION LETTERS',
            'master_node_status_id' => $faker->numberBetween(1,8),
            'user_id' => 1
        ]);
        Node::create([
        	'name' => 'CLEARANCES',
            'master_node_status_id' => $faker->numberBetween(1,8),
            'user_id' => 1
        ]);
        Node::create([
        	'name' => 'NPX DOCUMENTS',
            'master_node_status_id' => $faker->numberBetween(1,8),
            'user_id' => 1
        ]);
        Node::create([
        	'name' => 'CARGO DOCUMENTATION',
            'master_node_status_id' => $faker->numberBetween(1,8),
            'user_id' => 1
        ]);
        Node::create([
        	'name' => 'OUTTURN VERIFICATION',
            'master_node_status_id' => $faker->numberBetween(1,8),
            'user_id' => 1
        ]);
        Node::create([
        	'name' => 'LOSS CLAIM',
            'master_node_status_id' => $faker->numberBetween(1,8),
            'user_id' => 1
        ]);
        Node::create([
        	'name' => 'CCI PROCESSING',
            'master_node_status_id' => $faker->numberBetween(1,8),
            'user_id' => 1
        ]);
    }
}
