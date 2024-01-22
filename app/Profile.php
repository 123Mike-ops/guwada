<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable=['age','nickname','otheremail','otherlocation','otherphone','profilephoto','user_id'];
    public function users(){
        return $this->hasOne('App\User','id');
    }
}
