<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RetailerInfo extends Model
{
    protected $guarded =[];

    public function retailer_sales()
    {
        return $this->hasMany('App\RetailerSales');
    }
}
