<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $fillable=['id','name','description','unitPrice'];
    //
    
    public function deliveries(){
        return  $this ->hasMany('App\Deliveries');
    }
    public function bookings(){
        return $this->hasMany('App\Booking');
    }
}
