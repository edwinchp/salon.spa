<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $guarded = [];

    public function sale(){
        return $this->belongsTo('App\Sale');
    }
}
