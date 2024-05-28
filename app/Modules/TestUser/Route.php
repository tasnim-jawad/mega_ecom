<?php

use App\Modules\TestUser\Controller;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    Route::post('test-user/store', [Controller::class, 'store']);
    Route::post('test-user/get', [Controller::class, 'index']);
    Route::post('test-user/get', [Controller::class, 'index']);
    Route::post('test-user/get', [Controller::class, 'index']);
    Route::post('test-user/get', [Controller::class, 'index']);
    Route::post('test-user/get', [Controller::class, 'index']);
    Route::post('test-user/get', [Controller::class, 'index']);
    Route::post('test-user/get', [Controller::class, 'index']);
    Route::post('test-user/get', [Controller::class, 'index']);
});
