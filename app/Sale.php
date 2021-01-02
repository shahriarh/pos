<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    public $fillable = [
        'created_at','emp_id','stock_id','todays_qty','price','discount','netprice'
        
      ];
}
