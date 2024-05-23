<?php

use App\Modules\ProductManagement\ProductBrand\Controller;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    Route::apiResource('product-brands', Controller::class);
    Route::post('product-brands/bulk-action', [Controller::class, 'bulkAction']);
});