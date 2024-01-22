<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
      protected $fillable=['name','email','phone','description','image','rating','currency','approximateDeliveryTime'
    ,'address','fullAddress','ZIPCode','longtude','latitude','chargeType','pricePerKm','pricePerKm','maxDeliveryDistance','cancelationFee',
    'minOrderPrice','minOrderAmount']; 
  
}
