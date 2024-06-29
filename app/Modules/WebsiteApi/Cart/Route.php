<?php

use App\Modules\WebsiteApi\Cart\Controller;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {

    Route::get('get-cart-items', [Controller::class, 'index']);
    Route::post('add-to-cart', [Controller::class, 'store']);
    Route::post('update-cart-item-quantity', [Controller::class, 'update']);
    Route::delete('remove-cart-item/{cartId}', [Controller::class, 'destroy']);
});
