<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    //
    protected $fillable=['id','itemId','name','userId','quantity','totalPrice'];
}
