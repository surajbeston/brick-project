<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OtherInfo extends Model
{
    protected $guarded =[];

    public function other_sales()
    {
        return $this->hasMany('App\OtherSales');
    }
}
