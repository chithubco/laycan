<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lifter extends Model
{
    protected $fillable = ['name','label','temrinal_id'];

    public function getAll(){
    	$lifters = Lifter::all();

    	return $lifters;
    }
}
