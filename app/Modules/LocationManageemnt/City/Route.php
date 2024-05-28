<?php

use App\Modules\LocationManageemnt\City\Controller;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    Route::apiResource('cities', Controller::class);
    Route::post('cities/bulk-action', [Controller::class, 'bulkAction']);
});