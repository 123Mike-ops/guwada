<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bar extends Model
{
    //
    protected $fillable = [
        'name',
        'city',
        'location',
        'service',
    ];
}
