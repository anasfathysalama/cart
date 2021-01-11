<?php

namespace App\Http\Controllers;

use App\Traits\ApiResponseTrait;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    use ApiResponseTrait;
    public function implementTask()
    {
        $products = request('products');

        //  $catalogProducts = ['T-shirt' , 'Pants' , 'Jacket' , 'Shoes'] ;

        $products_array = explode(",", $products);
        //  Check for  first offer
        $firstOffer = in_array('Shoes', $products_array);
        //  Check for  second offer
        $secondOffer = array_count_values($products_array);

        
        /* #####################   handel where offers are not apply        ####################### */

        if (!$firstOffer && $secondOffer['T-shirt'] != 2) {
            return $this->noOffers();
        }
        /* #####################   End      ####################### */

        /* #####################   handel where at least one offer is  apply        ####################### */
        if ($firstOffer || $secondOffer['T-shirt'] == 2) {
            return $this->withOffer();
        }
        /* #####################   End      ####################### */
    }
}
