<?php

use App\Modules\LocationManageemnt\Thana\Controller;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    Route::apiResource('thanas', Controller::class);
    Route::post('thanas/bulk-action', [Controller::class, 'bulkAction']);
});


