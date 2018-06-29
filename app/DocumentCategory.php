<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DocumentCategory extends Model
{
    protected $fillable = ['name','description'];

    public function getAll(){
    	$documentCategories = DocumentCategory::all();
    	return $documentCategories;
    }
}
