<?php

use App\Modules\LocationManageemnt\District\Controller;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    Route::apiResource('districts', Controller::class);
    Route::post('districts/bulk-action', [Controller::class, 'bulkAction']);
});