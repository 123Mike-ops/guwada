<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderConfirmation extends Model
{
    //
    protected $fillable=['foodid','restaurantid','typeid','isDeliverd','isCooked','userId'];



}
