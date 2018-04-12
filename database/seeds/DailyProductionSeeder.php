<?php

use App\DailyProduction;
use Illuminate\Database\Seeder;

class DailyProductionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for ($i = 0; $i < 1000; $i++){

            DailyProduction::create([

                'production_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'terminal_id' => $faker->numberBetween(1,6),
                'product_id' => $faker->numberBetween(1,4),
                'amount' => $faker->numberBetween(25000,250000),
                'user_id' => $faker->numberBetween(1,4)
            ]);
        }
    }
}
