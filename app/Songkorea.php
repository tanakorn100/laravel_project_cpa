<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Songkorea extends Model
{
    //
    protected $fillable = [
      'namesong' , 'artist' , 'durations' , 'about' , 'rating'
    ];

    protected $dates = ['created_at'];

}
