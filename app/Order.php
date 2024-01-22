<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $fillable=['foodid','restaurantid','typeid','ingrident','userId','stageid'];
}
