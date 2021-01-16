<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



// Route::get('bill', 'ProductsController@implementTask');


Route::apiResource('/carts', 'CartController');

Route::group(['prefix'=>'carts'], function () {
    Route::apiResource('/{cart_id}/reviews', 'ReviewController');
});
