<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consignee extends Model
{
    protected $fillable = ['name','terminal_id'];

    public function getAll(){
    	$consignees = Consignee::all();

    	return $consignees;
    }
}
