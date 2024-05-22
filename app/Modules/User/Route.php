<?php

use App\Modules\User\Controller;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->middleware('auth:api')->group(function () {
    Route::apiResource('users', Controller::class);
    Route::post('users/bulk-action', [Controller::class, 'bulkAction']);
    Route::get('check_user', [Controller::class, 'checkUser']);
    Route::post('update-password', [Controller::class, 'updatePassword']);
});
