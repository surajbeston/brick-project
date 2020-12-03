<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CorporateSales extends Model
{
    protected $guarded =[];

    public function corporate()
    {
        return $this->belongsTo('App\CorporateInfo');
    }
}
