<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    //
    
    protected $fillable = ['bookDate','userId','food_id','restaurantId','quantity','price','paymentDate','paymentType','time','numberOfSeat'];
public function foods()
{
    return $this->belongsTo('App\Food');

}
}
