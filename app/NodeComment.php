<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NodeComment extends Model
{
    protected $fillable = ['node_element_id','comment','user_id'];

    public function user(){
    	return $this->belongsTo('App\User');
    }
}
