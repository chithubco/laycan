<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NodeElement extends Model
{
    protected $fillable = ['export_id','node_id','title','description','user_id','status_id'];
}
