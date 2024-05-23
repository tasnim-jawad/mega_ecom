<?php

use App\Modules\ProductManagement\Vat\Controller;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    Route::apiResource('vats', Controller::class);
    Route::post('vats/bulk-action', [Controller::class, 'bulkAction']);
});