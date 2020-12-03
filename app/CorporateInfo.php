<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CorporateInfo extends Model
{
    protected $guarded =[];

    public function corporate_sales()
    {
        return $this->hasMany('App\CorporateSales');
    }
}
