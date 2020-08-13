<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    // Relationship with Category

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function company()
    {
        return $this->belongsToMany('App\Company')->withPivot('type');
    }
}
