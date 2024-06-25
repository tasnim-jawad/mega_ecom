<?php

use App\Http\Controllers\HomeController;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'v1', 'namespace' => 'App\Http\Controllers'], function () {
    Route::get('/nav-categories', 'Api\CategoryController@featured');
    Route::get('/brands', 'Api\CategoryController@brands');
    Route::get('/varients', 'Api\CategoryController@varients');

    Route::get('/category/{slug}', 'Api\CategoryController@category');

    Route::get('/featured-products', 'Api\ProductController@featured_products');
    Route::get('/product/{slug}', 'Api\ProductController@product');
});
