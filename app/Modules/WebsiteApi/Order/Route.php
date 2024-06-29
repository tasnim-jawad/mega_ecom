<?php

use App\Modules\WebsiteApi\Order\Controller;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {

        Route::post('customer-ecommerce-order', [Controller::class,'store']);

});
