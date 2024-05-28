<?php

use App\Modules\Auth\Controller;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    Route::post('login', [Controller::class, 'login']);
    Route::post('register', [Controller::class, 'register']);
});


Route::prefix('v1')->middleware('auth:api')->group(function () {
    Route::get('check_user', [Controller::class, 'checkUser']);
});
