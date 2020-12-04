<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OtherSales extends Model
{
    protected $guarded =[];

    public function other()
    {
        return $this->belongsTo('App\OtherInfo');
    }
}
