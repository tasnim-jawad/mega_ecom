<?php

use App\Modules\WebsiteApi\Category\Controller;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {

    Route::get('get-all-category-groups', [Controller::class, 'GetAllCategorygroups']);
    Route::get('get-all-category-by-category-group-id/{slug}', [Controller::class, 'GetCategoryByCategoryGroupId']);

    Route::get('get-all-categories', [Controller::class, 'GetAllCategory']);
    Route::get('get-all-featured-categories', [Controller::class, 'GetAllFeaturedCategory']);
    Route::get('get-all-nav-categories', [Controller::class, 'GetAllNavCategory']);
    Route::get('get-all-sub-category-by-category-id/{slug}', [Controller::class, 'GetAllSubCategoryByCategoryId']);

});
