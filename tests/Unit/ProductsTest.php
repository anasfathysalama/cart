<?php

namespace Tests\Unit;

use Tests\TestCase;

//use PHPUnit\Framework\TestCase;

class ProductsTest extends TestCase
{

    /**
     * A basic test example.
     *
     * @return void
     */

    public function test_none_of_the_offers_are_eligible()
    {
        $response = $this->json('GET', '/api/bill', ['products' => 'T-shirt,Pants']);

        $response
            ->assertStatus(200)
            ->assertExactJson([
                'Subtotal' => '409 e£',
                'Taxes' => '57 e£',
                'Total' => '467 e£',
            ]);
    }

    public function test_at_least_one_offer_is_eligible()
    {
        $response = $this->json('GET', '/api/bill', ['products' => 'T-shirt,T-shirt,Shoes,Jacket']);

        $response
            ->assertStatus(200)
            ->assertExactJson([
                'Subtotal' => '$66.96',
                'Taxes' => '$9.37',
                'Discounts' => array(
                    '10% off shoes' => '-$2.499',
                    '50% off jacket' => '-$9.995'
                ),
                'Total' => '$63.8404',
            ]);
    }
}
