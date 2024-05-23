<?php

use App\Modules\ProductManagement\ProductMenufacturer\Controller;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    Route::apiResource('product-menufacturers', Controller::class);
    Route::post('product-menufacturers/bulk-action', [Controller::class, 'bulkAction']);
});