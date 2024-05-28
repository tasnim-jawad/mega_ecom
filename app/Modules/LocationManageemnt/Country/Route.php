<?php

use App\Modules\LocationManageemnt\Country\Controller;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    Route::apiResource('countries', Controller::class);
    Route::post('countries/bulk-action', [Controller::class, 'bulkAction']);
});