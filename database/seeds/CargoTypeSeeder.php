<?php

use Illuminate\Database\Seeder;
use App\CargoType;

class CargoTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CargoType::create([
        	'name' => 'NNPC Equity',
        	'terminal_id' => 1,
        ]);

        CargoType::create([
        	'name' => 'CNL Equity',
        	'terminal_id' => 1,
        ]);

        CargoType::create([
        	'name' => 'NNPC Falcon',
        	'terminal_id' => 1,
        ]);

        CargoType::create([
        	'name' => 'CNL Falcon',
        	'terminal_id' => 1,
        ]);

        CargoType::create([
        	'name' => 'NNPC Cheetah',
        	'terminal_id' => 1,
        ]);

        CargoType::create([
        	'name' => 'CNL Cheetah',
        	'terminal_id' => 1,
        ]);


    }
}
