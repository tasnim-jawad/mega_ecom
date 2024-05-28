<?php

use App\Modules\LocationManageemnt\StateDivision\Controller;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    Route::apiResource('state-divisions', Controller::class);
    Route::post('state-divisions/bulk-action', [Controller::class, 'bulkAction']);
});