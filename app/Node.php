<?php

namespace App;

use App\Node;
use Illuminate\Database\Eloquent\Model;

class Node extends Model
{
    protected $fillable = ['name','user_id'];

    public function getAll(){
    	
    	$nodes = Node::all();
    
    	return $nodes ;
    }
}
