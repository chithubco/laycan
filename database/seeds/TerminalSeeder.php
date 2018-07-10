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
            'name'=> 'AGBAMI',
            'user_id' => 1,
        ]);
        Terminal::create([
                'name'=> 'EGTL',
                'user_id' => 1,
        ]);
        Terminal::create([
            'name'=> 'ESCRAVOS',
            'user_id' => 1,
        ]);
        Terminal::create([
            'name'=> 'PENNINGTON',
            'user_id' => 1,
        ]);
        Terminal::create([
            'name'=> 'LP FSO',
            'user_id' => 1,
        ]);

    }
}
