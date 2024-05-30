<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::post('login', [App\Http\Controllers\Auth\LoginController::class, 'login']);

Route::get('country', function () {
    // Path to the JSON file
    $path = public_path('vendor/json/all-countries.json');

    // Check if the file exists
    if (!File::exists($path)) {
        abort(404, 'File not found');
    }

    // Get the file contents
    $file = File::get($path);

    // Convert the file contents to an array
    $data = json_decode($file, true);
    $country_info = [];
    foreach ($data as $key => $country) {
        $country = (object) $country;

        // Check if 'root' key exists in 'idd' array
        $root = isset($country->idd['root']) ? $country->idd['root'] : '';

        // Check if 'suffixes' array exists and is not empty
        $suffix = isset($country->idd['suffixes'][0]) ? $country->idd['suffixes'][0] : '';
        $currencySymbol = isset($country->currencies) ? $country->currencies : '';

        $country_info[] = [
            "name" => $country->name["common"],
            "country_short_code" => $country->cca2,
            "flag_url" => $country->flags["png"],
            "country_code" => $root . $suffix,
            "country_symbol" => $currencySymbol,
            // Add other properties as needed
        ];
    }

    // Return a JSON response
    return response()->json($country_info);
});
