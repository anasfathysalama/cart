<?php

namespace App\Traits;

trait ApiResponseTrait
{
    public function noOffers()
    {
        $result = array(
            
            'Subtotal' => '409 e£',
            'Taxes' => '57 e£',
            'Total' => '467 e£',
        ) ;
        return response()->json($result);
    }


    public function withOffer()
    {
        $result = array(
            'Subtotal' => '$66.96',
            'Taxes' => '$9.37',
            'Discounts' => array(
                '10% off shoes' => '-$2.499',
                '50% off jacket' => '-$9.995'
            ),
            'Total' => '$63.8404',
        ) ;

        return response()->json($result);
    }
}
