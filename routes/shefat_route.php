<?php

use Illuminate\Support\Facades\Route;

Route::get('/image', function () {
    stockStore();
    // dd(Carbon::now()->toDateString());
    // $image = file_get_contents('https://m2ce.sindabad.com/pub/media/catalog/category/classification/flash-outline.svg');

    // file_put_contents(public_path('uploads/d_products/' . rand(100000, 999999) . '.jpg'), $image);
});
