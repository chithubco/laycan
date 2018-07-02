<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NodeElement extends Model
{
    protected $fillable = ['export_id','node_id','title','description','user_id','status_id'];

    public function node(){
    	
    
    	return $this->belongsTo('App\Node');
    }

    public function status(){
    	
    
    	return $this->belongsTo('App\NodeStatus');
    }
    public function comments(){
    	
    
    	return $this->hasMany('App\NodeComment');
    }
}
