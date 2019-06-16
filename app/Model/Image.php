<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->hasOne('App\Model\User');
    }

    public function product()
    {
        return $this->hasOne('App\Model\Product');
    }

    public function video()
    {
        return $this->hasOne('App\Model\Video');
    }
}
