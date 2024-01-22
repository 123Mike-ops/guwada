<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    //
    protected $fillable=['restaurantid','foodid','name','image','description'];
    public function foods(){
        $this->belongsTo('App\Food');
    }
}
