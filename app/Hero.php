<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    public function images()
        {
           // return $this->belongsToMany('App\Image', 'hero_image', 'hero_id', 'image_id');

           //If I am fine with using default I don't need to pass other arguments?
           return $this->belongsToMany('App\Image');
        }
}
