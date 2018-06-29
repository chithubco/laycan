<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Terminal extends Model
{
    protected $fillable = ['name'];

    //Function to Return all terminals 
    public function getAll(){
    	$terminals = Terminal::all();

    	return $terminals;
    }
}
