<?php

namespace App\Model;

use App\Model\Cart;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    public function cart()
    {
        return $this->belongsTo(Cart::class);
    }
}
