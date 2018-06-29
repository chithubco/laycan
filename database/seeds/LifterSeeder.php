<?php

use Illuminate\Database\Seeder;

use App\Lifter;

class LifterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Lifter::create([
        	'name' => 'NNPC',
        	'terminal_id'=> 1,
        ]);
        Lifter::create([
        	'name' => 'CNL',
        	'terminal_id'=> 1,
        ]);
        Lifter::create([
        	'name' => 'STARTDEEP',
        	'terminal_id'=> 5,
        ]);
        Lifter::create([
        	'name' => 'TINOS',
        	'terminal_id'=> 5,
        ]);
        Lifter::create([
        	'name' => 'STATOIL',
        	'terminal_id'=> 5,
        ]);
        Lifter::create([
        	'name' => 'FAMFA',
        	'terminal_id'=> 5,
        ]);
        Lifter::create([
        	'name' => 'NNPC-2',
        	'terminal_id'=> 5,
        ]);
        Lifter::create([
        	'name' => 'NNPC',
        	'terminal_id'=> 2,
        ]);

    }
}
