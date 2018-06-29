<?php

use Illuminate\Database\Seeder;
use App\Consignee;

class ConsigneeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Consignee::create([
        	'name' => 'Chevron Product Company',
        	'terminal_id' => 2,
        ]);
        Consignee::create([
        	'name' => 'Eastern Hydrocarbon Funding LTD',
        	'terminal_id' => 1,
        ]);
        Consignee::create([
        	'name' => 'Western Hydrocarbon Funding',
        	'terminal_id' => 1,
        ]);
        Consignee::create([
        	'name' => 'NNPC Consignee',
        	'terminal_id' => 1,
        ]);
    }
}
