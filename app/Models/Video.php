<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $guarded = [];

    public function image()
    {
        return $this->belongsTo('App\Model\Image');
    }
}
