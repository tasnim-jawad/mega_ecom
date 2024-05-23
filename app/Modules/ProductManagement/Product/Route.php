<?php

use App\Modules\ProductManagement\Product\Controller;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    Route::apiResource('products', Controller::class);
    Route::post('products/bulk-action', [Controller::class, 'bulkAction']);
});