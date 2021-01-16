<?php

namespace App\Http\Resources\Cart;

use Illuminate\Http\Resources\Json\Resource;

class CartCollection extends Resource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'name' => $this->name,
            'total_price' => round((1 - ($this->discount / 100)) * $this->price, 2),
            'discount' => $this->discount ,
            'rating' => $this->reviews->count() > 0 ? round($this->reviews->sum('star') / $this->reviews->count('star')) : 'No Rating Avalibale',
            'href' => [
                
                'link' =>  route('carts.show', $this->id),
                  
            ],
        ];
    }
}
