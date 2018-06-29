<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CargoType extends Model
{
    protected $fillable = ['name','description','terminal_id'];

    public function getAll(){
    	$cargoTypes = CargoType::all();

    	return $cargoTypes;
    }
}
