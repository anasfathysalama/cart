<?php

namespace App\Model;

use App\Model\Review;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    // cart can has many reviews
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
