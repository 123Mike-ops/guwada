<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deliveries extends Model
{
    //
    // public function user()
    // {
    //     return $this->hasMany('App\User');
    // }
    public function foods(){
        $this ->hasMany('App\Food','id');
    }
}
