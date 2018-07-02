<?php

namespace App;

use App\Node;
use Illuminate\Database\Eloquent\Model;

class Node extends Model
{
    protected $fillable = ['name','user_id','master_node_status_id'];

    public function getAll(){
    	
    	$nodes = Node::all();
    
    	return $nodes ;
    }

   	public function user(){

    	return $this->belongsTo('App\User');
    }
    public function nodeElements(){

    	return $this->hasMany('App\NodeElement');
    }
    public function status(){
    	
    	return $this->hasOne('App\MasterNodeStatus','id');
    }
}
