<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DailyProduction extends Model
{
    protected $fillable = ['production_date','terminal_id','product_id','amount','user_id'];
    
}
