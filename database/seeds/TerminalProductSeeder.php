<?php

use App\TerminalProduct;
use Illuminate\Database\Seeder;

class TerminalProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TerminalProduct::create([
            'terminal_id' => 1,
            'product_id' => 1
        ]);
        TerminalProduct::create([
            'terminal_id' => 2,
            'product_id' => 2
        ]);
        TerminalProduct::create([
            'terminal_id' => 2,
            'product_id' => 3
        ]);
        TerminalProduct::create([
            'terminal_id' => 2,
            'product_id' => 4
        ]);
        TerminalProduct::create([
            'terminal_id' => 2,
            'product_id' => 5
        ]);
        TerminalProduct::create([
            'terminal_id' => 2,
            'product_id' => 6
        ]);
        TerminalProduct::create([
            'terminal_id' => 3,
            'product_id' => 1
        ]);
        TerminalProduct::create([
            'terminal_id' => 4,
            'product_id' => 6
        ]);
        TerminalProduct::create([
            'terminal_id' => 5,
            'product_id' => 1
        ]);
    }
}
