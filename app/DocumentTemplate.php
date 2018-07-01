<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DocumentTemplate extends Model
{
    protected $fillable = ['name','description','terminal_id','path','user_id'];

    public function terminal(){
    	return $this->belongsTo('App\Terminal');
    }
    public function user(){
    	return $this->belongsTo('App\User');
    }
}
