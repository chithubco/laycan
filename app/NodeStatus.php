<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NodeStatus extends Model
{
    protected $fillable = ['name','description','label'];

    public function getAll(){
    	$nodeStatus = NodeStatus::all();

    	return $nodeStatus;
    }

    public function nodeElements(){
    	return $this->hasMany('App\NodeElement') ;
    }
}
