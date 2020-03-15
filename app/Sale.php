<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $guarded = [];

    /*public function services(){
        return $this->belongsToMany('App\Service')->withPivot('service_name', 'service_price');
    }*/

    public function services(){
        return $this->hasMany('App\Service');
    }
}
