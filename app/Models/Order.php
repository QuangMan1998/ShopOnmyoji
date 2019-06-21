<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = [];

    public function order_details()
    {
        return $this->hasMany('App\Model\OrderDetail');
    }

    public function user()
    {
        return $this->belongsTo('App\Model\User');
    }
}
