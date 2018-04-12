<?php

use App\DailyProductionComment;
use Illuminate\Database\Seeder;

class DailyProductionCommentSeeder extends Seeder
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

            DailyProductionComment::create([

                'daily_production_id' => $faker->numberBetween(1,1000),
                'comment' => $faker->text(200)

            ]);
        }
    }
}
