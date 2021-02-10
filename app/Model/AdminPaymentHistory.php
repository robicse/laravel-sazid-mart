<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class AdminPaymentHistory extends Model
{
    protected $guarded = [];
    public function seller()
    {
        return $this->belongsTo('App\Model\Seller', 'seller_id');
    }
}
