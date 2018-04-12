<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TerminalSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(TerminalProductSeeder::class);
        $this->call(DailyProductionSeeder::class);
        $this->call(DailyProductionCommentSeeder::class);
    }
}
