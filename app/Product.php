<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $fillable = [
        'name','code','category_id','packet_id','generickname','description','image','price'
        
      ];
}
