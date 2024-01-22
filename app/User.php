<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    protected $guarded=[];
    protected $primarykey='id';

    protected $fillable = [
        'id','name', 'email', 'password','image','userRole','status','phone','address'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    use Notifiable;
    protected $hidden = [
        'password', 'remember_token',
    ];
    

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function isAdmin() {
        if($this->userRole== 'admin'){
             return true;
         }
         return false;
     }
     public function isRestaurantAdmin() {
        if($this->userRole== 'restaurants'){
             return true;
         }
         return false;
     }
     public function isGuest() {
        if($this->userRole== 'guest'){
             return true;
         }
         return false;
     }
// public function deliveries(){
//    return $this->belongsToMany('App\Deliveries');
// }

    public function profiles(){
        return $this->hasOne('App\Profile','user_id');
    } 


}
