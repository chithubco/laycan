<?php

use App\NodeComment;
use Illuminate\Database\Seeder;

class NodeElementCommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        
        NodeComment::create([
        	'node_element_id' => 1,
        	'comment' => $faker->sentence(),
        	'user_id' => 1
        ]);

        NodeComment::create([
        	'node_element_id' => 1,
        	'comment' => $faker->sentence(),
        	'user_id' => 1
        ]);

        NodeComment::create([
        	'node_element_id' => 2,
        	'comment' => $faker->sentence(),
        	'user_id' => 1
        ]);
    }
}
