<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'CRUDE'
        ]);
        Product::create([
            'name' => 'CONDENSATE'
        ]);
        Product::create([
            'name' => 'DIESEL'
        ]);
        Product::create([
            'name' => 'NAPHTHA'
        ]);
        Product::create([
            'name' => 'LPG'
        ]);
        Product::create([
            'name' => 'TRANSMIX'
        ]);
    }
}
