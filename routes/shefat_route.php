<?php

use Illuminate\Support\Facades\Route;

Route::group( ['namespace' => 'App\Http\Controllers' ],function(){
    // Route::get('/',function(){
    //     return view('app');
    // });
    Route::get('/','Website\WebsiteController@home')->name('website_home');
    Route::get('/blogs','Website\WebsiteController@blogs')->name('website_blogs');

    Route::get('/category/{slug}','Website\WebsiteController@products')->name('website_products');
    Route::get('/product-details/{slug}','Website\WebsiteController@products_details')->name('website_products_details');

    Route::get('/cart','Website\WebsiteController@cart')->name('website_cart');
    Route::get('/checkout','Website\WebsiteController@checkout')->name('website_checkout');

    Route::get('/uploads_variant','Website\TestController@uploads_variant');
});

// Route::get("/about", function () {
//     return Inertia::render("About", [
//         'event' => [
//             'title' => 'About',
//             'image' => 'https://miamjuraindhaka.edu.bd/frontend/assets/images/principal_image/teacher2.jpeg',
//             'description' => 'My Website - Used Car inventory'
//         ]
//     ]);
// });
