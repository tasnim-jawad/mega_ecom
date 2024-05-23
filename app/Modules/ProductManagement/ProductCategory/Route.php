<?php

use App\Modules\ProductManagement\ProductCategory\Controller;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    Route::apiResource('product-categories', Controller::class);
    Route::post('product-categories/bulk-action', [Controller::class, 'bulkAction']);
});