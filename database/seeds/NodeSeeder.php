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
            'user_id' => 1
        ]);
        Node::create([
        	'name' => 'NOMINATION LETTERS',
            'user_id' => 1
        ]);
        Node::create([
        	'name' => 'CLEARANCES',
            'user_id' => 1
        ]);
        Node::create([
        	'name' => 'NPX DOCUMENTS',
            'user_id' => 1
        ]);
        Node::create([
        	'name' => 'CARGO DOCUMENTATION',
            'user_id' => 1
        ]);
        Node::create([
        	'name' => 'OUTTURN VERIFICATION',
            'user_id' => 1
        ]);
        Node::create([
        	'name' => 'LOSS CLAIM',
            'user_id' => 1
        ]);
        Node::create([
        	'name' => 'CCI PROCESSING',
            'user_id' => 1
        ]);
    }
}
