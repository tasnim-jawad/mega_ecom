<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
| be assigned to the "web" middleware group. Make something great!
|
*/
// git rm --cached --ignore-unmatch storage/log/oauth-private.zip





Route::get('/dashboard', function () {
    return view('backend.dashboard');
});

Route::get('/', function () {
    return Inertia::render('Home/Index');
});

Route::get('/blogs', function () {
    return Inertia::render('Blogs/Index');
});
Route::get('/products', function () {
    return Inertia::render('Products/Index');
});
Route::get('/product-details/{slug}', function () {
    return Inertia::render('Products/ProductDetails');
});
Route::get('/cart', function () {
    return Inertia::render('Cart/Index');
});
Route::get('/checkout', function () {
    return Inertia::render('Checkout/Index');
});

Route::get('/image', function () {
    $image = file_get_contents('https://m2ce.sindabad.com/pub/media/catalog/category/classification/flash-outline.svg');

            file_put_contents(public_path('uploads/d_products/' . rand(100000, 999999) . '.jpg'), $image);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::post('login', [App\Http\Controllers\Auth\LoginController::class, 'login']);
