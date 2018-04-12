<?php

use App\Terminal;
use Illuminate\Database\Seeder;

class TerminalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Terminal::create([
                'name'=> 'ESCRAVOS'
        ]);
        Terminal::create([
            'name'=> 'EGTL'
        ]);
        Terminal::create([
            'name'=> 'PENNINGTON'
        ]);
        Terminal::create([
            'name'=> 'LP FSO'
        ]);
        Terminal::create([
            'name'=> 'AGBAMI'
        ]);
    }
}
