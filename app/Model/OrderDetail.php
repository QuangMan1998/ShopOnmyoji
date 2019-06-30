<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $guarded = [];

    public function order()
    {
        return $this->belongsTo('App\Model\Order');
    }

    public function product()
    {
        return $this->belongsTo('App\Model\Product');
    }
}
