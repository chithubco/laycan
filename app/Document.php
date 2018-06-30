<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $fillable = ['terminal_id','cargo_id','category_id','comment','user_id','path'];

    public function getAll(){
    	$documents = Document::all();
    
    	return $documents ;
    }

    public function user(){
    
    	return $this->belongsTo('App\User') ;
    }
    public function category(){
    	
    	return $this->belongsTo('App\DocumentCategory');
    }
    public function terminal(){
    	
    	return $this->belongsTo('App\Terminal');
    }
}
