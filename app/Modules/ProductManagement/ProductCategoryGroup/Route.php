<?php

use App\Modules\ProductManagement\ProductCategoryGroup\Controller;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    Route::apiResource('product-category-groups', Controller::class);
    Route::post('product-category-groups/bulk-action', [Controller::class, 'bulkAction']);
});