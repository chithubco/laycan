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
        $this->call(UserSeeder::class);
        $this->call(TerminalSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(TerminalProductSeeder::class);
        $this->call(ConsigneeSeeder::class);
        $this->call(LifterSeeder::class);
        $this->call(CargoTypeSeeder::class);
        $this->call(TerminalProductSeeder::class);
        $this->call(DocumentCategorySeeder::class);
        $this->call(NodeSeeder::class);
        $this->call(NodeElementSeeder::class);
        $this->call(NodeElementCommentSeeder::class);
        //$this->call(DailyProductionSeeder::class);
        //$this->call(DailyProductionCommentSeeder::class);
    }
}
