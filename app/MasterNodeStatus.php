<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MasterNodeStatus extends Model
{
    protected $fillable = ['name','description','label','state'];

      public function nodes(){
    	return $this->hasMany('App\Node') ;
    }


}
