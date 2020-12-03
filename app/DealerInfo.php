<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DealerInfo extends Model
{
    protected $guarded =[];

    public function sales()
    {
        return $this->hasMany('App\Sales');
    }
}
