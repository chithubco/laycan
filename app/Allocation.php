<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Allocation extends Model
{
    protected $fillable = ['date','block','label','value','user_id'];
    
}
