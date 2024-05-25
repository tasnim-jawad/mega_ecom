<?php

use App\Modules\UserManagement\User\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {

    Route::prefix('users')->group(function () {
        Route::get('/', [UserController::class, 'index']);
        Route::get('{slug}', [UserController::class, 'show']);
        Route::post('store', [UserController::class, 'store']);
        Route::post('update', [UserController::class, 'update']);
        Route::post('soft-delete', [UserController::class, 'softDelete']);
        Route::post('destroy', [UserController::class, 'destroy']);
        Route::post('restore', [UserController::class, 'restore']);
        Route::post('import', [UserController::class, 'import']);
    });

});

Route::prefix('v1')->middleware('auth:api')->group(function () {
    Route::get('check_user', [UserController::class, 'checkUser']);
    // Route::post('update-password', [Controller::class, 'updatePassword']);
});
