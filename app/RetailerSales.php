<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RetailerSales extends Model
{
    protected $guarded =[];

    public function retailer()
    {
        return $this->belongsTo('App\RetailerInfo');
    }
}
