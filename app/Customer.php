<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Restaurant;
use App\User;
use DB;

class Customer extends Model
{
    protected $fillable=['id','name','email','phone','adderess','restaurantId'];
    

}
