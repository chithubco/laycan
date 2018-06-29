<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        	'name' => 'Michael AGBOGO',
	        'email' => 'michael.agbogo@vicampro.com',
	        'password' => bcrypt('letmein'),
	        'remember_token' => str_random(10),
        ]);
    }
}
