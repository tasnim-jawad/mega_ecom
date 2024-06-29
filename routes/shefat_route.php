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

    Route::get('/contact','Website\WebsiteController@contact')->name('website_contact');
    Route::get('/about','Website\WebsiteController@about')->name('website_about');
    Route::get('/terms_conditions','Website\WebsiteController@terms_conditions')->name('website_terms_conditions');
    Route::get('/returns_exchanges','Website\WebsiteController@returns_exchanges')->name('website_returns_exchanges');
    Route::get('/shipping_delivery','Website\WebsiteController@shipping_delivery')->name('website_shipping_delivery');

    Route::get('/uploads_variant','Website\TestController@uploads_variant');

    Route::get('/profile','Website\ProfileController@profile')->name('website_profile');
    Route::get('/profile/orders','Website\ProfileController@orders')->name('website_profile_orders');
    Route::get('/profile/wish-list','Website\ProfileController@wish_list')->name('website_profile_wish_list');
    Route::get('/profile/account','Website\ProfileController@account')->name('website_profile_account');
    Route::get('/profile/address','Website\ProfileController@address')->name('website_profile_address');
    Route::get('/profile/password','Website\ProfileController@password')->name('website_profile_password');

    Route::post('/profile/edit-account','Website\ProfileController@edit_account')->name('website_edit_account');
    Route::post('/profile/edit-address','Website\ProfileController@edit_address')->name('website_edit_address');
    Route::post('/profile/change-password','Website\ProfileController@change_password')->name('website_change_password');

    Route::get('/login','Website\AuthController@login')->name('login');
    Route::post('/login','Website\AuthController@login_submit')->name('login_submit');


});

// Route::get("/about", function () {
//     return Inertia::render("About", [
//         'event' => [
//             'title' => 'About',
//             'image' => 'https://etek.com.bd/frontend/images/etek_logo.png',
//             'description' => 'My Website - Used Car inventory'
//         ]
//     ]);
// });
Route::get('/test',function(){
    dd(auth()->user());
});
