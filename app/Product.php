<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
      protected $fillable = ['name'];

    //Function to Return all terminals 
    public function getAll(){
    	$products = Product::all();

    	return $products;
    }
}
