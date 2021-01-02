<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    public $fillable = [
        'product_id','packet_id','price','product_route','todays_stock','sample_issue','broken','todays_sales'
        
      ];
}
