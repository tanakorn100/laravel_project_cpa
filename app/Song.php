<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    //
    protected $fillable = [
      'name_song',
      'artist',
      'durations'
    ];
}
