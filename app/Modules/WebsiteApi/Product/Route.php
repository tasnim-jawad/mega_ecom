<?php

use App\Modules\WebsiteApi\Product\Controller;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {

    Route::get('get-all-products', [Controller::class, 'GetAllProduct']);
    Route::get('get-all-best-selling-products', [Controller::class, 'GetAllBestSellingProduct']);
    Route::get('get-product-details/{slug}', [Controller::class, 'GetProductDetails']);
    Route::get('get-all-featured-products', [Controller::class, 'GetAllFeaturedProduct']);
    Route::get('get-all-featured-products-by-category-id/{slug}', [Controller::class, 'GetAllFeaturedProductsByCategoryId']);
    Route::get('get-all-featured-products-by-brand-id/{slug}', [Controller::class, 'GetAllFeaturedProductsByBrandId']);
    Route::get('get-all-products-by-category-id/{slug}', [Controller::class, 'GetAllProductsByCategoryId']);
});
