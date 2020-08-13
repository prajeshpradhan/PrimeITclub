<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $timestamps = false;
    // Relationship with Events

    public function event()
    {
        return $this->hasMany('App\Event');
    }
}
